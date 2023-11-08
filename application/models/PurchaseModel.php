<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PurchaseModel extends CI_Model
{
    public function addPurchase($data)
    {
        // Insert data into the 'purchase' table
        $this->db->insert('purchase', $data);
    }
}
