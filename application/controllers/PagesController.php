<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PagesController extends CI_Controller {

	public function __construct()
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
			'active_link' => 'active',
		);

		$this->load->view('landing/index', $include);
		$this->load->view('layout/footer');
	}

	public function page_login()
	{
		$this->load->view('layout/header');
		$this->load->view('auth/login');
	}

	public function page_register()
	{
		$this->load->view('layout/header');
		$this->load->view('auth/register');
	}
}
