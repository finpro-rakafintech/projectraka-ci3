<?php
class Kalkulator extends CI_Controller
{
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
