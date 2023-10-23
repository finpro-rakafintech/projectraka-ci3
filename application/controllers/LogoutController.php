<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LogoutController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
    {
        // Hapus data sesi yang diperlukan untuk logout
        $this->session->unset_userdata('masuk');
        $this->session->unset_userdata('akses');
        $this->session->unset_userdata('ses_email');
        $this->session->unset_userdata('ses_nama');

        // Redirect ke halaman login atau halaman lain yang sesuai
        redirect('login_page'); // Ganti 'login_page' sesuai dengan halaman login Anda
    }
}
