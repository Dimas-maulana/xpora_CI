<?php defined('BASEPATH') or exit('No direct script access allowed');
class ekspansirequest_m extends CI_ModeL
{
    public function __construct()
    {
        $this->load->database();
    }

    public function all_data()
    {
        $this->db->select('ekspansi_request.request_post_id, ekspansi_request.qty_komoditas, ekspansi_request.comodity_name, ekspansi_request.kd_data_diri, ekspansi_request.request_id, ekspansi_request.destination, ekspansi_request.category, ekspansi_request.status, ekspansi_request.application, ekspansi_request.payment, ekspansi_request.create_date, ekspansi_request.incoterm, ekspansi_request.frekuensi');
        $this->db->from('ekspansi_request');
        $this->db->order_by('ekspansi_request.comodity_name', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_by_request_id($id) {
        $this->db->from('ekspansi_request as er');
        $this->db->where('er.request_post_id', $id);
        $query = $this->db->get();

        return $query->row();
    }

    public function get_by_id($id)
    {
        $this->db->from('ekspansi_request');
        $this->db->join('ekspansi_request', 'ekspansi_request.kd_data_diri=data_diri.kd_data_diri');
        $this->db->where('ekspansi_request.kd_data_diri', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function update($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
        return $this->db->affected_rows();
    }

    public function draft()
    {
        $this->db->from('ekspansi_request');
        $this->db->where('status', 'draft');
        $query = $this->db->get();
        return $query->result();
    }

    public function waiting_for_approval()
    {
        $this->db->from('ekspansi_request');
        $this->db->where('status', 'waiting for approval');
        $query = $this->db->get();
        return $query->result();
    }

    public function posted()
    {
        $this->db->from('ekspansi_request');
        $this->db->where('status', 'posted');
        $query = $this->db->get();
        return $query->result();
    }

    public function unposted()
    {
        $this->db->from('ekspansi_request');
        $this->db->where('status', 'un-posted');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_comodity_name()
    {
        $comodity_name = null;
        return $this->db->query('SELECT * FROM ekspansi_request WHERE comodity_name=1')->result_array();
    }
}
