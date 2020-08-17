<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        ob_start(); # add this
    }

    public function index()
    {

        $this->form_validation->set_rules('user', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username =  $this->input->post('user');
        $password =  $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            //cek password
            if ($password == $user['pass']) {
                $data = [
                    'user' => $user['username'],
                    'role' => $user['role']
                ];

                $this->session->set_userdata($data);

                if ($user['role'] == 1) {
                    // role 1 = admin
                    // echo "Selamat Datang";
                    redirect('admin');
                } else if ($user['role'] == 2) {
                    // role 2 = pejabat
                    echo "Selamat datang di halaman pejabat";
                }
            } else {
                // masih belum fix
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password salah</div>');
                $this->load->view('auth');
            }
        } else {
            // masih belum fix
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
           akun tidak terdaftar</div>');
            $this->load->view('auth');
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->load->driver('cache');
        $this->session->sess_destroy();
        $this->cache->clean();
        ob_clean();
        redirect('auth');
    }
}
