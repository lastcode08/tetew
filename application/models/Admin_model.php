<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function get_barang()
    {
        return $this->db->get('barang')->result();
    }

    public function get_pelanggan() 
    {
        return $this->db->get('user')->result();
    }
}