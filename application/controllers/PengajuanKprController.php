<?php
defined('BASEPATH') or exit('No direct script allowed');

class PengajuanKprController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Validasi jika user belum login
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url();
            redirect($url);
        }

        // $this->load->model('ProductModel');
		$this->load->library('session');
    }

    public function index()
    {
        $include = array(
            'nama_user' => $this->session->userdata('nama_user'),
            'header' => $this->load->view('layout/header'),
            'navbar' => $this->load->view('layout/navbar'),
        );   

        $this->load->view('pengajuan_kpr/view1', $include);
        $this->load->view('layout/footer');
    }

    public function index2()
    {
        $include = array(
            'nama_user' => $this->session->userdata('nama_user'),
            'header' => $this->load->view('layout/header'),
            'navbar' => $this->load->view('layout/navbar'),
        );   

        $this->load->view('pengajuan_kpr/view2', $include);
        $this->load->view('layout/footer');
    }
}

?>