<?php
defined('BASEPATH') or exit('No direct script allowed');

class ProductModel extends CI_Model
{
    public function view_product()
    {
        return $this->db->get('product');
    }
    public function getProductById($product_id)
    {
        $this->db->where('product_id', $product_id);
        return $this->db->get('product')->row();
    }
}
