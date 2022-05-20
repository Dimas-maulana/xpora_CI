<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ekspansirequest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ekspansirequest_m', 'ekspansirequest');
    }

    function index()
    {
        $data = array(
            'title' => 'Ekspansi bisnis Request',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'ekspansirequest',
            'ekspansirequest' => $this->ekspansirequest->all_data(),
        );
        $this->load->view('template/main', $data);
    }

    function approved($id)
    {
        $data = array(
            'status' => $this->input->post('approve')
        );
        $this->ekspansirequest->update('ekspansi_request', $data, array('request_post_id' => $id));

        echo '
		<script>
			window.alert("Data berhasil diubah !");
			window.location=("' . site_url('ekspansirequest') . '");
		</script>';
    }

    function draft()
    {
        $data = array(
            'title' => 'Form Draft',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'ekspansirequest',
            'ekspansirequest' => $this->ekspansirequest->draft(),
        );
        $this->load->view('template/main', $data);
    }

    function waiting_for_approval()
    {
        $data = array(
            'title' => 'Form Waiting for approval',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'ekspansirequest',
            'ekspansirequest' => $this->ekspansirequest->waiting_for_approval(),
        );
        $this->load->view('template/main', $data);
    }

    function posted()
    {
        $data = array(
            'title' => 'Form Posted',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'ekspansirequest',
            'ekspansirequest' => $this->ekspansirequest->posted(),
        );
        $this->load->view('template/main', $data);
    }

    function unposted()
    {
        $data = array(
            'title' => 'Form Unposted',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'ekspansirequest',
            'ekspansirequest' => $this->ekspansirequest->unposted(),
        );
        $this->load->view('template/main', $data);
    }
}
