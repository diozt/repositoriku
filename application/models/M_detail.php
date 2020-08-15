<?php
class M_Detail extends CI_Model
{
    public function tampil($nama)
    {
        return $this->db->get_where('dataumum', array('nama' => $nama))->result();
    }

    public function listfile($nama)
    {
        return $this->db->get_where('fileupload', array('namaSE' => $nama))->result();
    }
}
