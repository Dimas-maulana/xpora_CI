<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_clbrecord extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_clbrecord', 'clb');
    }

    function index($id)
    {
        // echo $id; die;
        $data = array( 'id' => $id,
            'title' => 'Cek Level Bisnis',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'v_clbrecord',
            'clb' => $this->clb->all_data($id),
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

    public function excel_all($id)
    {
        $data['verification'] = $this->clb->all_data($id);

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("BNI Xpora");
        $object->getProperties()->setLastModifiedBy("BNI Xpora");
        $object->getProperties()->setTitle("CLB Record");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'CLB Record');
        $object->getActiveSheet()->setCellValue('A2', 'Attempt');
        $object->getActiveSheet()->setCellValue('B2', 'Tanggal');
        $object->getActiveSheet()->setCellValue('C2', 'Type Of Test');
        $object->getActiveSheet()->setCellValue('D2', 'Result');
        $object->getActiveSheet()->setCellValue('E2', 'Recomendation');
        $object->getActiveSheet()->setCellValue('F2', 'Follow Up Recomendation');

        $baris = 3;


        foreach ($data['verification'] as $verif) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $verif->attempt);
            $object->getActiveSheet()->setCellValue('B' . $baris, $verif->date);
            $object->getActiveSheet()->setCellValue('C' . $baris, $verif->type_of_rest);
            $object->getActiveSheet()->setCellValue('D' . $baris, $verif->result);
            $object->getActiveSheet()->setCellValue('E' . $baris, $verif->recomendation);
            $object->getActiveSheet()->setCellValue('F' . $baris, $verif->follow_up_recomendation);

            $baris++;
        }

        $filename = "Data CLB Record" . '.xls';

        $object->getActiveSheet()->setTitle("Data Akun");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');

        exit();
    }
}