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
        $result['error'] = "";
        $this->load->view('layouts/header');
        $this->load->view('login/loginv',$result);
        $this->load->view('layouts/footer');
    }

    public function login(){
        $username = $this->input->post('username');
        $password =$this->encrypt->sha1($this->input->post('password'));
        $result = $this->login->login($username, $password);
        if(!$result){
            $result['error'] ="Usuario o contraseña incorrecto";
            $this->load->view('layouts/header');
            $this->load->view('login/loginv',$result);
            $this->load->view('layouts/footer');
            
        }else
        echo "Nombre ".$this->session->userdata('name');
        echo  " Apellido: ".$this->session->userdata('lastname');
        echo   " Id: " .$this->session->userdata('id');
      //  echo $this->session->userdata('logged_in');
        
        

    }
   
}