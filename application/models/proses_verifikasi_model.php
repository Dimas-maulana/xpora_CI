<?php
defined('BASEPATH') or exit('No direct script access allowed');

class proses_verifikasi_model extends CI_ModeL
{
    public function __construct()
    {
        $this->load->database();
    }

    public function all_data()
    {
        $this->db->select('data_diri.kd_data_diri, data_diri.nama_pemilik, data_usaha.nama_usaha, data_usaha.domisili_perusahaan, data_diri.verifikasi, data_diri.assigned_officer, data_diri.priority, data_diri.verifikasi_date');
        $this->db->from('data_usaha');
        $this->db->join('data_diri', 'data_diri.kd_data_diri=data_usaha.kd_data_diri');
        $this->db->order_by('data_diri.kd_data_diri', 'ASC');
        $this->db->where('verifikasi', 'Verification');
        $query = $this->db->get();
        return $query->result();
    }
}
