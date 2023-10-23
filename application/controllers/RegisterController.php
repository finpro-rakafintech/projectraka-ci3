<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegisterController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('RegisterModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $this->form_validation->set_rules('fullname', 'Full Name', 'trim|required');
        $this->form_validation->set_rules('birthdate', 'Birthdate', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', 'Email already registered. Please Log In!');
            redirect('register_page'); 
        } else {
            $data = array(
                'fullname' => htmlspecialchars($this->input->post('fullname', TRUE), ENT_QUOTES),
                'birthdate' => htmlspecialchars($this->input->post('birthdate', TRUE), ENT_QUOTES),
                'email' => htmlspecialchars($this->input->post('email', TRUE), ENT_QUOTES),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            );

            if ($this->RegisterModel->registerUser($data)) {
                $data_session = array(
                    'fullname' => $data['fullname'],
                    'email' => $data['email'],
                );

                $this->session->set_userdata($data_session);

                redirect('home');
            } else {
                // Email sudah terdaftar, tampilkan pesan kesalahan
                $this->session->set_flashdata('error', 'Email already registered.');
                redirect('register_page');
            }
        }
    }
}
