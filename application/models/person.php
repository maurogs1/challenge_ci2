<?php

class Person extends CI_Model{
    public $dni;
    public $name;
    public $lastname;
    public $email;
    function __construct()
    {
        parent::__construct();
    }


    public function add($txtdni, $txtname,$txtlastname,$txtemail){
        $this->dni = $txtdni;
        $this->name = $txtname;
        $this->lastname = $txtlastname;
        $this->email = $txtemail;
        $this->db->insert('persons', $this);
        return $this->db->insert_id();
    }

}