<?php

defined('BASEPATH') or exit('No direct script access allowed');

class proses_verifikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('proses_verifikasi_model', 'proses_verifikasi',);
    }

    function index ()
    {
        $this->load->model('detail_akun_model');
        $data = array(
            'title' => 'Form Proses Verifikasi',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'proses_verifikasi',
            
            'proses_verifikasi' => $this->proses_verifikasi->all_data(),
            );
        $this->load->view('template/main', $data);
    }

    function prosesVerifikasi ($param='')
    {
        echo $param;
    }   

    public function set_officer()
    {
        $dataa = array(
            'verifikasi' => 1,
        );
        
        $this->proses_verifikasi_model->upd_officer($dataa);

        $data = array(
            'negara' => $this->input->post('negara'),
            'kota' => $this->input->post('kota'),
            'nama' => $this->input->post('nama'),
            'id_data_diri' => 111,
            'id_usaha' => 1,            
        );
        $this->proses_verifikasi_model->set_officer($data);

        

        redirect('proses_verifikasi/index');
    }
}
