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
        $this->db->where('o.personId', $this->session->userdata('id'));
        $this->db->join('persons p','p.id = o.personId');
        $this->db->join('categories c','c.id = o.categoryId');    
        return $this->db->get()->result();
    }

    public function getLastTen(){
        $this->db->select('o.id,o.amount, o.date, o.concept, o.type, p.name, p.lastname, c.name category');
        $this->db->from('operations o');
        $this->db->where('o.personId', $this->session->userdata('id'));
        $this->db->join('persons p','p.id = o.personId');
        $this->db->join('categories c','c.id = o.categoryId');    
        $this->db->limit('10');
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

    public function getAmountByType($type){
        $this->db->select('o.amount');
        $this->db->from('operations o');
        $this->db->where('o.type', $type);
        $this->db->where('o.personId', $this->session->userdata('id'));
        $query = $this->db->get();

        $total = 0;
        foreach ($query->result_array() as $row)
        {
                $total+= $row['amount'];
                
        }
        return $total;
    }

    public function getAllByCategory($categoryId){
        $this->db->select('o.id,o.amount, o.date, o.concept, o.type, p.name, p.lastname, c.name category');
        $this->db->from('operations o');
        $this->db->where('o.personId', $this->session->userdata('id'));
        $this->db->where('o.categoryId', $categoryId);
        $this->db->join('persons p','p.id = o.personId');
        $this->db->join('categories c','c.id = o.categoryId');    
        $this->db->limit('10');
        return $this->db->get()->result();
    }

    // public function getByMonth($mounth){
    //     $this->db->select('sum(o.amount)');
    //     $this->db->from('operations o');
    //     $this->db->where('date',$mounth);
        
    // }

}