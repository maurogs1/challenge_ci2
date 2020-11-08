<?php 
class Homec extends CI_Controller{
    
    public function index(){
    $this->loadHome();      

    }


    private function loadHome(){
        $this->load->view('layouts/header');
        $data['name'] = $this->session->userdata('name');
        $data['lastname'] =$this->session->userdata('lastname');
        $this->load->view('layouts/nav',$data);
        $this->load->view('user/homev');
        $this->load->view('layouts/footer');
    }
}