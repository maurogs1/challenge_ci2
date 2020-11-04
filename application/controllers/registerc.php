<?php
class Registerc extends CI_Controller{
 
        public function __construct()
        {
            parent::__construct();
            $this->load->model('person');
            $this->load->model('user');
            $this->load->library('encrypt');
            $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');
    

        }
        public function index($data=null){
            $this->loadRegister($data);
        }

        public function register(){
            $name = $this->input->post('nombre');
            $lastname =$this->input->post('apellido');
            $dni = $this->input->post('dni');
            $email=$this->input->post('email');
            $username = $this->input->post('username');
            
            $password =$this->encrypt->sha1($this->input->post('password'));
            //if($this->elementsNull($name,$lastname,$dni,$email,$username,$password)){            
            $personId = $this->person->add($dni,$name,$lastname,$email);            
            $this->user->add($username,$password,$personId);
            $this->loadLogin();                
            //}
            
        }

        private function loadRegister($data = null){
            $this->load->view('layouts/header');
            $this->load->view('user/register',$data);
            $this->load->view('layouts/footer');
        }
        private function loadLogin($data = null){
            $data['error'] = '';
            $this->load->view('layouts/header');                                                 
            $this->load->view('login/loginv',$data);
            $this->load->view('layouts/footer');
        }
        private function elementsNull($name,$lastname,$dni,$email,$username,$password){
            if(($name ==null || $lastname ==null || $dni ==null|| $email ==null|| $username==null || $password==null)){
                $data['error'] = "CAMPOS VACIOS";                
                $this->load->view('user/register',$data);
                return false;
            }
            return true;               
        }
}