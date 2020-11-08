<?php 
class Budget extends CI_Model{

    public function add(){
        $data = array(
            'entry'=> 0,
            'egress'=>0,
            'balance'=>0
        );
        $this->db->insert('budgets',$data);
        return $this->db->insert_id();
    }
    public function get($id){
       $budgetId =  $this->db->query('SELECT * FROM budgets WHERE id ='.$id);
        return $budgetId->row();
    }

}