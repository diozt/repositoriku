<?php
class M_list extends CI_Model
{
    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('dataumum');
        $this->db->order_by('tglentri', 'desc');
        $query = $this->db->get();
        // print_r($query);
        return $query->result();
    }
}
