<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
        $data["mostview"] = $this->M_list->counterview();
        $data["files"] = $this->M_list->getAll(); // ambil data dari model
        // echo count($data['files']);


        $this->load->view("template/header", $data); // kirim data ke view
        $this->load->view("admin/user", $data); // kirim data ke view
        // // $this->load->view("template/footer", $data); // kirim data ke view

    }
}
