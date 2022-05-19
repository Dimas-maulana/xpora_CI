<?php
class Mapp extends CI_Model
{
    function __construct()
    {
            parent::__construct();
            // $this->oracle   = $this->load->database('oracle',true);
            // $this->paint    = $this->load->database('paint', TRUE);
    }

    public function getcomodity()
    {
        $query = $this->db->query("
        select *, date_format(created_at, '%m') bulan 
        from data_pengajuan_komodity 
        WHERE year(created_at) = year(CURDATE()) 
        ");

        return $query->result_array();
    }

    public function gettransaction()
    {
        $query  = $this->db->query("
        SELECT t.*, DATE_FORMAT(t.tgl_transaksi, '%m') bulan
        FROM data_transaksi t
        WHERE year(t.tgl_transaksi) = year(CURDATE())
        ");

        return $query->result_array();
    }

    public function getpinjam()
    {
        $query  = $this->db->query("
        SELECT p.*, DATE_FORMAT(p.tgl_pinjam, '%m') bulan
        FROM data_pinjam p
        WHERE year(p.tgl_pinjam) = year(CURDATE())
        ");

        return $query->result_array();
    }

    public function getlast5transact()
    {
        $query  = $this->db->query("
        SELECT t.*
        FROM data_transaksi t
        ORDER BY t.tgl_transaksi desc
        limit 5
        ");

        return $query->result_array();
    }

    public function getopenrekening()
    {
        $query  = $this->db->query("
        SELECT r.*, DATE_FORMAT(r.tgl_pembukaan_rek, '%m') bulan
        FROM data_pembuatan_rekening r
        WHERE YEAR(r.tgl_pembukaan_rek) = year(CURDATE())
        ");

        return $query->result_array();
    }

    public function distinct_jenisrek()
    {
        $query  = $this->db->query("
        SELECT DISTINCT(r.jenis_rek)
        FROM data_pembuatan_rekening r
        ");

        return $query->result_array();
    }

    public function countdrct()
    {
        $query  = $this->db->query("
        SELECT aa.* 
FROM 
(
SELECT (SELECT COUNT(user_type)
FROM data_diri d
WHERE d.user_type = 'Indirect Exportir') indrct,
(SELECT COUNT(user_type)
FROM data_diri d
WHERE d.user_type = 'Direct Esxportir ') drct,
(SELECT COUNT(b.Id_buyer)
FROM data_buyer b) buyer,
(SELECT COUNT(user_type)
FROM data_diri d
WHERE d.user_type = 'Diaspora') dspr
) aa
        ");

        return $query->row_array();
    }
 
    public function getselectall($table)
    {
        $query  = $this->db->query("
            select *
            from $table
        ");

        return $query->result_array();
    }


}   