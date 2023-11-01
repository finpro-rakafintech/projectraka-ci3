<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NasabahModel extends CI_Model
{
    public function addNasabah($data)
    {
        return $this->db->insert('nasabah', $data);
    }
}
