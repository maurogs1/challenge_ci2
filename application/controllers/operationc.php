<?php
class Operationc extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('operation');
        $this->load->library('../controllers/loginc');
        $this->loginc->isLogged();
      
    }


    
    public function index(){
       $this->loadOperation();
     }

    public function add(){
        $data['amount'] = $this->input->post('amount');
        $data['concept'] = $this->input->post('concept');
        $data['categoryId'] = $this->input->post('category');
        $data['type'] = $this->input->post('type');  
        $data['personId'] = $this->session->userdata('id');   
        if($this->isNull($data)){
            $this->loadOperation($data,true);
        }else{   
        $this->operation->add($data);
        redirect('operationc', 'refresh');
        }
    }


    private function loadOperation($data = null, $isError = false){
        $data['name'] = $this->session->userdata('name');
        $data['lastname'] =$this->session->userdata('lastname');

        $this->load->view('layouts/header');      
        $this->load->view('layouts/nav',$data);
        if($isError){
            $data['error'] = "Algunos campos están vacíos";

            $this->load->view('error/errorv', $data);
        }
        
        $this->load->view('operation/operationv');
        $this->load->view('layouts/footer');
    }

    public function getAll(){        
        echo  json_encode($this->operation->getAll());
    }
    public function update(){
        $data['id'] = $this->input->post('mid');
        $data['amount'] = $this->input->post('mamount');
        $data['concept'] = $this->input->post('mconcept');        
        $data['categoryId'] = $this->input->post('mcategory');
        $data['type'] = $this->input->post('mtype'); 
        $data['personId'] = $this->session->userdata('id');      
        if($this->isNull($data)){
           $this->loadOperation($data,true);
        }else{
            $this->operation->update($data);
            redirect('operationc', 'refresh');
        }
    }

    public function delete(){
        $this->operation->delete($this->input->post('id'));
    }

    public function isNull($data){

        $amount = $data['amount'];
        $concept = $data['concept'];
        $category = $data['categoryId'];
        $type = $data['type'];  
        
        if($amount == null || $concept == null || $category == null)
            return true;
        return false; 
    }

}