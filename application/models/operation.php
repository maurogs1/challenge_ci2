<?php 
class Operation extends CI_Model{

    public function add($data){
       $operation =  array(
            'personId' => $data['personId'],
            'categoryId' => $data['categoryId'],
            'amount' => $data['amount'],
            'date' => date("Y-m-d"),
            'concept' => $data['concept'],
            'type' => $data['type']
       );
        $this->db->insert('operations',$operation);
    }
}