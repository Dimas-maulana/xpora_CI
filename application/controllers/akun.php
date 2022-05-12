<?php

defined('BASEPATH') or exit('No direct script access allowed');

class akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('akun_model', 'akun');
        $this->load->helper(array('form', 'url', 'file'));
    }

    function index()
    {
        $data = array(
            'title' => 'Form Akun',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'akun',
            'akun' => $this->akun->all_data(),
        );
        $this->load->view('template/main', $data);
    }

    function diaspora()
    {
        $data = array(
            'title' => 'Form Diaspora',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'akun',
            'akun' => $this->akun->diaspora(),
        );
        $this->load->view('template/main', $data);
    }

    function indirect_exportir()
    {
        $data = array(
            'title' => 'Form Indirect Exportir',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'akun',
            'akun' => $this->akun->indirect_exportir(),
        );
        $this->load->view('template/main', $data);
    }

    function direct_exportir()
    {
        $data = array(
            'title' => 'Form Direct Exportir',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'akun',
            'akun' => $this->akun->direct_exportir(),
        );
        $this->load->view('template/main', $data);
    }

    function buyer()
    {
        $data = array(
            'title' => 'Form Buyer',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'akun',
            'akun' => $this->akun->buyer(),
        );
        $this->load->view('template/main', $data);
    }

    function create_akun()
    {
        $data = array(
            'title' => 'Form Create Akun',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'app' => 'create_akun',
            'action' => site_url('akun/save'),
            'kode' => $this->akun->buatkode(),
        );
        $this->load->view('template/main', $data);
    }

    function save()
    {
        $kode = $this->input->post('kd_data_diri');
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['file_name'] = $kode . "_";
        $config['overwrite'] = false;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('userfiles')) {
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
            $data = array(
                'kd_data_diri' => $kode,
                'nama_pemilik' => $this->input->post('nama_pemilik'),
                'nik' => $this->input->post('nik'),
                'npwp' => $this->input->post('npwp'),
                'no_telp' => $this->input->post('no_telp'),
                'email' => $this->input->post('email'),
                'domisili' => $this->input->post('domisili'),
                'foto' => $filename,
                'user_type' => $this->input->post('user_type'),
                'verifikasi' => "Verification",
                'date_create' => date('Y-m-d')
            );
            $this->akun->save_diri($data);

            $dataa = array(
                'nib' => $this->input->post('nib'),
                'nama_usaha' => $this->input->post('nama_usaha'),
                'domisili_perusahaan' => $this->input->post('domisili_perusahaan'),
                'email_perusahaan' => $this->input->post('email_perusahaan'),
                'website' => $this->input->post('website'),
                'bidang_usaha' => $this->input->post('bidang_usaha'),
                'komoditi_usaha' => $this->input->post('komoditi_usaha'),
                'skala' => $this->input->post('skala'),
                'satuan' => $this->input->post('satuan'),
                'npwp_perusahaan' => $this->input->post('npwp_perusahaan'),
                'no_siup' => $this->input->post('no_siup'),
                'no_peb' => $this->input->post('no_peb'),
                'no_akta' => $this->input->post('no_akta'),
                'kd_data_diri' => $this->input->post('kd_data_diri'),
            );
            $this->akun->save_usaha($dataa);
            redirect(site_url('akun'));
        } else {
            echo '
            <script>
                window.alert(' . $this->upload->display_errors() . ');
                window.location=("' . site_url('akun/create_akun') . '");
            </script>';
        }
    }

    function detail_akun($id)
    {
        $data = array(
            'title' => 'Form Detail Akun',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'app' => 'detail_account',
            'row' => $this->akun->get_by_id(urldecode($id)),
        );
        $this->load->view('template/main', $data);
    }

    function delete_akun($delete)
    {
        $this->akun->delete_by_id(urldecode($delete));
        redirect(site_url('akun'));
    }
}
