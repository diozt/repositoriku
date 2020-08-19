<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller{

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
        $data["files"] = $this->M_list->getAll(); // ambil data dari model
        $data["admin"] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
        $this->load->view("template/header", $data); // kirim data ke view
        $this->load->view("admin/landingpage", $data); // kirim data ke view
        // $this->load->view("template/footer", $data); // kirim data ke view

    }

}