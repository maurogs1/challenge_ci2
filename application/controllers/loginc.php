<?php 

class Loginc extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login');
        $this->load->helper('url');
        $this->load->library('encrypt');


    }
    public function index(){
        $this->loadLogin();
    }

    public function login(){
        $username = $this->input->post('username');
        $password =$this->encrypt->sha1($this->input->post('password'));
        $result = $this->login->login($username, $password);
        if(!$result)
            $this->loadLogin("Usuario o contraseña incorrecto");
        else
        redirect('homec', 'refresh');

    }
    public function logout(){
        $this->session->sess_destroy();
        $this->loadLogin();
    }

    private function loadLogin($error=''){
        $result['error'] =$error;
        $this->load->view('layouts/header');
        $this->load->view('login/loginv',$result);
        $this->load->view('layouts/footer');    
    }

    public function isLogged(){
        if(!($this->session->userdata('logged_in')))
            redirect('loginc');
    }
    
   
}