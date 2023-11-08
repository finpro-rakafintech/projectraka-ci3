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
            redirect('nasabah_cukuruk');
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
            $file_path = $this->uploadFile();

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
                    'product_id' => $product_id
                );

                if ($this->NasabahModel->addNasabah($data)) {
                    $nasabah_id = $this->db->insert_id();
                    $product_id = $this->input->post('product_id');
                    // Data nasabah berhasil ditambahkan, lakukan pengalihan atau tampilkan pesan sukses
                    $product_data = array(
                        'product_id' => $product_id,
                        'region_id' => '1',
                        'nasabah_id' => $nasabah_id, // Gunakan nasabah_id yang diterima dari argumen
                        // Sesuaikan dengan data yang diperlukan


                    );
                    $this->PurchaseModel->addPurchase($product_data);

                    redirect('status_pengajuan');
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

    // public function add_nasabah_process()
    // {
    //     // ... (Validasi dan pengolahan data nasabah seperti yang sudah Anda implementasikan sebelumnya)

    //     // Data nasabah telah berhasil disimpan
    //     // Selanjutnya, Anda dapat menyimpan data ke dalam tabel 'purchase'
    //     $nasabah_id = $this->db->insert_id(); // Mengambil ID nasabah yang baru saja disimpan
    //     $product_id = $this->input->post('product_id');
    //     // Data yang akan disimpan ke dalam tabel 'purchase'
    //     $purchase_data = array(
    //         'order_status' => 'proses', // Sesuaikan dengan status yang sesuai
    //         'date_ordered' => date('Y-m-d'),
    //         'total_price' => '1', // Sesuaikan dengan total harga yang sesuai
    //         'region_id' => '1', // Sesuaikan dengan region yang sesuai
    //         'product_id' => $product_id, // Sesuaikan dengan product_id yang sesuai
    //         'nasabah_id' => $nasabah_id, // Menggunakan ID nasabah yang baru saja disimpan
    //     );

    //     $this->load->model('PurchaseModel'); // Load model PurchaseModel
    //     $purchase_id = $this->PurchaseModel->addPurchase($purchase_data);
    //     $this->PurchaseModel->addPurchase($purchase_data);

    //     // Redirect atau tampilkan pesan sukses sesuai kebutuhan
    // }


    public function uploadFile()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'txt|png|jpg|jpeg';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('userfile')) {
            $data = $this->upload->data();
            $file_path = 'uploads/' . $data['file_name'];

            return $file_path;
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
