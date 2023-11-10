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

            // Setelah berhasil disimpan, tampilkan halaman status pengajuan atau pesan sukses
            redirect('status_pengajuan');
        } else {
            // Validasi gagal, tampilkan pesan kesalahan atau pengalihan ke halaman sebelumnya
            echo "Validasi gagal.";
        }
    }

    public function statusPengajuan($order_id)
    {
        // Ambil data order berdasarkan order_id
        $order_data = $this->PurchaseModel->getOrderById($order_id);

        if ($order_data) {
            // Ambil data nasabah berdasarkan nasabah_id dari order
            $nasabah_data = $this->PurchaseModel->getNasabahById($order_data['nasabah_id']);

            // Ambil data product berdasarkan product_id dari order
            $product_data = $this->PurchaseModel->getProductById($order_data['product_id']);

            // Load view untuk menampilkan informasi
            $this->load->view('status_pengajuan', array(
                'order_data' => $order_data,
                'nasabah_data' => $nasabah_data,
                'product_data' => $product_data
            ));
        } else {
            // Redirect atau tampilkan pesan jika order_id tidak valid
            redirect('halaman_error');
        }
    }
}
