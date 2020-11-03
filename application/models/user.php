<?php

    class User extends CI_Model{
        public $username;
        public $password;
        public $personId;

        function __construct()
        {
            parent::__construct();
        }

         public function add($txtusername, $txtpassword,$personid){
             $this->username = $txtusername;
             $this->password = $txtpassword;
             $this->personId = $personid;
             $this->db->insert('users',$this);
        }
    }