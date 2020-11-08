<?php
class Category extends CI_Model{

    public function getAll(){
        return $this->db->get('categories')->result();
    }
}