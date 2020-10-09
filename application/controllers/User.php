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


    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
        redirect('admin/listuser');
    }
}
