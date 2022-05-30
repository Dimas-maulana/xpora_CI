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

    public function get_data_by_id ($id) {
        $this->db->from('ekspansi_comodities as es');
        $this->db->join('data_diri as dr', 'dr.kd_data_diri = es.kd_data_diri');
        $this->db->where('es.comodity_posted_id', $id);
        $query = $this->db->get();
        return $query->result();
    }
}
