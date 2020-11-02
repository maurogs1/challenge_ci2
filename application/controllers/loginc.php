<?php 

class Loginc extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->load->view('layouts/header');
        $this->load->view('login/loginv');
        $this->load->view('layouts/footer');
    }
   
}