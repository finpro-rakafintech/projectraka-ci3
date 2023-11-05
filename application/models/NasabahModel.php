<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NasabahModel extends CI_Model
{
    public function addNasabah($data)
    {
        return $this->db->insert('nasabah', $data);
    }
    public function getNasabahByUserId($user_id)
    {
        $query = $this->db->get_where('nasabah', array('user_id' => $user_id));
        return $query->row_array();
    }
}
