<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NasabahController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('NasabahModel');
        $this->load->model('PurchaseModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function add()
    {
        $user_id = $this->session->userdata('user_id');
        $existingNasabah = $this->NasabahModel->getNasabahByUserId($user_id);

        if ($existingNasabah) {
            // User already registered as a Nasabah, redirect to nasabah_cukuruk
            redirect('UserController');
        }

        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required');
        $this->form_validation->set_rules('no_kredit', 'No Kredit', 'trim|required');
        $this->form_validation->set_rules('npwp', 'NPWP', 'trim|required');
        $this->form_validation->set_rules('nik', 'NIK', 'trim|required');
        $this->form_validation->set_rules('income', 'Income', 'trim|required');
        $this->form_validation->set_rules('outcome', 'Outcome', 'trim|required');

        if ($this->form_validation->run() === FALSE) {
            // Validation failed, display error message
            $data['user_id'] = $user_id;
            $this->load->view('layout/header');
            $this->load->view('layout/navbar');
            if (!$this->session->userdata('masuk')) {
                redirect('login_page');
            }
            $this->load->view('nasabah/add_nasabah', $data);
            $this->load->view('layout/footer');
        } else {
            $product_id = $this->input->post('product_id');
            // Validation succeeded, process data and document upload
            $file_paths = $this->uploadFile();

            if ($file_paths !== false) {
                $data_nasabah = array(
                    'firstname' => $this->input->post('firstname'),
                    'lastname' => $this->input->post('lastname'),
                    'phone_number' => $this->input->post('phone_number'),
                    'no_kredit' => $this->input->post('no_kredit'),
                    'npwp' => $this->input->post('npwp'),
                    'nik' => $this->input->post('nik'),
                    'income' => $this->input->post('income'),
                    'outcome' => $this->input->post('outcome'),
                    'dok_ktp' => $file_paths[0], // Menggunakan dokumen pertama
                    'dok_kk' => $file_paths[1], // Menggunakan dokumen kedua
                    'dok_npwp' => $file_paths[2],
                    'dok_penghasilan' => $file_paths[3],
                    'dok_aktapisah' => $file_paths[4],
                    'user_id' => $user_id,
                    'product_id' => $product_id
                );

                if ($this->NasabahModel->addNasabah($data_nasabah)) {
                    $nasabah_id = $this->db->insert_id();
                    $product_data = array(
                        'product_id' => $product_id,
                        'region_id' => '1',
                        'nasabah_id' => $nasabah_id,
                        // Sesuaikan dengan data yang diperlukan
                    );
                    $this->PurchaseModel->addPurchase($product_data);
                    $order_id = $this->PurchaseModel->addPurchase($product_data);
                    // Setelah berhasil disimpan, tampilkan halaman status pengajuan atau pesan sukses
                    redirect('statusPengajuan/' . $order_id);
                } else {
                    // Failed to save nasabah data, display error message
                    $this->load->view('layout/header');
                    $this->load->view('layout/navbar');
                    $data['user_id'] = $user_id;
                    $this->load->view('nasabah/add_nasabah', $data);
                    $this->load->view('layout/footer');
                }
            } else {
                // Failed to upload file, display error message
                echo "Failed to upload file.";
            }
        }
    }

    public function uploadFile()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'txt|png|jpg|jpeg';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        $file_paths = array(); // Definisikan variabel $file_paths sebelum menggunakannya

        if ($this->upload->do_upload('ktp')) {
            $data = $this->upload->data();
            $file_paths[] = 'uploads/' . $data['file_name'];
        }

        if ($this->upload->do_upload('kk')) {
            $data = $this->upload->data();
            $file_paths[] = 'uploads/' . $data['file_name'];
        }
        if ($this->upload->do_upload('npwp')) {
            $data = $this->upload->data();
            $file_paths[] = 'uploads/' . $data['file_name'];
        }
        if ($this->upload->do_upload('slip')) {
            $data = $this->upload->data();
            $file_paths[] = 'uploads/' . $data['file_name'];
        }
        if ($this->upload->do_upload('akta')) {
            $data = $this->upload->data();
            $file_paths[] = 'uploads/' . $data['file_name'];
        }

        if (!empty($file_paths)) {
            return $file_paths;
        } else {
            return false;
        }
    }

    public function check_nasabah_existence()
    {
        $user_id = $this->input->post('user_id');
        $existingNasabah = $this->NasabahModel->getNasabahByUserId($user_id);

        if ($existingNasabah) {
            // User already registered as a Nasabah, return a JSON response
            echo json_encode(['exists' => true]);
        } else {
            // User not registered, return a JSON response
            echo json_encode(['exists' => false]);
        }
    }
}
