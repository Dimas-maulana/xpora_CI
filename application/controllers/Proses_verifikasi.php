<?php

defined('BASEPATH') or exit('No direct script access allowed');

class proses_verifikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('proses_verifikasi_model', 'proses_verifikasi');
    }

    function index()
    {
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
}
