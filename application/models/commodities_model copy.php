<?php
defined('BASEPATH') or exit('No direct script access allowed');

class commodities_model extends CI_ModeL
{
    public function __construct()
    {
        $this->load->database();
    }

    public function all_data()
    {
        $this->db->from('ekspansi_comodities');
        $query = $this->db->get();
        return $query->result();
    }
}
