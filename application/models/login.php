<?php 
class Login extends CI_Model{
    
    function __construct()
    {
        parent::__construct();
    }

    public function login($txtusername, $txtpassword){        
        $this->db->select('p.id ,p.name , p.lastname,p.dni,p.email');
        $this->db->from('users u');
        $this->db->join('persons p','p.id = u.personId');
        $this->db->where('u.username', $txtusername);
        $this->db->where('u.password', $txtpassword);

         $result =  $this->db->get();
         if($result->num_rows == 1){
             $r = $result->row();
            $user_session = array(
                's_id' => $r->id,
                's_name' => $r->name,
                's_lastname' => $r->lastname
            );
            $this->session->userdata($user_session);
            return true;
         }else{
            false;
         }
   }

   public function close_sesion(){
       
   }




}