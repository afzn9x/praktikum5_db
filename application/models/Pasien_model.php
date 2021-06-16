<?php 

class Pasien_model extends CI_Model{
    
    public function getAll()
    {
        //buat query
        $query = $this->db->get('pasien');
        return $query;
    }

    public function findByID($id){
        $query = $this->db->get_where('pasien', ['id' => $id]);
        return $query->row();
    }

}



?>