<?php
class Upload extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_upload');
        $this->load->library('upload');
    }

    function upload_data()
    {
        $id = 0;
        $this->db->select_max('id');
        $hasil = $this->db->get('fungsiutama')->row();
        $hasil->id;
        if ($hasil->id == null)
            // $du['id'] = $id;
            $id += 1;
        else
            // $du['id'] = $hasil->id + 2;
            $id = $hasil->id + 1;
        // echo $id;

        //untuk table fungsi utama
        $fu['id'] = $id;
        $fu['fungsi'] = $this->input->post('fungsi');
        $fu['keterangan'] = $this->input->post('ketfungsi');

        //untuk tabel jenis layanan
        $jl['id'] = $id;
        $jl['jenis'] = $this->input->post('jenislayanan');
        $jl['keterangan'] = $this->input->post('ketjenis');

        //untuk tabel sistem pengamanan
        $sp['id'] = $id;
        $sp['namasp'] = $this->input->post('namapengaman');
        $sp['keterangan'] = $this->input->post('ketpengaman');

        //untuk tabel sistem terkait
        $st['id'] = $id;
        $st['namast'] = $this->input->post('namast');
        $st['keterangan'] = $this->input->post('ketst');

        //untuk tabel sertifikasi
        $sertif['id'] = $id;
        $sertif['namasertif'] = $this->input->post('namasertifikasi');
        $sertif['namainst'] = $this->input->post('namainstitusi');
        $sertif['tglterbit'] = $this->input->post('tglterbit');
        $sertif['tglmulai'] = $this->input->post('tglmulai');
        $sertif['tglhabis'] = $this->input->post('tglhabis');
        $sertif['masalaku'] = $this->input->post('masalaku');
        $sertif['nosertif'] = $this->input->post('nosertif');
        $sertif['ruanglingkup'] = $this->input->post('lingkupsertif');

        // //untuk tabel pengguna layanan
        // $pl['id'] = $id;
        // $pl['jenisPengguna'] = $this->input->post('jenispengguna');
        // $pl['keterangan'] = $this->input->post('ketjenis');

        //untuk tabel penyelenggara
        $plg['id'] = $id;
        $plg['namask'] = $this->input->post('namask');
        $plg['alamatsk'] = $this->input->post('alamatsk');
        $plg['prov'] = $this->input->post('prov');
        $plg['kabkot'] = $this->input->post('kabkot');
        $plg['kdpos'] = $this->input->post('kdpos');
        $plg['telp'] = $this->input->post('nohp');
        $plg['website'] = $this->input->post('website');

        //untuk tabel pkutama
        $pku['id'] = $id;
        $pku['jenispk'] = $this->input->post('jenispku');
        $pku['pemilik'] = $this->input->post('pemilikpku');
        $pku['penyedia'] = $this->input->post('penyediadatacenter');
        $pku['bandwith'] = $this->input->post('bandwith');
        $pku['jumlah'] = $this->input->post('jmlhpku');
        $pku['tipe'] = $this->input->post('tipe');
        $pku['processor'] = $this->input->post('processor');
        $pku['kaphdd'] = $this->input->post('kapshdd');
        $pku['memori'] = $this->input->post('memori');
        $pku['lokasi'] = $this->input->post('lokasi');

        //untuk tabel pkkhusus
        $pkk['id'] = $id;
        $pkk['jenispk'] = $this->input->post('jenispk');
        $pkk['tipe'] = $this->input->post('tipe');
        $pkk['keterangan'] = $this->input->post('ketpkhusus');

        //untuk tabel plutama
        $plu['id'] = $id;
        $plu['namapl'] = $this->input->post('namapl');
        $plu['jenispl'] = $this->input->post('jenispl');
        $plu['penyedia'] = $this->input->post('penyediapl');

        //untuk tabel plpendukung
        $plp['id'] = $id;
        $plp['jenispl'] = $this->input->post('jenisplp');
        $plp['deskripsi'] = $this->input->post('deskripsi');

        //untuk tabel tenagaahli
        $ta['id'] = $id;
        $ta['nama'] = $this->input->post('namata');
        $ta['jenis'] = $this->input->post('jenista');
        $ta['kompetensi'] = $this->input->post('kompetensi');
        $ta['nohp'] = $this->input->post('nohpta');
        $ta['opd'] = $this->input->post('opd');
        $ta['alamat'] = $this->input->post('alamatta');

        //untuk tabel ketersediaanta
        $kta['id'] = $id;
        $kta['jenis'] = $this->input->post('ketersediaanjenis');
        $kta['jumlah'] = $this->input->post('jmltersedia');
        $kta['status'] = $this->input->post('statustersedia');

        //untuk tabel dasarhukum
        $dh['id'] = $id;
        $dh['namash'] = $this->input->post('namadasarhukum');
        $dh['nomor'] = $this->input->post('nomor');
        $dh['thterbit'] = $this->input->post('thterbit');
        $dh['tentang'] = $this->input->post('tentang');

        //untuk tabel sop
        $sop['id'] = $id;
        $sop['namasop'] = $this->input->post('namasop');
        $sop['keterangan'] = $this->input->post('ketsop');

        //untuk tabel penanggungjawab
        $pj['id'] = $id;
        $pj['nama'] = $this->input->post('namapj');
        $pj['nip'] = $this->input->post('nip');
        $pj['namaSK'] = $this->input->post('namaskpj');
        $pj['alamatSK'] = $this->input->post('alamatskpj');
        $pj['prov'] = $this->input->post('provpj');
        $pj['kabkot'] = $this->input->post('kabkotpj');
        $pj['kdpos'] = $this->input->post('kdpospj');
        $pj['noHP'] = $this->input->post('nohppj');
        $pj['email'] = $this->input->post('emailpj');

        //untuk tabel helpdesk
        $hd['id'] = $id;
        $hd['nama'] = $this->input->post('namahd');
        $hd['telp'] = $this->input->post('notelp');
        $hd['picAdmin'] = $this->input->post('picadmin');
        $hd['email'] = $this->input->post('emailhd');


        //untuk file upload
        // menghitung jumlah versi file yag diupload
        $number = count($_POST["versi"]);
        $dir = $this->input->post('namaSE');
        $idfile = 0;
        $this->db->select_max('id');
        $hasil = $this->db->get('fileupload')->row();
        $hasil->id;
        if ($hasil->id == null)
            // $du['id'] = $id;
            $idfile += 1;
        else
            // $du['id'] = $hasil->id + 2;
            $idfile = $hasil->id + 1;
        // echo $id;

        for ($i = 0; $i < $number; $i++) {
            $versi = $this->input->post('versi')[$i];
            $file_path = './upload/' . $dir . '/';
            $path_versi = $file_path . '/' . $versi . '/';
            // cek path sesuai nama aplikasi
            if (!is_dir($file_path)) {
                mkdir($file_path);
            }

            // cek path sesuai nama versi
            if (!is_dir($path_versi)) {
                mkdir($path_versi);
            }

            $config['upload_path'] = $path_versi; //path folder
            $config['allowed_types'] = '*'; //type ekstensi file bisa disesuaikan

            $this->upload->initialize($config);
            $this->load->library('upload', $config);

            if (!empty($_FILES['doc']['name'][$i])) {

                $_FILES['file']['name'] = $_FILES['doc']['name'][$i];
                $_FILES['file']['type'] = $_FILES['doc']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['doc']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['doc']['error'][$i];
                $_FILES['file']['size'] = $_FILES['doc']['size'][$i];

                if ($this->upload->do_upload('file')) {

                    $uploadData = $this->upload->data();
                    $doc = $uploadData['file_name'];
                }
            }
            if (!empty($_FILES['db']['name'][$i])) {

                $_FILES['file']['name'] = $_FILES['db']['name'][$i];
                $_FILES['file']['type'] = $_FILES['db']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['db']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['db']['error'][$i];
                $_FILES['file']['size'] = $_FILES['db']['size'][$i];

                if ($this->upload->do_upload('file')) {

                    $uploadData = $this->upload->data();
                    $dbMaster = $uploadData['file_name'];
                }
            }
            if (!empty($_FILES['sc']['name'][$i])) {

                $_FILES['file']['name'] = $_FILES['sc']['name'][$i];
                $_FILES['file']['type'] = $_FILES['sc']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['sc']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['sc']['error'][$i];
                $_FILES['file']['size'] = $_FILES['sc']['size'][$i];

                if ($this->upload->do_upload('file')) {

                    $uploadData = $this->upload->data();
                    $sourceCode = $uploadData['file_name'];
                }
            }
            if (!empty($_FILES['lain']['name'][$i])) {

                $_FILES['file']['name'] = $_FILES['lain']['name'][$i];
                $_FILES['file']['type'] = $_FILES['lain']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['lain']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['lain']['error'][$i];
                $_FILES['file']['size'] = $_FILES['lain']['size'][$i];

                if ($this->upload->do_upload('file')) {

                    $uploadData = $this->upload->data();
                    $lain = $uploadData['file_name'];
                }
            }
            $this->m_upload->save2($idfile, $dir, $versi, $doc, $dbMaster, $sourceCode, $lain);
            $idfile++;
        }

        // //untuk table data umum
        //create id table umum

        $du['id'] = $id;
        $du['nama'] = $this->input->post('namaSE');
        $du['deskripsi'] = $this->input->post('keterangan');
        $du['sasaran'] = $this->input->post('sasaran');
        $du['kategorisistem'] = $this->input->post('ktgSE');
        $du['kategoriakses'] = $this->input->post('ktgAkses');
        $du['url'] = $this->input->post('url');
        $du['fungsiutama'] = $id;
        $du['ruanglingkup'] = $this->input->post('ruanglingkup');
        $du['jenislayanan'] = $id;
        $du['sistempengaman'] = $id;
        $du['sistemterkait'] = $id;
        $du['sertifikasi'] = $id;
        $du['penggunalayanan'] = $this->input->post('jenispengguna');;
        $du['level'] = $this->input->post('level');;
        $du['budget'] = $this->input->post('budget');;
        $du['status'] = $this->input->post('status');;
        $du['penyelenggara'] = $id;
        $du['pkutama'] = $id;
        $du['pkkhusus'] = $id;
        $du['plutama'] = $id;
        $du['plpendukung'] = $id;
        $du['tenagaahli'] = $id;
        $du['ketersediaanta'] = $id;
        $du['dasarhukum'] = $id;
        $du['sop'] = $id;
        $du['penanggungjawab'] = $id;
        $du['helpdesk'] = $id;


        // UPLOAD table selain file upload
        $this->m_upload->save1($fu, $jl, $sp, $st, $sertif, $plg, $pku, $pkk, $plu, $plp, $ta, $kta, $dh, $sop, $pj, $hd);

        // upload table data umum
        $this->m_upload->save3($du);

        redirect('admin');
    }
}
