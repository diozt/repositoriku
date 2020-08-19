<?php
class Upload extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_upload');
        $this->load->library('upload');
    }
}
