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
                echo "woee";
            } else {
                unlink($filename);
            }
        }
        rmdir($dir);
    }
};
