<?php
class M_upload extends CI_Model
{


    function save1($fu, $jl, $sp, $st, $sertif, $pl, $plg, $pku, $pkk, $plu, $plp, $ta, $kta, $dh, $sop, $pj, $hd)
    {
        $this->db->insert('fungsiutama', $fu);
        $this->db->insert('jenislayanan', $jl);
        $this->db->insert('sistempengaman', $sp);
        $this->db->insert('sistemterkait', $st);
        $this->db->insert('sertifikasi', $sertif);
        $this->db->insert('penggunalayanan', $pl);
        $this->db->insert('penyelenggara', $plg);
        $this->db->insert('pkutama', $pku);
        $this->db->insert('pkkhusus', $pkk);
        $this->db->insert('plutama', $plu);
        $this->db->insert('plpendukung', $plp);
        $this->db->insert('tenagaahli', $ta);
        $this->db->insert('ketersediaanta', $kta);
        $this->db->insert('dasarhukum', $dh);
        $this->db->insert('sop', $sop);
        $this->db->insert('penanggungjawab', $pj);
        $this->db->insert('helpdesk', $hd);
        // $hasil2 = $this->db->query("INSERT INTO ruanglingkup(ruangLingkup, pengembang) VALUES ('$ruanglingkup',' $pengembang')");
    }

    function save2($id, $dir, $versi, $pdf, $dbMaster, $sourceCode, $lain)
    {
        $fupload = array(
            'id' => $id,
            'namaSE' => $dir,
            'versi' => $versi,
            'docperancangan' => $pdf,
            'dbMaster' => $dbMaster,
            'sCode' => $sourceCode,
            'lainnya' => $lain

        );

        $this->db->insert('fileupload', $fupload);
        // $this->db->insert('dataumum', $du);
    }
    function save3($du)
    {
        return $this->db->insert('dataumum', $du);
    }
}
