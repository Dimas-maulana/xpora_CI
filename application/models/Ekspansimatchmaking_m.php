<?php defined('BASEPATH') or exit('No direct script access allowed');
    class ekspansimatchmaking_m extends CI_ModeL
    {
        public function __construct()
    {
        $this->load->database();
    }

    public function all_data()
    {
        $this->db->select('ekspansi_matchmaking.matchmaking_id, ekspansi_matchmaking.seller_id, ekspansi_matchmaking.buyer_id, ekspansi_matchmaking.destination, ekspansi_matchmaking.comodity, ekspansi_matchmaking.status, ekspansi_matchmaking.payment_system, ekspansi_matchmaking.value, ekspansi_matchmaking.application_date');
        $this->db->from('ekspansi_matchmaking');
        $this->db->order_by('ekspansi_matchmaking.matchmaking_id', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    }
?>
