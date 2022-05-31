<?php
defined('BASEPATH') or exit('No direct script access allowed');

class detail_akun_model extends CI_Model
{

    public function get_data($id)
    {
        $kd_diri = $id;

        $this->db->where('kd_data_diri', $kd_diri);
        return $this->db->get('data_usaha')->result_array();
    }

    public function get_ekspor($id)
    {
        $kd_diri = $id;
        $this->db->where('kd_data_diri', $kd_diri);
        return $this->db->get('riwayat_ekspor')->result_array();
        // return $this->db->query('SELECT * FROM riwayat_ekspor WHERE id_usaha=1')->result_array();
    }

    public function set_riwayat($data,$id)
    {
        $kd_diri = $id;
        // $this->db->where('kd_data_diri', $kd_diri);
        $this->db->insert('riwayat_ekspor',$data);
        // return $this->db->get('riwayat_ekspor')->result_array();
        // return $this->db->query('SELECT * FROM riwayat_ekspor WHERE id_usaha=1')->result_array();
    }
    public function get_riwayat($id)
    {
        $kd_diri = $id;
        $this->db->where('kd_data_diri', $kd_diri);
        return $this->db->get('riwayat_ekspor')->result_array();
        // return $this->db->get('riwayat_ekspor')->result_array();
        // return $this->db->query('SELECT * FROM riwayat_ekspor WHERE id_usaha=1')->result_array();
    }

    public function get_kuantitas($id)
    {
        $kd_diri = $id;
        $this->db->where('kd_data_diri', $kd_diri);
        return $this->db->get('kuantitas')->result_array();
        // return $this->db->query('SELECT * FROM kuantitas WHERE id_usaha=1')->result_array();
    }

    public function get_officer($id)
    {
        $kd_diri = $id;
        $this->db->where('kd_data_diri', $kd_diri);
        return $this->db->get('assigned_officer')->result_array();
    }

    public function update($data, $id)
    {
        $this->db->where('kd_data_diri', $id);
        $this->db->update('data_usaha', $data);
    }

    public function set_kuantitas($data)
    {
        $id_usaha = null;
        $this->db->insert('kuantitas', $data);
    }

    public function upd_kuantitas($data)
    { {
            $this->db->where('id_kuantitas', $data['id_kuantitas']);
            $this->db->update('kuantitas', $data);
        }
    }

    public function set_officer($data, $id)
    {
        $kd_diri = $id;
        $this->db->insert('assigned_officer', $data);
    }

    public function set_data_usaha($data, $id)
    {
        $this->db->where('kd_data_diri', $id);
        $this->db->update('data_usaha', $data);
    }

    public function get_verification_data()
    {
        $id_usaha = null;
        $this->db->select('*');
        $this->db->from();
        $this->db->join('comments', 'comments.id = blogs.id');
        $query = $this->db->get();
    }

    public function set_img_riwayat($data)
    {
        $this->db->insert('riwayat_image', $data);
    }

    public function upd_img_riwayat($data,$id)
    {
        $this->db->where('kd_data_diri',$id);
        $this->db->where('id_riwayat_image', $data['id_riwayat_image']);
        $this->db->update('riwayat_image', $data);
    }

    public function get_img_riwayat($id)
    {
        $this->db->where('kd_data_diri', $id);
        return $this->db->get('riwayat_image')->result_array();
        // return $this->db->query('SELECT * FROM riwayat_image WHERE id_usaha=1')->result_array();
    }

    public function get_img_kuantitas($id)
    {
        // $id_usaha = null;
        $this->db->where('kd_data_diri', $id);
        return $this->db->get('kuantitas_image');
        // return $this->db->query('SELECT * FROM kuantitas_image WHERE id_usaha=1')->result_array();
    }

    public function set_img_kuantitas($data)
    {
        $this->db->insert('kuantitas_image', $data);
    }

    public function upd_img_kuantitas($data)
    {
        $this->db->where('id_kuantitas_image', $data['id_kuantitas_image']);
        $this->db->update('kuantitas_image', $data);
    }
    
    public function set_verif_data_diri($data,$id)
    {
        $this->db->where('kd_data_diri', $id);
        $this->db->update('data_diri', $data);
    }

}
