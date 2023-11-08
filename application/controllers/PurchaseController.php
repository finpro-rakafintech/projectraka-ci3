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

            $product_data = array(
                'product_id' => $this->input->post('product_id'),
                'nasabah_id' => $nasabah_id
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
}
