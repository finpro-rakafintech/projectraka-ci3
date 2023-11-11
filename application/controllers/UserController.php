<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		// Validasi jika user belum login
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url();
			redirect($url);
		}
		
		$this->load->library('session');
	}

	public function index()
	{
        $include = array(
			'header' => $this->load->view('layout/header'),
			'navbar' => $this->load->view('layout/navbar'),
			
		);

		$this->load->view('nasabah/nasabah_cukuruk', $include);
		$this->load->view('layout/footer');
	}
	}