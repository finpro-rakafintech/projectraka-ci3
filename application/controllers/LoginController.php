<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('LoginModel');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		$email = htmlspecialchars($this->input->post('email', TRUE), ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

		$cek_level = $this->LoginModel->cek_level($email);

		if ($cek_level) {
			if (password_verify($password, $cek_level['password'])) {
				$data_session = array(
					'username' => $cek_level['username'],
					'nama_user' => $cek_level['nama_user']
				);

				$this->session->set_userdata($data_session);

				if ($cek_level['level'] == 'admin') {
					// Akses admin
					$this->session->set_userdata('masuk', TRUE);
					$this->session->set_userdata('akses', 'admin');
					$this->session->set_userdata('ses_email', $cek_level['email']);
					$this->session->set_userdata('ses_nama', $cek_level['nama_admin']);
					redirect('home');
				} else {
					// Akses User
					$this->session->set_userdata('masuk', TRUE);
					$this->session->set_userdata('akses', 'user');
					$this->session->set_userdata('ses_email', $cek_level['email']);
					$this->session->set_userdata('ses_nama', $cek_level['nama_user']);
					redirect('home');
				}
			} else {
				// Password salah
				$url = site_url('login_page');
				echo $this->session->set_flashdata('msg', 'Email atau Password Salah');
				redirect($url);
			}
		} else {
			// Email tidak ditemukan
			$url = site_url('login_page');
			echo $this->session->set_flashdata('msg', 'Email Tidak Ditemukan');
			redirect($url);
		}
	}
}
