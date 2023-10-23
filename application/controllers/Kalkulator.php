<?php
class Kalkulator extends CI_Controller
{

    public function __construct()
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
            'navbar' => $this->load->view('layout/navbar'),
        );
        
        $this->load->view('kalkulator/kalkulator_view', $include);
        $this->load->view('layout/footer');
    }
}
