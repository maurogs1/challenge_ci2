<?php 
class Login extends CI_Model{
    
    function __construct()
    {
        parent::__construct();
    }

    public function login($txtusername, $txtpassword){        
        $this->db->select('p.id,p.fullname,p.dni,p.email');
        $this->db->from('users u');
        $this->db->join('persons p','p.id = u.personId');
        $this->db->where('u.username', $txtusername);
        $this->db->where('u.password', $txtpassword);

        return $this->db->get()->row();
   }}