<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KalkulatorController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $include = array(
            'header' => $this->load->view('layout/header'),
            'navbar' => $this->load->view('layout/navbar'),
        );

        $this->load->view('landing/index', $include);
        $this->load->view('layout/footer');
    }

    public function page_login()
    {
        $this->load->view('kalkulator/kalkulator');
        $this->load->view('auth/login');
    }

    public function page_register()
    {
        $this->load->view('auth/register');
    }
}