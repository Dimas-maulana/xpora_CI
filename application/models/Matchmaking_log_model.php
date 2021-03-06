<?php
defined('BASEPATH') or exit('No direct script access allowed');

class matchmaking_log_model extends CI_ModeL
{
    public function __construct()
    {
        $this->load->database();
    }

    public function all_data()
    {
        $this->db->from('ekspansi_matchmaking');
        $query = $this->db->get();
        return $query->result();
    }

    public function requested()
    {
        $this->db->from('ekspansi_matchmaking');
        $this->db->where('status', 'requested');
        $query = $this->db->get();
        return $query->result();
    }

    public function on_progress()
    {
        $this->db->from('ekspansi_matchmaking');
        $this->db->where('status', 'on progress');
        $query = $this->db->get();
        return $query->result();
    }

    public function done()
    {
        $this->db->from('ekspansi_matchmaking');
        $this->db->where('status', 'done');
        $query = $this->db->get();
        return $query->result();
    }

    public function cancel()
    {
        $this->db->from('ekspansi_matchmaking');
        $this->db->where('status', 'cancel');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_detail_by_id($id) {
        $this->db->select('em.*');
        $this->db->from('ekspansi_matchmaking as em');
        $this->db->where('em.matchmaking_id', $id);
        $query = $this->db->get();

        return $query->result();
    }

    public function get_log_from_user($user_id) {
        $this->db->select('em.*');
        $this->db->from('ekspansi_matchmaking as em');
        $this->db->where('em.buyer_id', $user_id);
        $this->db->or_where('em.seller_id', $user_id);
        $query = $this->db->get();

        return $query->result();
    }
}
