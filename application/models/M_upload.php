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

    function update1($fu, $jl, $sp, $st, $sertif, $pl, $plg, $pku, $pkk, $plu, $plp, $ta, $kta, $dh, $sop, $pj, $hd)
    {
        $this->db->where('id', $fu['id']);
        $this->db->update('fungsiutama', $fu);
        $this->db->where('id', $jl['id']);
        $this->db->update('jenislayanan', $jl);
        $this->db->where('id', $sp['id']);
        $this->db->update('sistempengaman', $sp);
        $this->db->where('id', $st['id']);
        $this->db->update('sistemterkait', $st);
        $this->db->where('id', $sertif['id']);
        $this->db->update('sertifikasi', $sertif);
        $this->db->where('id', $pl['id']);
        $this->db->update('penggunalayanan', $pl);
        $this->db->where('id', $plg['id']);
        $this->db->update('penyelenggara', $plg);
        $this->db->where('id', $pku['id']);
        $this->db->update('pkutama', $pku);
        $this->db->where('id', $pkk['id']);
        $this->db->update('pkkhusus', $pkk);
        $this->db->where('id', $plu['id']);
        $this->db->update('plutama', $plu);
        $this->db->where('id', $plp['id']);
        $this->db->update('plpendukung', $plp);
        $this->db->where('id', $ta['id']);
        $this->db->update('tenagaahli', $ta);
        $this->db->where('id', $kta['id']);
        $this->db->update('ketersediaanta', $kta);
        $this->db->where('id', $dh['id']);
        $this->db->update('dasarhukum', $dh);
        $this->db->where('id', $sop['id']);
        $this->db->update('sop', $sop);
        $this->db->where('nip', $pj['nip']);
        $this->db->update('penanggungjawab', $pj);
        $this->db->where('id', $hd['id']);
        $this->db->update('helpdesk', $hd);
        // $hasil2 = $this->db->query("INSERT INTO ruanglingkup(ruangLingkup, pengembang) VALUES ('$ruanglingkup',' $pengembang')");
    }

    function update2($du)
    {
        $this->db->where('id', $du['id']);
        return $this->db->update('dataumum', $du);
    }
}
