<?php
defined('BASEPATH') or exit('No direct script access allowed');

class akun_model extends CI_ModeL
{
    public function __construct()
    {
        $this->load->database();
    }

    public function all_data()
    {
        $this->db->select('data_diri.kd_data_diri, data_diri.nik, data_diri.nama_pemilik, data_usaha.nama_usaha, data_usaha.komoditi_usaha, data_diri.verifikasi, data_usaha.domisili_perusahaan, data_diri.user_type, data_diri.date_create');
        $this->db->from('data_usaha');
        $this->db->join('data_diri', 'data_diri.kd_data_diri=data_usaha.kd_data_diri');
        $this->db->order_by('data_diri.kd_data_diri', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function buyer()
    {
        $this->db->select('data_diri.kd_data_diri, data_diri.nik, data_diri.nama_pemilik, data_usaha.nama_usaha, data_usaha.komoditi_usaha, data_diri.verifikasi, data_usaha.domisili_perusahaan, data_diri.user_type, data_diri.date_create');
        $this->db->from('data_usaha');
        $this->db->join('data_diri', 'data_diri.kd_data_diri=data_usaha.kd_data_diri');
        $this->db->order_by('data_diri.kd_data_diri', 'ASC');
        $this->db->where('user_type', 'Buyer');
        $query = $this->db->get();
        return $query->result();
    }

    public function indirect_exportir()
    {
        $this->db->select('data_diri.kd_data_diri, data_diri.nik, data_diri.nama_pemilik, data_usaha.nama_usaha, data_usaha.komoditi_usaha, data_diri.verifikasi, data_usaha.domisili_perusahaan, data_diri.user_type, data_diri.date_create');
        $this->db->from('data_usaha');
        $this->db->join('data_diri', 'data_diri.kd_data_diri=data_usaha.kd_data_diri');
        $this->db->order_by('data_diri.kd_data_diri', 'ASC');
        $this->db->where('user_type', 'Indirect Exportir');
        $query = $this->db->get();
        return $query->result();
    }

    public function direct_exportir()
    {
        $this->db->select('data_diri.kd_data_diri, data_diri.nik, data_diri.nama_pemilik, data_usaha.nama_usaha, data_usaha.komoditi_usaha, data_diri.verifikasi, data_usaha.domisili_perusahaan, data_diri.user_type, data_diri.date_create');
        $this->db->from('data_usaha');
        $this->db->join('data_diri', 'data_diri.kd_data_diri=data_usaha.kd_data_diri');
        $this->db->order_by('data_diri.kd_data_diri', 'ASC');
        $this->db->where('user_type', 'Direct Exportir');
        $query = $this->db->get();
        return $query->result();
    }

    public function diaspora()
    {
        $this->db->select('data_diri.kd_data_diri, data_diri.nik, data_diri.nama_pemilik, data_usaha.nama_usaha, data_usaha.komoditi_usaha, data_diri.verifikasi, data_usaha.domisili_perusahaan, data_diri.user_type, data_diri.date_create');
        $this->db->from('data_usaha');
        $this->db->join('data_diri', 'data_diri.kd_data_diri=data_usaha.kd_data_diri');
        $this->db->order_by('data_diri.kd_data_diri', 'ASC');
        $this->db->where('user_type', 'Diaspora');
        $query = $this->db->get();
        return $query->result();
    }

    public function buatKode()
    {
        $this->db->select('RIGHT(data_diri.id_data_diri,2) as kode', FALSE);
        $this->db->order_by('id_data_diri', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('data_diri');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodejadi = "DD" . $kodemax;
        return $kodejadi;
    }

    public function save_diri($data)
    {
        $this->db->insert('data_diri', $data);
        return $this->db->insert_id();
    }

    public function save_usaha($dataa)
    {
        $this->db->insert('data_usaha', $dataa);
        return $this->db->insert_id();
    }

    public function get_by_id($id)
    {
        $this->db->from('data_usaha');
        $this->db->join('data_diri', 'data_diri.kd_data_diri=data_usaha.kd_data_diri');
        $this->db->where('data_diri.kd_data_diri', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function delete_by_id($kd)
    {
        $this->db->delete('data_diri', array('kd_data_diri' => $kd));
        $this->db->delete('data_usaha', array('kd_data_diri' => $kd));
    }
}
