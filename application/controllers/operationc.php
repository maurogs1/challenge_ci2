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

    public function getAll(){
        
        echo  json_encode($this->operation->getAll());

    }
    public function update(){
        $data['id'] = $this->input->post('mid');
        $data['amount'] = $this->input->post('mamount');
        $data['date'] = $this->input->post('mdate');
        $data['concept'] = $this->input->post('mconcept');        
        $data['categoryId'] = $this->input->post('mcategory');
        $data['type'] = $this->input->post('mtype'); 
        $data['personId'] = $this->session->userdata('id');      
        $this->operation->update($data);
    }

    public function delete(){
        $this->operation->delete($this->input->id);
    }
    
}