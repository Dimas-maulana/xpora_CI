<?php

defined('BASEPATH') or exit('No direct script access allowed');

require 'vendor/autoload.php';

use phpDocumentor\Reflection\Types\Integer;
use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class detail_akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'download'));
        $this->load->model('detail_akun_model');
    }

    public  function index()
    {
        $this->load->helper('form');
        $this->load->model('detail_akun_model');
        $data = array(
            'title' => 'detail_akun',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'app' => 'detail_akun',
            'akun' => $this->detail_akun_model->get_akun(),
            'verif' => $this->detail_akun_model->get_data(),
            'ekspor' => $this->detail_akun_model->get_ekspor(),
            'kuantitas' => $this->detail_akun_model->get_kuantitas(),
            'officer' => $this->detail_akun_model->get_officer(),
            'img_riwayat' => $this->detail_akun_model->get_img_riwayat(),
            'img_kuantitas' => $this->detail_akun_model->get_img_kuantitas(),
        );
        $this->load->view('template/main', $data);
    }

    public function update_nib()
    {

        $nib = $this->input->post('nib');
        $config['upload_path'] = './assets/foto/nib';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['file_name'] = $nib . "_";
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
            $data = array(
                'nib' => $nib,
                'qyc_nib' => $this->input->post('qyc'),
                'foto_nib' => $filename,
            );
            $this->detail_akun_model->update($data);
        } else {
            $data = array(
                'nib' => $nib,
                'qyc_nib' => $this->input->post('qyc'),
            );
            $this->detail_akun_model->update($data);
        }

        redirect('detail_akun/index');
    }

    public function download_nib()
    {
        $img = $this->input->post('download');

        force_download('assets/foto/nib/'. $img , NULL);

        redirect('detail_akun/index');
    }

    public function download_npwp()
    {
        $img = $this->input->post('download');

        force_download('assets/foto/npwp/'. $img , NULL);

        redirect('detail_akun/index');
    }

    public function download_siup()
    {
        $img = $this->input->post('download');

        force_download('assets/foto/siup/'. $img , NULL);

        redirect('detail_akun/index');
    }
    public function download_akta()
    {
        $img = $this->input->post('download');

        force_download('assets/foto/akta/'. $img , NULL);

        redirect('detail_akun/index');
    }
    public function download_peb()
    {
        $img = $this->input->post('download');

        force_download('assets/foto/peb/'. $img , NULL);

        redirect('detail_akun/index');
    }
    public function download_domisili()
    {
        $img = $this->input->post('download');

        force_download('assets/foto/domisili/'. $img , NULL);

        redirect('detail_akun/index');
    }
    public function download_riwayat()
    {
        $img = $this->input->post('download');

        force_download('assets/foto/riwayat/'. $img , NULL);

        redirect('detail_akun/index');
    }
    public function download_kuantitas()
    {
        $img = $this->input->post('download');

        force_download('assets/foto/kuantitas/'. $img , NULL);

        redirect('detail_akun/index');
    }





    public function update_npwp()
    {

        $npwp = $this->input->post('npwp');
        $config['upload_path'] = './assets/foto/npwp';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['file_name'] = $npwp . "_";
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
            $data = array(
                'npwp_perusahaan' => $npwp,
                'qyc_npwp' => $this->input->post('qyc'),
                'foto_npwp' => $filename,
            );
            $this->detail_akun_model->update($data);
        } else {
            $data = array(
                'npwp_perusahaan' => $npwp,
                'qyc_npwp' => $this->input->post('qyc'),
            );
            $this->detail_akun_model->update($data);
        }

        redirect('detail_akun/index');
    }

    public function update_siup()
    {

        $siup = $this->input->post('siup');
        $config['upload_path'] = './assets/foto/siup';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['file_name'] = $siup . "_";
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
            $data = array(
                'no_siup' => $siup,
                'qyc_siup' => $this->input->post('qyc'),
                'foto_siup' => $filename,
            );
            $this->detail_akun_model->update($data);
        } else {
            $data = array(
                'no_siup' => $siup,
                'qyc_siup' => $this->input->post('qyc'),
            );
            $this->detail_akun_model->update($data);
        }

        redirect('detail_akun/index');
    }

    public function update_akta()
    {

        $akta = $this->input->post('akta');
        $config['upload_path'] = './assets/foto/akta';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['file_name'] = $akta . "_";
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
            $data = array(
                'no_akta' => $akta,
                'qyc_akta' => $this->input->post('qyc'),
                'foto_akta' => $filename,
            );
            $this->detail_akun_model->update($data);
        } else {
            $data = array(
                'no_akta' => $akta,
                'qyc_akta' => $this->input->post('qyc'),
            );
            $this->detail_akun_model->update($data);
        }

        redirect('detail_akun/index');
    }

    public function update_peb()
    {

        $peb = $this->input->post('peb');
        $config['upload_path'] = './assets/foto/peb';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['file_name'] = $peb . "_";
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
            $data = array(
                'no_peb' => $peb,
                'qyc_peb' => $this->input->post('qyc'),
                'foto_peb' => $filename,
            );
            $this->detail_akun_model->update($data);
        } else {
            $data = array(
                'no_peb' => $peb,
                'qyc_peb' => $this->input->post('qyc'),
            );
            $this->detail_akun_model->update($data);
        }

        redirect('detail_akun/index');
    }

    public function set_kuantitas()
    {
        $id = 1;
        $komoditas = $this->input->post('nama');
        $qty = $this->input->post('qty');
        $kestabilan = $this->input->post('grade');
        $unit = $this->input->post('unit');

        $config['upload_path'] = './assets/foto/kuantitas';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['file_name'] = $komoditas . "_";
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('img')) {
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
            $data = array(
                'nama_komoditas' => $komoditas,
                'kuantitas' => $qty,
                'kestabilan_gradeone' => $kestabilan,
                'foto_gradeone' => $filename,
                'id_usaha' => $id,
                'unit' => $unit,

            );
            $this->detail_akun_model->set_kuantitas($data);
        } else {
            $data = array(
                'nama_komoditas' => $komoditas,
                'kuantitas' => $qty,
                'kestabilan_gradeone' => $kestabilan,
                'id_usaha' => $id,
                'unit' => $unit,

            );
            $this->detail_akun_model->set_kuantitas($data);
        }

        redirect('detail_akun/index');
    }

    public function upd_kuantitas()
    {
        $komoditas = $this->input->post('nama');
        $qty = $this->input->post('qty');
        $kestabilan = $this->input->post('grade');
        $unit = $this->input->post('unit');
        $id = $this->input->post('id_qty');

        $config['upload_path'] = './assets/foto/kuantitas';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['file_name'] = $komoditas . "_";
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('img')) {
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
            $data = array(
                'nama_komoditas' => $komoditas,
                'kuantitas' => $qty,
                'kestabilan_gradeone' => $kestabilan,
                'foto_gradeone' => $filename,
                'id_kuantitas' => $id,
                'unit' => $unit,

            );
            $this->detail_akun_model->upd_kuantitas($data);
        } else {
            $data = array(
                'nama_komoditas' => $komoditas,
                'kuantitas' => $qty,
                'kestabilan_gradeone' => $kestabilan,
                'id_kuantitas' => $id,
                'unit' => $unit,

            );
            $this->detail_akun_model->upd_kuantitas($data);
        }

        redirect('detail_akun/index');
    }

    public function set_riwayat()
    {
        $id = 1;
        $komoditas = $this->input->post('komoditas');
        $qty = $this->input->post('qty');
        $incoterm = $this->input->post('incoterm');
        $tujuan = $this->input->post('tujuan');
        $frekuensi = $this->input->post('frekuensi');
        $shipment = $this->input->post('shipment');
        $amount = $this->input->post('amount');

        $config['upload_path'] = './assets/foto/riwayat';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['file_name'] = $komoditas . "_";
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('proof_satu')) {
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
            $data = array(
                'komoditas' => $komoditas,
                'qty' => $qty,
                'frekuensi' => $frekuensi,
                'incoterm' => $incoterm,
                'shipment' => $shipment,
                'amount' => $amount,
                'incoterm' => $incoterm,
                'negara_tujuan' => $tujuan,
                'id_usaha' => $id
            );
            $this->detail_akun_model->set_riwayat($data);
        } else {
            $data = array(
                'komoditas' => $komoditas,
                'qty' => $qty,
                'frekuensi' => $frekuensi,
                'incoterm' => $incoterm,
                'shipment' => $shipment,
                'amount' => $amount,
                'incoterm' => $incoterm,
                'negara_tujuan' => $tujuan,
                'id_usaha' => $id

            );
            $this->detail_akun_model->set_riwayat($data);
        }

        redirect('detail_akun/index');
    }

    public function update_domisili()
    {
        $domisili = $this->input->post('domisili');
        $config['upload_path'] = './assets/foto/domisili';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['file_name'] = $domisili . "_";
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
            $data = array(
                'domisili_perusahaan' => $domisili,
                'qyc_domisili' => $this->input->post('qyc'),
                'foto_domisili' => $filename,
            );
            $this->detail_akun_model->update($data);
        } else {
            $data = array(
                'domisili' => $domisili,
                'qyc_domisili' => $this->input->post('qyc'),
            );
            $this->detail_akun_model->update($data);
        }

        redirect('detail_akun/index');
    }

    public function set_officer()
    {
        $data = array(
            'negara' => $this->input->post('negara'),
            'kota' => $this->input->post('kota'),
            'nama' => $this->input->post('officer'),
            'id_usaha' => 1
        );
        $this->detail_akun_model->set_officer($data);

        $data = array(
            'verified' => 1,
        );
        $this->detail_akun_model->set_data_usaha($data);

        redirect('detail_akun/index');
    }

    public function set_riwayat_img()
    {
        $id_usaha = 1;
        $val = $this->input->post('val');
        $config['upload_path'] = './assets/foto/riwayat';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['file_name'] = 'img' . $val;
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('img')) {
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
            $data = array(
                'image' => $filename,
                'id_riwayat' => $val,
                'id_usaha' => $id_usaha,
            );
            $this->detail_akun_model->set_img_riwayat($data);
        }
        redirect('detail_akun/index');
    }

    public function upd_riwayat_img()
    {

        $id_riwayatimg = $this->input->post('val');
        $config['upload_path'] = './assets/foto/riwayat';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['file_name'] = $id_riwayatimg . "_";
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('img')) {
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
            $data = array(
                'id_riwayat_image' => $id_riwayatimg,
                'image' => $filename,
            );
            $this->detail_akun_model->upd_img_riwayat($data);

            redirect('detail_akun/index');
        }
    }

    public function set_kuantitas_img()
    {
        $id_usaha = 1;
        $val = $this->input->post('val');
        $config['upload_path'] = './assets/foto/kuantitas';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['file_name'] = 'img' . $val;
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('img')) {
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
            $data = array(
                'image' => $filename,
                'id_kuantitas' => $val,
                'id_usaha' => $id_usaha,
            );
            $this->detail_akun_model->set_img_kuantitas($data);
        }
        redirect('detail_akun/index');
    }

    public function excel_verif()
    {
        $data['verification'] = $this->detail_akun_model->get_data();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("BNI Xpora");
        $object->getProperties()->setLastModifiedBy("BNI Xpora");
        $object->getProperties()->setTitle("Verification Data");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'Verifikasi Legalitas');
        $object->getActiveSheet()->setCellValue('A2', 'NIB');
        $object->getActiveSheet()->setCellValue('B2', 'NPWP');
        $object->getActiveSheet()->setCellValue('C2', 'No. SIUP');
        $object->getActiveSheet()->setCellValue('D2', 'No. PEB');
        $object->getActiveSheet()->setCellValue('E2', 'No. Akta');
        $object->getActiveSheet()->setCellValue('F2', 'Alamat');

        $baris = 3;

        foreach ($data['verification'] as $verif) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $verif['nib']);
            $object->getActiveSheet()->setCellValue('B' . $baris, $verif['npwp_perusahaan']);
            $object->getActiveSheet()->setCellValue('C' . $baris, $verif['no_siup']);
            $object->getActiveSheet()->setCellValue('D' . $baris, $verif['no_peb']);
            $object->getActiveSheet()->setCellValue('E' . $baris, $verif['no_akta']);
            $object->getActiveSheet()->setCellValue('F' . $baris, $verif['domisili']);

            $baris++;
        }

        $filename = "Data Verifikasi" . '.xls';

        $object->getActiveSheet()->setTitle("Data Akun");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');

        exit();
    }

    public function excel_all()
    {
        $data['verification'] = $this->detail_akun_model->get_data();
        $data['riwayat'] = $this->detail_akun_model->get_ekspor();
        $data['kuantitas'] = $this->detail_akun_model->get_kuantitas();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("BNI Xpora");
        $object->getProperties()->setLastModifiedBy("BNI Xpora");
        $object->getProperties()->setTitle("Verification Data");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'Verifikasi Legalitas');
        $object->getActiveSheet()->setCellValue('A2', 'NIB');
        $object->getActiveSheet()->setCellValue('B2', 'NPWP');
        $object->getActiveSheet()->setCellValue('C2', 'No. SIUP');
        $object->getActiveSheet()->setCellValue('D2', 'No. PEB');
        $object->getActiveSheet()->setCellValue('E2', 'No. Akta');
        $object->getActiveSheet()->setCellValue('F2', 'Alamat');

        $baris = 3;


        foreach ($data['verification'] as $verif) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $verif['nib']);
            $object->getActiveSheet()->setCellValue('B' . $baris, $verif['npwp_perusahaan']);
            $object->getActiveSheet()->setCellValue('C' . $baris, $verif['no_siup']);
            $object->getActiveSheet()->setCellValue('D' . $baris, $verif['no_peb']);
            $object->getActiveSheet()->setCellValue('E' . $baris, $verif['no_akta']);
            $object->getActiveSheet()->setCellValue('F' . $baris, $verif['domisili']);

            $object->getActiveSheet()->setCellValue('A4', 'Riwayat Ekspor');
            $object->getActiveSheet()->setCellValue('A5', 'Komoditas');
            $object->getActiveSheet()->setCellValue('B5', 'QTY');
            $object->getActiveSheet()->setCellValue('C5', 'Frekuensi');
            $object->getActiveSheet()->setCellValue('D5', 'Incoterm');
            $object->getActiveSheet()->setCellValue('E5', 'Shipment');
            $object->getActiveSheet()->setCellValue('F5', 'Amount');
            $object->getActiveSheet()->setCellValue('G5', 'Negara Tujuan');

            $baris++;
        }


        $baris_ekspor = 6;
        foreach ($data['riwayat'] as $ekspor) {
            $object->getActiveSheet()->setCellValue('A' . $baris_ekspor, $ekspor['komoditas']);
            $object->getActiveSheet()->setCellValue('B' . $baris_ekspor, $ekspor['qty']);
            $object->getActiveSheet()->setCellValue('C' . $baris_ekspor, $ekspor['frekuensi']);
            $object->getActiveSheet()->setCellValue('D' . $baris_ekspor, $ekspor['incoterm']);
            $object->getActiveSheet()->setCellValue('E' . $baris_ekspor, $ekspor['shipment']);
            $object->getActiveSheet()->setCellValue('F' . $baris_ekspor, $ekspor['amount']);
            $object->getActiveSheet()->setCellValue('G' . $baris_ekspor, $ekspor['negara_tujuan']);
            $baris_ekspor++;
            $baris_qty = $baris_ekspor + 1;
        }

        $object->getActiveSheet()->setCellValue('A'. $baris_qty, 'Kuantitas');
        $baris_qty++;
        $object->getActiveSheet()->setCellValue('A'. $baris_qty, 'Komoditas');
        $object->getActiveSheet()->setCellValue('B'. $baris_qty, 'QTY');
        $object->getActiveSheet()->setCellValue('C'. $baris_qty, 'Unit');
        $object->getActiveSheet()->setCellValue('D'. $baris_qty, 'Grade');

        $baris_qty++;

        foreach ($data['kuantitas'] as $qty) {
            $object->getActiveSheet()->setCellValue('A' . $baris_qty, $qty['nama_komoditas']);
            $object->getActiveSheet()->setCellValue('B' . $baris_qty, $qty['kuantitas']);
            $object->getActiveSheet()->setCellValue('C' . $baris_qty, $qty['unit']);
            $object->getActiveSheet()->setCellValue('D' . $baris_qty, $qty['kestabilan_gradeone']);

            $baris_qty++;
        }




        $filename = "Data Verifikasi" . '.xls';

        $object->getActiveSheet()->setTitle("Data Akun");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');

        exit();
    }
}
