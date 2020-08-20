<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pejabat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_list");
        $this->load->model("M_Detail");
        $this->load->library('zip');
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

        // print_r($this->M_list->counter());


        $data["mostdownload"] = $this->M_list->counter();
        $data["files"] = $this->M_list->getAll(); // ambil data dari model
        // echo count($data['files']);

        $data["admin"] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
        $this->load->view("template/header", $data); // kirim data ke view
        $this->load->view("pejabat/landingpage", $data); // kirim data ke view
        // // $this->load->view("template/footer", $data); // kirim data ke view

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
        $this->load->view('pejabat/detail', $data);
        // $this->load->view("template/footer", $data); // kirim data ke view
    }

    public function download($folder, $id)
    {
        // %20 to space
        $folder = urldecode($folder);
        // // File name
        // $filename = $folder . ".zip";
        // // Directory path (uploads directory stored in project root)
        // $path = './upload/' . $folder . '/';

        // // Add directory to zip
        // $this->zip->read_dir($path);

        // // Save the zip file to archivefiles directory
        // $this->zip->archive($filename);

        // // Download
        // $this->zip->download($filename);

        // // Select Max
        $count = 0;
        // $this->db->select_max('download');

        $this->db->where('id', $id);
        $hasil = $this->db->get('dataumum')->row();
        if ($hasil->download == null) {
            $count = 1;
        } else {
            $count = $hasil->download + 1;
        }
        // echo $folder . " + echok";

        $downloadcount = array('download' => $count);

        $this->db->where('id', $id);
        $this->db->update('dataumum', $downloadcount);
        echo $hasil->download . " + echok";
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
}
