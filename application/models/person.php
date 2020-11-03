<?php

class Person extends CI_Model{
    public $dni;
    public $fullname;
    public $email;
    function __construct()
    {
        parent::__construct();
    }


    public function add($txtdni, $txtfullname,$txtemail){
        $this->dni = $txtdni;
        $this->fullname = $txtfullname;
        $this->email = $txtemail;
        $this->db->insert('personas', $this);
        return $this->db->insert_id();
    }

}