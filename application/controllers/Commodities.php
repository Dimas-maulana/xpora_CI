<?php

defined('BASEPATH') or exit('No direct script access allowed');

class commodities extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('commodities_model', 'commodities');
    }

    function index()
    {
        $data = array(
            'title' => 'Form Proses Verifikasi',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'commodities',
            'commodities' => $this->commodities->all_data(),
        );
        $this->load->view('template/main', $data);
    }
}
