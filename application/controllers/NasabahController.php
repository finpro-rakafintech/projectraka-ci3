<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NasabahController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('NasabahModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function add()
    {
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required');
        $this->form_validation->set_rules('no_kredit', 'No Kredit', 'trim|required');
        $this->form_validation->set_rules('npwp', 'NPWP', 'trim|required');
        $this->form_validation->set_rules('nik', 'NIK', 'trim|required');
        $this->form_validation->set_rules('income', 'Income', 'trim|required');
        $this->form_validation->set_rules('outcome', 'Outcome', 'trim|required');

        if ($this->form_validation->run() === FALSE) {
            // Validasi gagal, tampilkan pesan kesalahan
            $this->load->view('layout/header'); // Tampilkan header
            $this->load->view('layout/navbar'); // Tampilkan navbar
            if (!$this->session->userdata('masuk')) {
                redirect('login_page');
            }
            $data['user_id'] = $this->session->userdata('user_id');

            $this->load->view('nasabah/add_nasabah', $data); // Kirim user_id ke view
            $this->load->view('layout/footer');
        } else {
            // Validasi berhasil, proses data dan dokumen
            $user_id = $this->session->userdata('user_id'); // Ambil user_id dari sesi
            $file_path = $this->uploadFile(); // Mengunggah file dan mendapatkan path

            if ($file_path !== false) {
                $data = array(
                    'firstname' => $this->input->post('firstname'),
                    'lastname' => $this->input->post('lastname'),
                    'phone_number' => $this->input->post('phone_number'),
                    'no_kredit' => $this->input->post('no_kredit'),
                    'npwp' => $this->input->post('npwp'),
                    'nik' => $this->input->post('nik'),
                    'income' => $this->input->post('income'),
                    'outcome' => $this->input->post('outcome'),
                    'dokumen' => $file_path,
                    'user_id' => $user_id,
                );

                if ($this->NasabahModel->addNasabah($data)) {
                    // Data nasabah berhasil ditambahkan, lakukan pengalihan atau tampilkan pesan sukses
                    redirect('nasabah_list');
                } else {
                    // Gagal menyimpan data nasabah, tampilkan pesan kesalahan
                    $this->load->view('layout/header'); // Tampilkan header
                    $this->load->view('layout/navbar'); // Tampilkan navbar
                    $data['user_id'] = $user_id; // Kirim user_id ke view dalam kasus error
                    $this->load->view('nasabah/add_nasabah', $data); // Kirim user_id ke view
                    $this->load->view('layout/footer');
                }
            } else {
                // Gagal mengunggah file, tampilkan pesan kesalahan
                echo "Gagal mengunggah file.";
            }
        }
    }

    public function uploadFile()
    {
        $config['upload_path'] = './uploads/'; // Direktori penyimpanan file
        $config['allowed_types'] = 'txt|png|jpg|jpeg'; // Jenis file yang diizinkan
        $config['max_size'] = 2048; // Maksimum ukuran file dalam kilobyte (2MB)

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('userfile')) {
            $data = $this->upload->data();
            $file_path = 'uploads/' . $data['file_name'];

            return $file_path;
        } else {
            // Gagal mengunggah file
            return false;
        }
    }
}
