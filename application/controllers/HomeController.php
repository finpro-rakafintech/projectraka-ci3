<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

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
			'navbar' => $this->load->view('layout/navbar'),
		);

		$this->load->view('home/index', $include);
		$this->load->view('layout/footer');
	}
}

?>