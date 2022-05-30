<?php
defined('BASEPATH') or exit('No direct script access allowed');

class produk_bni_model extends CI_Model
{
    public function get_all_produk($id)
    {
        
        $this->db->where('kd_data_diri',$id);  
        return $this->db->get("data_pembuatan_rekening")->result_array();
    }

    public function set_produk($data)
    {
        $this->db->insert('data_pembuatan_rekening', $data);
    }
    public function update_produk($data)
    {
        $this->db->where('id_usaha', 1);
        $this->db->update('data_pembuatan_rekening', $data);
    }
}
