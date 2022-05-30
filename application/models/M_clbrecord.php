<?php defined('BASEPATH') or exit('No direct script access allowed');
    class m_clbrecord extends CI_ModeL
    {
        var $table = 'clb';
        public function __construct()
    {
        $this->load->database();
    }

    public function all_data($id)
    {
        $this->db->where('kd_data_diri', $id);
        $this->db->select('clb.attempt, clb.date, clb.type_of_rest, clb.result, clb.recomendation, clb.follow_up_recomendation,');
        $this->db->from('clb');
        
        $this->db->order_by('clb.attempt', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    
    }
?>