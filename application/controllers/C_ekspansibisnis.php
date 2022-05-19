<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_ekspansibisnis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_ekspansibisnis', 'eks');
    }

    function index()
    {
        $data = array(
            'title' => 'Ekspansi Bisnis',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'v_ekspansibisnis',
            // 'eks' => $this->eks->all_data(),
        );

        $this->load->view('template/main',  $data);
    }
}
