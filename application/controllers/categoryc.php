<?php
class Categoryc extends CI_Controller{

    public function getAll(){
        $this->load->model('category');
        $result = $this->category->getAll();
        echo json_encode($result);
    }
}