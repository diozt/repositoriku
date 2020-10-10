<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_list");
        $this->load->model("M_Detail");
        $this->load->model("M_upload");
        $this->load->library('zip');
        $this->load->library('upload');
        $this->load->library('form_validation');
        $logged_in = $this->session->userdata('user');
        if ($logged_in != TRUE || empty($logged_in)) {
            #user not logged in
            $this->session->set_flashdata('error', 'Session has Expired');
            redirect('auth'); # Login view
        }
    }
    public function index()
    {


        #user Logged in
        $data["mostdownload"] = $this->M_list->counter();
        $data["mostview"] = $this->M_list->counterview();
        $data["jmlall"] = $this->M_list->counterfile();
        $data["files"] = $this->M_list->getAll(); // ambil data dari model
        $data["admin"] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
        $this->load->view("template/header", $data); // kirim data ke view
        $this->load->view("admin/landingpage", $data); // kirim data ke view
        // $this->load->view("template/footer", $data); // kirim data ke view

    }
    public function form()
    {

        $data["admin"] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
        $this->load->view("template/header", $data); // kirim data ke view
        $this->load->view('admin/form');
        $this->load->view("template/footer", $data); // kirim data ke view
    }


    public function detail($id, $nama, $pj)
    {
        // %20 to space
        $nama = urldecode($nama);

        $data['info'] = $this->M_Detail->tampil($nama);
        // $data['files'] = $this->M_Detail->listfile($nama);
        $data["files"] = $this->db->get_where('fileupload', ['namaSE' => $nama])->result_array();
        $data["du"] = $this->db->get_where('dataumum', ['id' => $id])->row_array();
        $data["admin"] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
        $data["fu"] = $this->db->get_where('fungsiutama', ['id' => $id])->row_array();
        $data["jl"] = $this->db->get_where('jenislayanan', ['id' => $id])->row_array();
        $data["sp"] = $this->db->get_where('sistempengaman', ['id' => $id])->row_array();
        $data["st"] = $this->db->get_where('sistemterkait', ['id' => $id])->row_array();
        $data["stf"] = $this->db->get_where('sertifikasi', ['id' => $id])->row_array();
        $data["pl"] = $this->db->get_where('penggunalayanan', ['id' => $id])->row_array();
        $data["plg"] = $this->db->get_where('penyelenggara', ['id' => $id])->row_array();
        $data["pku"] = $this->db->get_where('pkutama', ['id' => $id])->row_array();
        $data["pkk"] = $this->db->get_where('pkkhusus', ['id' => $id])->row_array();
        $data["plu"] = $this->db->get_where('plutama', ['id' => $id])->row_array();
        $data["plp"] = $this->db->get_where('plpendukung', ['id' => $id])->row_array();
        $data["ta"] = $this->db->get_where('tenagaahli', ['id' => $id])->row_array();
        $data["kta"] = $this->db->get_where('ketersediaanta', ['id' => $id])->row_array();
        $data["dh"] = $this->db->get_where('dasarhukum', ['id' => $id])->row_array();
        $data["sop"] = $this->db->get_where('sop', ['id' => $id])->row_array();
        $data["pj"] = $this->db->get_where('penanggungjawab', ['nip' => $pj])->row_array();
        $data["hd"] = $this->db->get_where('helpdesk', ['id' => $id])->row_array();
        $this->load->view("template/header", $data); // kirim data ke view
        $this->load->view('admin/detail', $data);
        // $this->load->view("template/footer", $data); // kirim data ke view
    }

    public function edit($id, $nama, $pj)
    {
        // %20 to space
        $nama = urldecode($nama);

        $data['info'] = $this->M_Detail->tampil($nama);
        $data['files'] = $this->M_Detail->listfile($nama);

        $data["admin"] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();

        $data["du"] = $this->db->get_where('dataumum', ['id' => $id])->row_array();
        $data["fu"] = $this->db->get_where('fungsiutama', ['id' => $id])->row_array();
        $data["jl"] = $this->db->get_where('jenislayanan', ['id' => $id])->row_array();
        $data["sp"] = $this->db->get_where('sistempengaman', ['id' => $id])->row_array();
        $data["st"] = $this->db->get_where('sistemterkait', ['id' => $id])->row_array();
        $data["stf"] = $this->db->get_where('sertifikasi', ['id' => $id])->row_array();
        $data["pl"] = $this->db->get_where('penggunalayanan', ['id' => $id])->row_array();
        $data["plg"] = $this->db->get_where('penyelenggara', ['id' => $id])->row_array();
        $data["pku"] = $this->db->get_where('pkutama', ['id' => $id])->row_array();
        $data["pkk"] = $this->db->get_where('pkkhusus', ['id' => $id])->row_array();
        $data["plu"] = $this->db->get_where('plutama', ['id' => $id])->row_array();
        $data["plp"] = $this->db->get_where('plpendukung', ['id' => $id])->row_array();
        $data["ta"] = $this->db->get_where('tenagaahli', ['id' => $id])->row_array();
        $data["kta"] = $this->db->get_where('ketersediaanta', ['id' => $id])->row_array();
        $data["dh"] = $this->db->get_where('dasarhukum', ['id' => $id])->row_array();
        $data["sop"] = $this->db->get_where('sop', ['id' => $id])->row_array();
        $data["pj"] = $this->db->get_where('penanggungjawab', ['nip' => $pj])->row_array();
        $data["hd"] = $this->db->get_where('helpdesk', ['id' => $id])->row_array();
        // print_r($data["jl"]);

        $this->load->view("template/header", $data); // kirim data ke view
        $this->load->view('admin/edit', $data);
    }

    public function listUser()
    {
        $data["admin"] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
        $data["user"] = $this->M_list->getUser();
        $this->load->view("template/header", $data); // kirim data ke view
        $this->load->view('admin/listUser', $data);
    }

    public function user()
    {
        $this->form_validation->set_rules('userName', 'Username', 'trim|required');
        $this->form_validation->set_rules('role', 'Role', 'trim|required');
        $this->form_validation->set_rules('userPass', 'Password', 'trim|required|min_length[3]|matches[userCPass]', [
            'matches' => 'Password not match',
            'min_length' => 'Password too Short!'
        ]);
        $this->form_validation->set_rules('userCPass', 'Password', 'trim|required|min_length[3]|matches[userPass]', [
            'matches' => 'Password not match',
            'min_length' => 'Password too Short!'
        ]);

        if ($this->form_validation->run() == false) {
            $data["admin"] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
            $this->load->view("template/header", $data); // kirim data ke view
            $this->load->view('admin/user', $data);
        } else {
            $data = [
                'username' => $this->input->post('userName'),
                'pass' => password_hash($this->input->post('userPass'), PASSWORD_DEFAULT),
                'role' => $this->input->post('role')
            ];

            $this->db->insert('user', $data);
            // print_r($data);
            redirect('admin/listUser');
        }
    }

    public function download($folder)
    {
        // %20 to space
        $folder = urldecode($folder);
        // File name
        $filename = $folder . ".zip";
        // Directory path (uploads directory stored in project root)
        $path = './upload/' . $folder . '/';

        // Add directory to zip
        $this->zip->read_dir($path);

        // Save the zip file to archivefiles directory
        $this->zip->archive($filename);

        // Download
        $this->zip->download($filename);
    }

    public function downloadversi($folder, $versi)
    {
        // %20 to space
        $folder = urldecode($folder);
        // File name
        $filename = $folder . ".zip";
        // Directory path (uploads directory stored in project root)
        $path = './upload/' . $folder . '/' . $versi . '/';

        // Add directory to zip
        $this->zip->read_dir($path);

        // Save the zip file to archivefiles directory
        $this->zip->archive($filename);

        // Download
        $this->zip->download($filename);
    }

    public function recursiveRmDir($dir)
    {

        // $dir = './upload/Mantab/v1/';
        $iterator = new RecursiveIteratorIterator(new \RecursiveDirectoryIterator($dir, \FilesystemIterator::SKIP_DOTS), \RecursiveIteratorIterator::CHILD_FIRST);
        foreach ($iterator as $filename => $fileInfo) {
            if ($fileInfo->isDir()) {
                rmdir($filename);
                echo "woee";
            } else {
                unlink($filename);
            }
        }
        rmdir($dir);
    }

    public function delete($id, $nama, $pj)
    {

        // %20 to space
        $nama = urldecode($nama);

        $this->db->where('id', $id);
        $this->db->delete('dataumum');

        $this->db->where('id', $id);
        $this->db->delete('dasarhukum');
        $this->db->where('id', $id);
        $this->db->delete('fungsiutama');
        $this->db->where('id', $id);
        $this->db->delete('helpdesk');
        $this->db->where('id', $id);
        $this->db->delete('jenislayanan');
        $this->db->where('id', $id);
        $this->db->delete('ketersediaanta');
        $this->db->where('nip', $pj);
        $this->db->delete('penanggungjawab');
        $this->db->where('id', $id);
        $this->db->delete('penggunalayanan');
        $this->db->where('id', $id);
        $this->db->delete('penyelenggara');
        $this->db->where('id', $id);
        $this->db->delete('pkkhusus');
        $this->db->where('id', $id);
        $this->db->delete('pkutama');
        $this->db->where('id', $id);
        $this->db->delete('plpendukung');
        $this->db->where('id', $id);
        $this->db->delete('plutama');
        $this->db->where('id', $id);
        $this->db->delete('sertifikasi');
        $this->db->where('id', $id);
        $this->db->delete('sistempengaman');
        $this->db->where('id', $id);
        $this->db->delete('sistemterkait');
        $this->db->where('id', $id);
        $this->db->delete('sop');
        $this->db->where('id', $id);
        $this->db->delete('tenagaahli');


        // delete table upload
        $this->db->where('namaSE', $nama);
        $this->db->delete('fileupload');

        $dir = './upload/' . $nama . '/';
        // $dir = './upload/Mantab/v1/';

        $this->recursiveRmDir($dir);

        redirect('admin');
    }

    public function recursiveRmDirversi($folder, $versi)
    {
        $folder = urldecode($folder);
        $versi = urldecode($versi);
        $dir = './upload/' . $folder . '/' . $versi . '/';
        $iterator = new RecursiveIteratorIterator(new \RecursiveDirectoryIterator($dir, \FilesystemIterator::SKIP_DOTS), \RecursiveIteratorIterator::CHILD_FIRST);
        foreach ($iterator as $filename => $fileInfo) {
            if ($fileInfo->isDir()) {
                rmdir($filename);
            } else {
                unlink($filename);
            }
        }
        rmdir($dir);
    }

    public function search($key = null)
    {
        $key = urldecode($key);

        $this->db->like('nama', $key);
        $this->db->or_like('url', $key);
        $this->db->or_like('sasaran', $key);
        $this->db->or_like('kategorisistem', $key);
        $this->db->or_like('kategoriakses', $key);
        $this->db->or_like('ruanglingkup', $key);

        $this->db->order_by('tglentri', 'desc');
        $query = $this->db->get('dataumum');

        $data['files'] = $query->result();

        $data["mostdownload"] = $this->M_list->counter();
        $data["mostview"] = $this->M_list->counterview();
        $data["jmlall"] = $this->M_list->counterfile();
        // $data["files"] = $this->M_list->getAll(); // ambil data dari model
        $data["admin"] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
        $this->load->view("template/header", $data); // kirim data ke view
        $this->load->view("admin/landingpage", $data); // kirim data ke view

    }

    public function advanceSearch()
    {
        $jenispl = $this->input->get('jenispl');
        $from = $this->input->get('from');
        $to = $this->input->get('to');
        $jnslayanan = $this->input->get('jnslayanan');

        if ($jenispl != null || $jnslayanan != null || $from != null || $to != null) {
            $this->db->select('id');
            $this->db->from('plutama');
            $this->db->where('jenispl', $jenispl);
            $idjnspl = $this->db->get()->result();

            $id1 = [];
            foreach ($idjnspl as $x) :
                array_push($id1, $x->id);
            endforeach;

            $this->db->select('id');
            $this->db->from('jenislayanan');
            $this->db->where('jenis', $jnslayanan);
            $idjnsly = $this->db->get()->result();

            $id2 = [];
            foreach ($idjnsly as $x) :
                array_push($id2, $x->id);
            endforeach;

            //misal ada id doble yang terpilih dijadikan satu
            $id = array_unique(array_merge($id1, $id2));

            if ($id != null) {
                $this->db->where_in('id', $id);
            } else {
                $this->db->where_in('id', "");
            }

            #########################################################

            if ($from != null || $to != null) {
                date_default_timezone_set('Asia/Jakarta');
                if ($to == null) {
                    $to = date('Y-m-d H:i:s');
                }

                $from = strtotime($from);
                $from = date('Y-m-d 00:00:00', $from);

                $to = strtotime($to);
                $to = date('Y-m-d 23:59:59', $to);


                $this->db->where('tglentri >=', $from);
                $this->db->where('tglentri <=', $to);
            }
            $this->db->order_by('tglentri', 'desc');
            $query = $this->db->get('dataumum');
            $data['files'] = $query->result();
            // print_r($data['files']);
        } else {
            $this->db->order_by('tglentri', 'desc');
            $query = $this->db->get('dataumum');
            $data['files'] = $query->result();
        }

        // // $data["files"] = $this->M_list->getAll(); // ambil data dari model
        $data["mostdownload"] = $this->M_list->counter();
        $data["mostview"] = $this->M_list->counterview();
        $data["jmlall"] = $this->M_list->counterfile();
        $data["admin"] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
        $this->load->view("template/header", $data); // kirim data ke view
        $this->load->view("admin/landingpage", $data); // kirim data ke view

    }

    public function update($id)
    {

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

        //untuk tabel pengguna layanan
        $pl['id'] = $id;
        $pl['jenisPengguna'] = $this->input->post('jenispengguna');
        $pl['keterangan'] = $this->input->post('ketjenis');

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
        $ta['jenis'] = $this->input->post('jenis');
        $ta['jumlah'] = $this->input->post('jml');
        $ta['kompetensi'] = $this->input->post('kompetensi');

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
        $this->db->select('nama');
        $this->db->from('dataumum');
        $this->db->where('id', $id);
        $fup = $this->db->get()->row();

        // menghitung jumlah versi file yag diupload
        if (is_countable($this->input->post('versi'))) {
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
                $this->M_upload->save2($idfile, $dir, $versi, $doc, $dbMaster, $sourceCode, $lain);
                $idfile++;
            }
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
        $du['penggunalayanan'] = $id;
        $du['penyelenggara'] = $id;
        $du['pkutama'] = $id;
        $du['pkkhusus'] = $id;
        $du['plutama'] = $id;
        $du['plpendukung'] = $id;
        $du['tenagaahli'] = $id;
        $du['ketersediaanta'] = $id;
        $du['dasarhukum'] = $id;
        $du['sop'] = $id;
        $du['penanggungjawab'] = $pj['nip'];
        $du['helpdesk'] = $id;



        // UPLOAD table selain file upload
        $this->M_upload->update1($fup, $du, $fu, $jl, $sp, $st, $sertif, $pl, $plg, $pku, $pkk, $plu, $plp, $ta, $kta, $dh, $sop, $pj, $hd);

        // upload table data umum
        $this->M_upload->update2($du);

        redirect("admin/detail/" . $du['id'] . '/' . $du['nama'] . '/' . $du['penanggungjawab']);
    }

    public function deleteverdsion($id, $pj, $folder, $ver, $page)
    {

        // delete table upload

        $folder = urldecode($folder);
        $ver = urldecode($ver);

        $this->db->where('versi', $ver);
        $this->db->delete('fileupload');

        $this->recursiveRmDirversi($folder, $ver);

        if ($page == 1) {
            # jika dari halaman detail
            redirect('admin/detail/' . $id . '/' . $folder . '/' . $pj, 'refresh');
        } elseif ($page == 2) {
            // jika dari halaman edit
            redirect('admin/edit/' . $id . '/' . $folder . '/' . $pj, 'refresh');
        }
    }
};
