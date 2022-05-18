<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ekspansimatchmaking extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ekspansimatchmaking_m', 'ekspansimatchmaking');
    }

    function index()
    {
        $data = array(
            'title' => 'Ekspansi bisnis Matchmaking Log',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'ekspansimatchmaking',
            'ekspansimatchmaking' => $this->ekspansimatchmaking->all_data(),
        );
        $this->load->view('template/main', $data);
    }
}
