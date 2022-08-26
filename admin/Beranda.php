<?php
defined('BASEPATH') or exit('No direct script access allowed');
require ("Astar.php");

class Beranda extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * http://example.com/index.php/welcome
     * - or -
     * http://example.com/index.php/welcome/index
     * - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     *
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $attr['title'] = NAMA_APLIKASI;
        $attr['dt_simpul'] = $this->db->get('tb_simpul')->result();
        $this->load->view('landingPage', $attr);
    }

    public function data_gym()
    {
        $attr['title'] = NAMA_APLIKASI;
        $attr['dt_simpul'] = $this->db->get('tb_simpul')->result();
        $this->load->view('data_gym', $attr);
    }

    public function detail($id)
    {
        $attr['title'] = NAMA_APLIKASI;
        $attr['dt_simpul'] = $this->db->query("SELECT * FROM tb_simpul WHERE simpulID = $id")->result()[0];
        $this->load->view('detail', $attr);
    }

    public function get()
    {
        $this->load->model('M_Gym');
        $this->M_Gym->datatable2();
    }

    public function cariRute()
    {
        /*
         * $lok_asal = $this->input->post('lokasiAwal');
         * $lok_akhir = $this->input->post('lokasiAkhir');
         */
        $lok_asal = $this->input->post('lokasiAwal');
        $lok_akhir = $this->input->post('lokasiAkhir');

								
        $b = $this->db->query("SELECT *,a.simpulNama as a1, b.simpulNama as b1 FROM tb_graf 
                                INNER JOIN tb_simpul as a ON tb_graf.simpulMulai = a.simpulID 
                                INNER JOIN tb_simpul as b ON tb_graf.simpulAkhir = b.simpulID
                              ")->result();
		$data_rute = array();
        // $g = new Graph();
        $graph = array();
        foreach ($b as $dt_rute) {
            $graph[$dt_rute->simpulMulai][$dt_rute->simpulAkhir] = round($dt_rute->jarak, 2);
            $graphNama[$dt_rute->simpulMulai] = $dt_rute->a1;
            $graphNama[$dt_rute->simpulAkhir] = $dt_rute->b1;
        }

        /*
         * Dapatkan nilai heuristik
         *
         */
        $simpul = $this->db->get('tb_simpul')->result();
        foreach ($simpul as $row) {
            $h[$row->simpulID] = array(
                $row->simpulLat,
                $row->simpulLng
            );
        }
        $key_h = array_keys($h);

        $goal = $lok_akhir;
        /*
         * Mencari Nilai heuristik
         * Menggunakan Metode teorema euclid
         */
        $heuristik = array();
        for ($i = 0; $i < count($key_h); $i ++) {
            $heuristik_value = sqrt(pow(($h[$key_h[$i]][0] - $h[$goal][0]), 2) + pow(($h[$key_h[$i]][1] - $h[$goal][1]), 2)) * 111.319;
            $heuristik[$key_h[$i]] = round($heuristik_value, 2);
        }
        $Obj = new Astar($heuristik, $graph,$graphNama, $lok_asal, $lok_akhir);
        if ($Obj->getDistance() != 'JARAK_TIDAK_DIKETAHUI') {
            $path = array();
            $path_str = implode(",", $Obj->getPath());
            $dt_simpul = $this->db->query("SELECT * FROM tb_simpul WHERE simpulID IN ($path_str) ORDER BY FIELD(simpulID,$path_str)");

            foreach ($dt_simpul->result() as $r) {
                if ($r->simpulID == $lok_asal) {
                    $lok_asal_nama = $r->simpulNama;
                } elseif ($r->simpulID == $lok_akhir) {
                    $lok_akhir_nama = $r->simpulNama;
                } else {
                    $path[] = $r->simpulNama;
                }
            }

            $res['from_'] = $lok_asal_nama;
            $res['from'] = $lok_asal;
            $res['to_'] = $lok_akhir_nama;
            $res['to'] = $lok_akhir;
            $res['path'] = array_reverse($Obj->getPath());
            $res['path_'] = implode(" -> ", $path);
            $res['detail_perhitungan'] = $Obj->getDetailPerhitungan();
            $res['distance'] = round($Obj->getDistance(), 2) . " Km";
            echo json_encode($res);
        } else {
            echo json_encode(array());
        }
    }
}

