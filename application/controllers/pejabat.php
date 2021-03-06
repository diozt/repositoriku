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
        $data["mostview"] = $this->M_list->counterview();
        $data["files"] = $this->M_list->getAll(); // ambil data dari model
        // echo count($data['files']);

        $data["pejabat"] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
        $this->load->view("template/headerpejabat", $data); // kirim data ke view
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
        $data["pejabat"] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
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
        $data["pj"] = $this->db->get_where('penanggungjawab', ['id' => $id])->row_array();
        $data["hd"] = $this->db->get_where('helpdesk', ['id' => $id])->row_array();


        $logged_in = $this->session->userdata('user');
        if ($logged_in == TRUE || !empty($logged_in)) {
            $count = 0;
            $this->db->where('id', $id);
            $hasil = $this->db->get('dataumum')->row();
            if ($hasil->view == null) {
                $count = 1;
            } else {
                $count = $hasil->view + 1;
            }
            // echo $folder . " + echok";

            $downloadcount = array('view' => $count);

            $this->db->where('id', $id);
            $this->db->update('dataumum', $downloadcount);
        }

        $this->load->view("template/headerpejabat", $data); // kirim data ke view
        $this->load->view('pejabat/detail', $data);
        // $this->load->view("template/footer", $data); // kirim data ke view

    }

    public function download($folder, $id)
    {
        // %20 to space
        $folder = urldecode($folder);
        // File name
        $filename = $folder . ".zip";
        // Directory path (uploads directory stored in project root)
        $path = './upload/' . $folder . '/';

        // // Add directory to zip
        $this->zip->read_dir($path);

        // // Save the zip file to archivefiles directory
        $this->zip->archive($filename);

        // // Download
        $this->zip->download($filename);

        // // Select Max
        $count = 0;
        $this->db->where('id', $id);
        $hasil = $this->db->get('dataumum')->row();
        if ($hasil->download == null) {
            $count = 1;
        } else {
            $count = $hasil->download + 1;
        }
        // echo $id . " + echok";

        $downloadcount = array('download' => $count);

        $this->db->where('id', $id);
        $this->db->update('dataumum', $downloadcount);
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
        // $data["files"] = $this->M_list->getAll(); // ambil data dari model
        $data["pejabat"] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
        $this->load->view("template/headerpejabat", $data); // kirim data ke view
        $this->load->view("pejabat/landingpage", $data); // kirim data ke view

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

        $data["mostdownload"] = $this->M_list->counter();
        $data["mostview"] = $this->M_list->counterview();

        // // $data["files"] = $this->M_list->getAll(); // ambil data dari model
        $data["pejabat"] = $this->db->get_where('user', ['username' => $this->session->userdata('user')])->row_array();
        $this->load->view("template/headerpejabat", $data); // kirim data ke view
        $this->load->view("pejabat/landingpage", $data); // kirim data ke view

    }
}
