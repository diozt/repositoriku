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


    public function detail($nama)
    {
        // %20 to space
        $nama = urldecode($nama);

        $data['info'] = $this->M_Detail->tampil($nama);
        $data['file'] = $this->M_Detail->listfile($nama);
        $data["admin"] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
        $this->load->view("template/header", $data); // kirim data ke view
        $this->load->view('admin/detail', $data);
        $this->load->view("template/footer", $data); // kirim data ke view
    }

    public function download($folder)
    {
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

        redirect('admin');
    }
};
