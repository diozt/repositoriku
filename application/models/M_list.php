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

    public function counter()
    {

        // $this->db->select_max('download');
        return $this->db->query('select * from dataumum where download in( SELECT MAX(download) FROM dataumum )')->row();
    }
    public function counterview()
    {

        // $this->db->select_max('download');
        return $this->db->query('select * from dataumum where view in( SELECT MAX(view) FROM dataumum )')->row();
    }
}
