<?php
class Kalkulator extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        // Validasi jika user belum login
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url();
            redirect($url);
        }
    }

    public function index()
    {
        $include = array(
            'nama_user' => $this->session->userdata('nama_user'),
            'header' => $this->load->view('layout/header'),
        );

        $this->load->view('layout/navbar', $include);
        $this->load->view('kalkulator/kalkulator_view', $include);
        $this->load->view('layout/footer');
    }
}
