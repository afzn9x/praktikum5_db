<?php 

class Bmipasien_model extends CI_Model{
    
    public function getAllbmi()
    {
        //buat query
        $query = $this->db->get('bmi_pasien');
        return $query;
    }

    public function findByIDbmi($id){
        $query = $this->db->get_where('bmi_pasien', ['id' => $id]);
        return $query->row();
    }

}



?>