<?php defined('BASEPATH') or exit('No direct script access allowed');
    class ceklevelbisnis_model extends CI_ModeL
    {
        public function __construct()
    {
        $this->load->database();
    }

    public function all_data()
    {
        $this->db->select('data_diri.kd_data_diri, data_diri.nama_pemilik, clb.number_attempt, clb.result, clb.follow_up_recomendation, clb.date, clb.nama_usaha');
        $this->db->from('data_diri');
        $this->db->join('clb', 'clb.kd_data_diri=data_diri.kd_data_diri');
        $this->db->order_by('data_diri.kd_data_diri', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    }
?>
