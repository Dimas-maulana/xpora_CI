<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_ekspansibisnis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('matchmaking_log_model', 'matchmaking_log');
        $this->load->model('detail_akun_model', 'detail_akun');
        $this->load->model('ekspansirequest_m', 'ekspansirequest');
        $this->load->model('commodities_model', 'commodities');
    }

    function index($user_id) {
        $user_detail = $this->detail_akun->get_data($user_id)[0];
        $matchmaking_logs = $this->matchmaking_log->get_log_from_user($user_id);
        if ($matchmaking_logs && count($matchmaking_logs) > 0) {
            foreach ($matchmaking_logs as $ml) {
                if ($ml->buyer_id == $user_id) {
                    $ml->buyer = $user_detail;
                } else {
                    $ml->buyer = $this->detail_akun->get_data($ml->buyer_id)[0];
                }
                if ($ml->seller_id == $user_id) {
                    $ml->seller = $user_detail;
                } else {
                    $ml->seller = $this->detail_akun->get_data($ml->seller_id)[0];
                }
            }
        }

        $ekspansi_requests = $this->ekspansirequest->get_by_id($user_id);
        $ekspansi_komoditas = $this->commodities->get_data_by_user_id($user_id);

        $data = array(
            'title' => 'Ekspansi Bisnis',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'v_ekspansibisnis',
            'matchmaking_logs' => $matchmaking_logs,
            'ekspansi_komoditas' => $ekspansi_komoditas,
            'ekspansi_request' => $ekspansi_requests
        );
        // echo json_encode($data); die;

        $this->load->view('template/main',  $data);
    }
}
