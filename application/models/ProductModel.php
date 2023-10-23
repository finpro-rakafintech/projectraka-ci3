<?php
defined('BASEPATH') or exit('No direct script allowed');

class ProductModel extends CI_Model
{
    public function view_product()
    {
        return $this->db->get('product');
    }
}


?>