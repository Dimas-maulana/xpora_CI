<?php defined('BASEPATH') or exit('No direct script access allowed');
    class ceklevelbisnis_model extends CI_ModeL
    {
        public function __construct()
    {
        $this->load->database();
    }

    public function all_data()
    {
        $this->db->select('clb.attempt, data_diri.nama_pemilik, clb.kd_data_diri, clb.type_of_rest, clb.result, clb.recomendation, clb.follow_up_recomendation, clb.number_attempt, clb.nama_usaha, clb.date');
        $this->db->from('data_diri');
        $this->db->join('clb', 'clb.kd_data_diri=data_diri.kd_data_diri');
        $this->db->order_by('clb.attempt', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    }
?>
