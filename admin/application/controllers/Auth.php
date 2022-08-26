<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
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
        $this->load->view('login');
    }
    public function prosesLogin(){
        $username =  $this->input->post('username');
        $password = $this->input->post('password');
        
        $res = $this->db->query("SELECT * FROM tb_admin WHERE adminUsername = '$username' AND adminPassword = '$password'");
        if($res->num_rows() > 0){
            $this->session->set_userdata(array('user'=>$res->result()));
            redirect('Dashboard');
        }else{
            $this->load->view('loginGagal');
        }
    }
    public function prosesLogout(){
        $this->session->unset_userdata('user');
        redirect('Auth');
    }
}
