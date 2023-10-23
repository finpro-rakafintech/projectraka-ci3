<?php
defined('BASEPATH') or exit('No direct script allowed');

class ProductController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Validasi jika user belum login
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url();
            redirect($url);
        }

        $this->load->model('ProductModel');
		$this->load->library('session');
    }

    public function index()
    {
        $get_product = $this->ProductModel->view_product();

        $include = array(
            'nama_user' => $this->session->userdata('nama_user'),
            'header' => $this->load->view('layout/header'),
            'navbar' => $this->load->view('layout/navbar'),
			'active_link' => 'active',
            'v_product' => $get_product,
        );   

        $this->load->view('product/view', $include);
        $this->load->view('layout/footer');
    }
}

?>