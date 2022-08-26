<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graph extends CI_Controller {
    
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $attr['getAllSimpul'] = $this->db->query("SELECT * FROM tb_simpul ORDER BY simpulNama ASC")->result();
        $attr['title'] = 'GRAPH';
        $attr['tableTitle'] = 'Data Graph';
        $attr['tableDesc'] = 'Berikut adalah data Graph yang sudah terinput';
        $this->load->view('graph',$attr);
    }
    public function get(){
        $this->load->model('M_Graph');
        $this->M_Graph->datatable();
    }

    public function getAll(){
        $query = $this->db->query("SELECT
                            tb_graf.graphID,
                            SM.simpulNama as simpulAwal,
                            SM.simpulLat as simpulAwalLat,
                            SM.simpulLng as simpulAwalLng,
                            SA.simpulNama as simpulAkhir,
                            SA.simpulLat as simpulAkhirLat,
                            SA.simpulLng as simpulAkhirLng,
                            jarak
                            FROM
                            tb_graf
                            INNER JOIN tb_simpul AS SM ON tb_graf.simpulMulai = SM.simpulID
                            INNER JOIN tb_simpul AS SA ON tb_graf.simpulAkhir = SA.simpulID");
        if($query->num_rows() > 0){
            echo json_encode($query->result());
        }
    }
    public function insert(){
        $graphID = $this->input->post('graphID');
        $simpulMulai = $this->input->post('simpulMulai');
        $simpulAkhir = $this->input->post('simpulAkhir');
        $jarak = $this->input->post('jarak');
        $this->load->model('M_Graph');
        
        $is_inserted = $this->M_Graph->insert($graphID,$simpulMulai,$simpulAkhir,$jarak);
        
        if($is_inserted){
            echo "TRUE";
        }else{
            echo "FALSE";
        }
        
    }
    public function delete($graphID){
        $this->db->query("DELETE FROM tb_graf WHERE graphID = $graphID");
        if($this->db->affected_rows()){
            echo 'true';
        }else{
            echo 'false';
        }
    }
    public function getByID($grafID){
        $query = $this->db->query("SELECT * FROM tb_graf WHERE graphID = '{$grafID}'");
        if($query->num_rows() > 0){
            echo json_encode($query->result()[0]);
        }else{
            echo json_encode(array());
        }
    }
    public function getSimpul(){
        $query = $this->db->query("SELECT * FROM tb_simpul WHERE simpulNama LIKE '%{$this->input->post('data')}%'");
        echo json_encode($query->result());
    }
}
