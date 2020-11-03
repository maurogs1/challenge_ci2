<?php 

class Loginc extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login');
        $this->load->helper('url');

    }
    public function index(){
        $result['error'] = "";
        $this->load->view('layouts/header');
        $this->load->view('login/loginv',$result);
        $this->load->view('layouts/footer');
    }

    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $result = $this->login->login($username, $password);
        if(!$result){
            $result['error'] ="Usuario o contraseña incorrecto";
            $this->load->view('layouts/header');
            $this->load->view('login/loginv',$result);
            $this->load->view('layouts/footer');
        }else
        echo "bien";
        
        

    }
   
}