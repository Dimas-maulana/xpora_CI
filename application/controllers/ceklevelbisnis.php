<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ceklevelbisnis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ceklevelbisnis_model', 'leftclb');
    }

    function index()
    {
        $data = array(
            'title' => 'Cek Level Bisnis',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'leftclb',
            'leftclb' => $this->leftclb->all_data(),
        );
        $this->load->view('template/main',  $data);
    }
}