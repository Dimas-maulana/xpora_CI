<?php

defined('BASEPATH') or exit('No direct script access allowed');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class inspirasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('inspirasi_model');
    }

    public function cari()
    {
        if (!empty($this->input->post('id_inspirasi'))) {
            $id_inspirasi = $this->input->post('id_inspirasi');
            $data = array(
                'title' => 'inspirasi',
                'header' => 'template/header',
                'menu' => 'template/menu',
                'content' => 'template/content',
                'footer' => 'template/footer',
                'app' => 'inspirasi',
                'inspirasi' => $this->inspirasi_model->cari($id_inspirasi),
            );
            $this->session->set_userdata('cari', $id_inspirasi);
            $this->load->view('template/main', $data);
        } else if (!empty($this->input->post('nama_kelas'))) {
            $nama_kelas = $this->input->post('nama_kelas');
            $data = array(
                'title' => 'inspirasi',
                'header' => 'template/header',
                'menu' => 'template/menu',
                'content' => 'template/content',
                'footer' => 'template/footer',
                'app' => 'inspirasi',
                'inspirasi' => $this->inspirasi_model->cari($nama_kelas),
            );
            $this->session->set_userdata('cari', $nama_kelas);
            $this->load->view('template/main', $data);
        } else if (!empty($this->input->post('kategory'))) {
            $kategory = $this->input->post('kategory');
            $data = array(
                'title' => 'inspirasi',
                'header' => 'template/header',
                'menu' => 'template/menu',
                'content' => 'template/content',
                'footer' => 'template/footer',
                'app' => 'inspirasi',
                'inspirasi' => $this->inspirasi_model->cari($kategory),
            );
            $this->load->view('template/main', $data);
        } else if (!empty($this->input->post('level'))) {
            $level = $this->input->post('level');
            $data = array(
                'title' => 'inspirasi',
                'header' => 'template/header',
                'menu' => 'template/menu',
                'content' => 'template/content',
                'footer' => 'template/footer',
                'app' => 'inspirasi',
                'inspirasi' => $this->inspirasi_model->cari($level),
            );
            $this->session->set_userdata('cari', $level);
            $this->load->view('template/main', $data);
        } else if (!empty($this->input->post('start_date'))) {
            $start_date = $this->input->post('start_date');
            $data = array(
                'title' => 'inspirasi',
                'header' => 'template/header',
                'menu' => 'template/menu',
                'content' => 'template/content',
                'footer' => 'template/footer',
                'app' => 'inspirasi',
                'inspirasi' => $this->inspirasi_model->cari($start_date),
            );
            $this->session->set_userdata('cari', $start_date);
            $this->load->view('template/main', $data);
        } else if (!empty($this->input->post('progres'))) {
            $progres = $this->input->post('progres');
            $data = array(
                'title' => 'inspirasi',
                'header' => 'template/header',
                'menu' => 'template/menu',
                'content' => 'template/content',
                'footer' => 'template/footer',
                'app' => 'inspirasi',
                'inspirasi' => $this->inspirasi_model->cari($progres),
            );
            $this->session->set_userdata('cari', $progres);
            $this->load->view('template/main', $data);
        } else if (!empty($this->input->post('finish_date'))) {
            $finish_date = $this->input->post('finish_date');
            $data = array(
                'title' => 'inspirasi',
                'header' => 'template/header',
                'menu' => 'template/menu',
                'content' => 'template/content',
                'footer' => 'template/footer',
                'app' => 'inspirasi',
                'inspirasi' => $this->inspirasi_model->cari($finish_date),
            );
            $this->session->set_userdata('cari', $finish_date);
            $this->load->view('template/main', $data);
        }
    }

    public function excel_verif()
    {
        $data['verification'] = $this->inspirasi_model->get_data_all();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("BNI Xpora");
        $object->getProperties()->setLastModifiedBy("BNI Xpora");
        $object->getProperties()->setTitle("Inspirasi Data");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'INSPIRASI');
        $object->getActiveSheet()->setCellValue('A2', 'ID');
        $object->getActiveSheet()->setCellValue('B2', 'Kelas');
        $object->getActiveSheet()->setCellValue('C2', 'Kategori');
        $object->getActiveSheet()->setCellValue('D2', 'Level');
        $object->getActiveSheet()->setCellValue('E2', 'Progress');
        $object->getActiveSheet()->setCellValue('F2', 'Start Date');
        $object->getActiveSheet()->setCellValue('G2', 'Finish Date');

        $baris = 3;

        foreach ($data['verification'] as $verif) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $verif['id_inspirasi']);
            $object->getActiveSheet()->setCellValue('B' . $baris, $verif['nama_kelas']);
            $object->getActiveSheet()->setCellValue('C' . $baris, $verif['kategory']);
            $object->getActiveSheet()->setCellValue('D' . $baris, $verif['level']);
            $object->getActiveSheet()->setCellValue('E' . $baris, $verif['progres']);
            $object->getActiveSheet()->setCellValue('F' . $baris, $verif['start_date']);
            $object->getActiveSheet()->setCellValue('G' . $baris, $verif['finish_date']);

            $baris++;
        }

        $filename = "Data Inspirasi" . '.xls';

        $object->getActiveSheet()->setTitle("Data Inspirasi");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');

        exit();
    }

    
    function index($id)
    {
        //konfigurasi pagination
        $config['base_url'] = site_url('inspirasi'); //site url
        $config['total_rows'] = $this->db->count_all('inspirasi'); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;


        $data = array(
            'id' => $id,
            'title' => 'inspirasi',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'inspirasi',
            'inspirasi' => $this->inspirasi_model->get_data($config["per_page"], $data['page'],$id),
        );
        $this->load->view('template/main', $data);
    }
}
