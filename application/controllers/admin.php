<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_list");
        $this->load->model("M_Detail");
        $this->load->library('zip');
    }
    public function index()
    {

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
        $this->load->view("template/footer", $data); // kirim data ke view
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

            $id = array_unique(array_merge($id1, $id2));

            if ($id != null) {
                $this->db->where_in('id', $id);
            }

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
        } else {
            $this->db->order_by('tglentri', 'desc');
            $query = $this->db->get('dataumum');
            $data['files'] = $query->result();
        }

        // // $data["files"] = $this->M_list->getAll(); // ambil data dari model
        $data["admin"] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
        $this->load->view("template/header", $data); // kirim data ke view
        $this->load->view("admin/landingpage", $data); // kirim data ke view

    }
};
