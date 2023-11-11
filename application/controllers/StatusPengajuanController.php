<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StatusPengajuanController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PurchaseModel');
		$this->load->model('NasabahModel');
		
		// Validasi jika user belum login
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url();
			redirect($url);
		}
		
		$this->load->library('session');
	}

	public function index()
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
 
		// $get_product = $this->PurchaseModel->getProductById($product_id);
		$include = array(
			'nama_user' => $this->session->userdata('nama_user'),
			'header' => $this->load->view('layout/header'),
			'navbar' => $this->load->view('layout/navbar'),
			'active_link' => 'active',
			
		);

		$this->load->view('nasabah/statusPengajuan', $include);
		$this->load->view('layout/footer');
	}
}
}
