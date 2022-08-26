<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gym extends CI_Controller {
    
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
        $attr['getAllSimpul'] = $this->db->get('tb_simpul')->result();
        $attr['title'] = 'Lokasi Pusat Informasi';
        $attr['tableTitle'] = 'Pusat Informasi';
        $attr['tableDesc'] = 'Berikut adalah data lokasi pusat informasi yang sudah terinput';
        $this->load->view('gym',$attr);
    }
    public function get(){
        $this->load->model('M_Gym');
        $this->M_Gym->datatable();
    }

    public function insert(){
        $simpulID = $this->input->post('simpulID');
        $simpulType = $this->input->post('simpulType');
        $simpulNama = $this->input->post('simpulNama');
        $simpulAlamat = $this->input->post('simpulAlamat');
        $simpulLat = $this->input->post('simpulLat');
        $simpulLng = $this->input->post('simpulLng');
        $this->load->model('M_Gym');
        
        $is_inserted = $this->M_Gym->insert($simpulID,$simpulNama,$simpulType,$simpulAlamat,$simpulLat,$simpulLng);
        
        if($is_inserted){
            echo "TRUE";
        }else{
            echo "FALSE";
        }
        
    }
    public function delete($simpulID){
        $this->db->query("DELETE FROM tb_simpul WHERE simpulID = $simpulID");
        if($this->db->affected_rows()){
            echo 'true';
        }else{
            echo 'false';
        }
    }
    public function getByID($simpulID){
        $query = $this->db->query("SELECT * FROM tb_simpul WHERE simpulID = '{$simpulID}'");
        if($query->num_rows() > 0){
            echo json_encode($query->result()[0]);
        }else{
            echo json_encode(array());
        }
    }
}
