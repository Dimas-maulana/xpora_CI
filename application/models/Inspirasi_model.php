<?php
defined('BASEPATH') or exit('No direct script access allowed');

class inspirasi_model extends CI_Model{

   var $table = 'inspirasi';
   public function __construct()
    {
        $this->load->database();
    }

   public function get_data($limit, $start)
   {
      $this->db->order_by('start_date');
      $this->db->limit($limit,$start);
      $query = $this->db->get("inspirasi");
      if ($query->num_rows() > 0) {
         foreach ($query->result() as $row) {
            $data[] = $row;
         }
         return $data;
      }
      return false;
   }

   public function cari($input)
    {
        return $this->db->select('*')
                    ->like('nama_kelas',$input)
                    ->or_like('kategory',$input)
                    ->or_like('level',$input)
                    ->or_like('start_date',$input)
                    ->or_like('progres',$input,'after')
                    ->or_like('finish_date', $input)
                    ->get('inspirasi');
    }

    public function get_data_all()
    {
        $id_usaha = null;
        return $this->db->query('SELECT * FROM inspirasi WHERE id_inspirasi=1')->result_array();
    }

}