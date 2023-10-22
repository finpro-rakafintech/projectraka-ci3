<?php
class Kalkulator extends CI_Controller
{
    public function index()
    {


        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('kalkulator/kalkulator_view');
        $this->load->view('layout/footer');
    }
}
