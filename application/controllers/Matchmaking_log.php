<?php

defined('BASEPATH') or exit('No direct script access allowed');

class matchmaking_log extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('matchmaking_log_model', 'matchmaking_log');
        $this->load->model('detail_akun_model', 'detail_akun');
    }

    function index()
    {
        $data = array(
            'title' => 'Form Ekspansi Bisnis - Matchmaking Log',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'matchmaking_log',
            'matchmaking_log' => $this->matchmaking_log->all_data(),
        );
        $this->load->view('template/main', $data);
    }

    function requested()
    {
        $data = array(
            'title' => 'Form Requested',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'matchmaking_log',
            'matchmaking_log' => $this->matchmaking_log->requested(),
        );
        $this->load->view('template/main', $data);
    }

    function on_progress()
    {
        $data = array(
            'title' => 'Form On Progress',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'matchmaking_log',
            'matchmaking_log' => $this->matchmaking_log->on_progress(),
        );
        $this->load->view('template/main', $data);
    }

    function done()
    {
        $data = array(
            'title' => 'Form Done',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'matchmaking_log',
            'matchmaking_log' => $this->matchmaking_log->done(),
        );
        $this->load->view('template/main', $data);
    }

    function cancel()
    {
        $data = array(
            'title' => 'Form Cancel',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'matchmaking_log',
            'matchmaking_log' => $this->matchmaking_log->cancel(),
        );
        $this->load->view('template/main', $data);
    }

    function detail ($id) {
        $macthmaking = $this->matchmaking_log->get_detail_by_id($id)[0];
        $data = array(
            'title' => 'Detail Matchmaking',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'matchmaking_log_detail',
            'matchmaking_detail' => $macthmaking,
            'buyer' => $this->detail_akun->get_data($macthmaking->buyer_id)[0],
            'seller' => $this->detail_akun->get_data($macthmaking->seller_id)[0],
        );
        // echo json_encode($data); die;
        $this->load->view('template/main', $data);
    }
}
