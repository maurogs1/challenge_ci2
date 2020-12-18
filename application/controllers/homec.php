<?php 
class Homec extends CI_Controller{
    const ENTRY = "entry";
    const EGRESS = "egress";
    
    public function index(){
    
    $this->load->model('operation');
        $data = $this->setTotalAmount();
        $this->loadHome($data);     
        $this->load->library('../controllers/loginc');
        $this->loginc->isLogged(); 
    }







    private function loadHome($data){
        $this->load->view('layouts/header');
        $data['name'] = $this->session->userdata('name');
        $data['lastname'] =$this->session->userdata('lastname');
        $this->load->view('layouts/nav',$data);
        $this->load->view('user/homev',$data);
        $this->load->view('layouts/footer');
    }


    public function setTotalAmount(){
        $entry = $this->operation->getAmountByType(Homec::ENTRY);
        $egress = $this->operation->getAmountByType(Homec::EGRESS);
        $data['entry'] = $entry;
        $data['egress'] = $egress;
        $data['balance'] = $entry - $egress;                  
        return $data;
    }

    public function getLastTen(){
        $this->load->model('operation');
        echo json_encode($this->operation->getLastTen());
    }

    public function getByMonth(){
        $monthNumber = $this->input->post('total');
        
    }

    public function getByCategory(){
        $this->load->model('operation');

    echo json_encode($this->operation->getAllByCategory($this->input->post('category')));

    }

    

}