<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PurchaseModel extends CI_Model
{
    public function addPurchase($data)
    {
        // Insert data into the 'purchase' table
        $this->db->insert('purchase', $data);
    }
    public function getOrderById($order_id)
    {
        $this->db->where('order_id', $order_id);
        return $this->db->get('purchase')->row_array();
    }

    public function getNasabahById($nasabah_id)
    {
        $this->db->where('nasabah_id', $nasabah_id);
        return $this->db->get('nasabah')->row_array();
    }

    public function getProductById($product_id)
    {
        $this->db->where('product_id', $product_id);
        return $this->db->get('product')->row_array();
    }
}
