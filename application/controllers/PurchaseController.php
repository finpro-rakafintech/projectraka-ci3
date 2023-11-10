<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PurchaseController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PurchaseModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function addPurchase()
    {
        $this->form_validation->set_rules('product_id', 'Product ID', 'trim|required');

        if ($this->form_validation->run() === TRUE) {
            // Validasi berhasil, proses data pembelian
            $nasabah_id = $this->input->post('nasabah_id');

            $date_ordered = date('Y-m-d');

            $product_data = array(
                'product_id' => $this->input->post('product_id'),
                'nasabah_id' => $nasabah_id,
                'date_ordered' => $date_ordered,
                // Tambahkan field lainnya sesuai dengan data product yang perlu disimpan
            );

            // Simpan data product ke tabel 'purchase'
            $this->PurchaseModel->addPurchase($product_data);

            $order_id = $this->PurchaseModel->addPurchase($product_data);
            // Setelah berhasil disimpan, tampilkan halaman status pengajuan atau pesan sukses
            redirect('statusPengajuan/' . $order_id);
        } else {
            // Validasi gagal, tampilkan pesan kesalahan atau pengalihan ke halaman sebelumnya
            echo "Validasi gagal.";
        }
    }

    public function statusPengajuan($order_id)
    {
        // Ambil data order berdasarkan order_id
        $order_data = $this->PurchaseModel->getOrderById($order_id);
        // $order_id = $this->purchase_model->addPurchase($data);

        if ($order_data) {
            // Ambil data nasabah berdasarkan nasabah_id dari order
            $nasabah_data = $this->PurchaseModel->getNasabahById($order_data['nasabah_id']);

            // Ambil data product berdasarkan product_id dari order
            $product_data = $this->PurchaseModel->getProductById($order_data['product_id']);

            $include = array(
                'nama_user' => $this->session->userdata('nama_user'),
                'header' => $this->load->view('layout/header'),
                'navbar' => $this->load->view('layout/navbar'),
                'active_link' => 'active',

            );
            // Load view untuk menampilkan informasi
            $data = array(
                'order_data' => $order_data,
                'nasabah_data' => $nasabah_data,
                'product_data' => $product_data
            );

            // Add additional data to the existing data array
            $data = array_merge($data, array(
                'nama_user' => $this->session->userdata('nama_user'),
                'header' => $this->load->view('layout/header', '', TRUE), // Set the third parameter to TRUE to return the view as a string
                'navbar' => $this->load->view('layout/navbar', '', TRUE),
                'active_link' => 'active'
            ));

            $this->load->view('statusPengajuan', $data);
        } else {
            // Redirect atau tampilkan pesan jika order_id tidak valid
            redirect('halaman_error');
        }
    }

    public function updatePurchase()
    {
        if (isset($_POST['update'])) {
            $order_id = $this->input->post('order_id');
            $new_loan_amount = $this->input->post('updated_loan_amount');
            $new_interest_rate = $this->input->post('updated_interest_rate');
            $new_loan_term = $this->input->post('updated_loan_term');

            // Lakukan validasi data jika diperlukan

            // Update data peminjaman
            $data = array(
                'jumlah_pinjaman' => $new_loan_amount,
                'suku_bunga' => $new_interest_rate,
                'lama_pinjam' => $new_loan_term,
                'date_ordered' => date('Y-m-d')
            );

            $this->PurchaseModel->updatePurchase($order_id, $data);
            $this->session->set_userdata('order_id', $order_id);


            // Redirect ke halaman proses_pengajuan
            redirect('statusUpdatePengajuan/' . $order_id);
        } else {
            // Tampilkan halaman error atau redirect ke halaman sebelumnya
            echo "Update gagal.";
        }
    }

    public function updatePengajuan($order_id)
    {
        // Ambil data order berdasarkan order_id
        $order_data = $this->PurchaseModel->getOrderById($order_id);
        // $order_id = $this->purchase_model->addPurchase($data);

        if ($order_data) {
            // Ambil data nasabah berdasarkan nasabah_id dari order
            $nasabah_data = $this->PurchaseModel->getNasabahById($order_data['nasabah_id']);

            // Ambil data product berdasarkan product_id dari order
            $product_data = $this->PurchaseModel->getProductById($order_data['product_id']);

            $include = array(
                'nama_user' => $this->session->userdata('nama_user'),
                'header' => $this->load->view('layout/header'),
                'navbar' => $this->load->view('layout/navbar'),
                'active_link' => 'active',

            );
            // Load view untuk menampilkan informasi
            $data = array(
                'order_data' => $order_data,
                'nasabah_data' => $nasabah_data,
                'product_data' => $product_data
            );

            // Add additional data to the existing data array
            $data = array_merge($data, array(
                'nama_user' => $this->session->userdata('nama_user'),
                'header' => $this->load->view('layout/header', '', TRUE), // Set the third parameter to TRUE to return the view as a string
                'navbar' => $this->load->view('layout/navbar', '', TRUE),
                'active_link' => 'active'
            ));

            $this->load->view('statusupdatePengajuan', $data);
        } else {
            // Redirect atau tampilkan pesan jika order_id tidak valid
            redirect('halaman_error');
        }
    }
    // PurchaseController.php
    public function redirectToStatusUpdate($order_id)
    {
        redirect('updatePengajuan/' . $order_id);
    }
}
