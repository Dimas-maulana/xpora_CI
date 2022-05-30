<?php
defined('BASEPATH') or exit('No direct script access allowed');

class detail_akun_model extends CI_Model
{
    public function get_akun($id)
    {
        $id_usaha = $id;
        return $this->db->query('SELECT * FROM akun WHERE user_id='.$id_usaha)->result_array();
    }
    public function get_data()
    {
        $id_usaha = null;
        return $this->db->query('SELECT * FROM data_usaha WHERE id_usaha=1')->result_array();
    }

    public function get_ekspor()
    {
        $id_usaha = null;
        return $this->db->query('SELECT * FROM riwayat_ekspor WHERE id_usaha=1')->result_array();
    }

    public function get_kuantitas()
    {
        $id_usaha = null;
        return $this->db->query('SELECT * FROM kuantitas WHERE id_usaha=1')->result_array();
    }

    public function get_officer()
    {
        $id_usaha = null;
        return $this->db->query('SELECT * FROM assigned_officer WHERE id_usaha=1')->result_array();
    }

    public function update($data)
    {
        $this->db->where('id_usaha', 1);
        $this->db->update('data_usaha', $data);
    }

    public function set_kuantitas($data)
    {
        $id_usaha = null;
        $this->db->insert('kuantitas', $data);
    }

    public function upd_kuantitas($data)
    {
        {
            $this->db->where('id_kuantitas', $data['id_kuantitas']);
            $this->db->update('kuantitas', $data);
        }
    }

    public function set_officer($data)
    {
        $id_usaha = null;
        $this->db->insert('assigned_officer', $data);
    }

    public function set_data_usaha($data)
    {
        $this->db->where('id_usaha', 1);
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
        $this->db->insert('riwayat_image',$data);
    }

    public function upd_img_riwayat($data)
    {
        $this->db->where('id_riwayat_image', $data['id_riwayat_image']);
        $this->db->update('riwayat_image', $data);
    }

    public function get_img_riwayat()
    {
        $id_usaha = null;
        return $this->db->query('SELECT * FROM riwayat_image WHERE id_usaha=1')->result_array();
    }

    public function get_img_kuantitas()
    {
        $id_usaha = null;
        return $this->db->query('SELECT * FROM kuantitas_image WHERE id_usaha=1')->result_array();
    }

    public function set_img_kuantitas($data)
    {
        $this->db->insert('kuantitas_image',$data);
    }

    public function upd_img_kuantitas($data)
    {
        $this->db->where('id_kuantitas_image', $data['id_kuantitas_image']);
        $this->db->update('kuantitas_image', $data);
    }
    
}
