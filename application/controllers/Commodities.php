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
            'title' => 'Request Komoditas',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'commodities',
            'commodities' => $this->commodities->all_data(),
        );
        $this->load->view('template/main', $data);
    }

    function detail ($id) {
        $data = array(
            'title' => 'Detail Request Komoditas',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'app' => 'commodities_detail',
            'commodity' => $this->commodities->get_data_by_id($id)[0]
        );
        // echo json_encode($data); die;
        $this->load->view('template/main', $data);
    }
}
