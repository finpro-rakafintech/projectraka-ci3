<?php
defined('BASEPATH') or exit('No direct script allowed');

class RegisterModel extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function registerUser($data)
    {
        return $this->db->insert('users', $data);
    }

}

?>