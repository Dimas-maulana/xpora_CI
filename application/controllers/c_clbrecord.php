<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_clbrecord extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_clbrecord', 'clb');
    }

    function index()
    {
        $data = array(
            'title' => 'Cek Level Bisnis',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'v_clbrecord',
            'clb' => $this->clb->all_data(),
        );
        $this->load->view('template/main',  $data);
    }

    function detailakun(){
        $data = array(
            'title' => 'Detail akun clb',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'v_detailakunclb',
        );

        $this->load->view('v_detailakunclb', $data);
    }
}