<?php
class Operationc extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('operation');
    }


    public function index(){
        $this->load->view('layouts/header');
        $data['name'] = $this->session->userdata('name');
        $data['lastname'] =$this->session->userdata('lastname');
        $this->load->view('layouts/nav',$data);
        $this->load->view('operation/operationv');
        $this->load->view('layouts/footer');
    }

    public function add(){
        $data['amount'] = $this->input->post('amount');
        $data['concept'] = $this->input->post('concept');
        $data['categoryId'] = $this->input->post('category');
        $data['type'] = $this->input->post('type');  
        $data['personId'] = $this->session->userdata('id');      
        $this->operation->add($data);
    }
}