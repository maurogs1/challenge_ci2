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

    public function getAll(){
        $this->db->select('o.id,o.amount, o.date, o.concept, o.type, p.name, p.lastname, c.name category');
        $this->db->from('operations o');
        $this->db->join('persons p','p.id = o.personId');
        $this->db->join('categories c','c.id = o.categoryId');    
        return $this->db->get()->result();
    }

    public function update($data){
        $operation =  array(
            'categoryId' => $data['categoryId'],
            'amount' => $data['amount'],            
            'concept' => $data['concept'],
       );
       $this->db->where('id', $data['id']);
       $this->db->update('operations',$operation);
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('operations');
        }

    
}