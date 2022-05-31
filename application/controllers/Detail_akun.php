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

    public  function index($id)
    {
        $this->load->helper('form');
        $this->load->model('detail_akun_model');
        $data = array(
            'id' => $id,
            'title' => 'detail_akun',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'app' => 'detail_akun',

            'verif' => $this->detail_akun_model->get_data($id),
            'ekspor' => $this->detail_akun_model->get_ekspor($id),
            'kuantitas' => $this->detail_akun_model->get_kuantitas($id),
            'riwayat' => $this->detail_akun_model->get_riwayat($id),
            'officer' => $this->detail_akun_model->get_officer($id),
            'img_riwayat' => $this->detail_akun_model->get_img_riwayat($id),
            'img_kuantitas' => $this->detail_akun_model->get_img_kuantitas($id),

        );
        $this->load->view('template/main', $data);
    }

    public function update_nib($id)
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
            $this->detail_akun_model->update($data,$id);
        } else {
            $data = array(
                'nib' => $nib,
                'qyc_nib' => $this->input->post('qyc'),
            );
            $this->detail_akun_model->update($data,$id);
        }
        
        redirect(site_url('detail_akun/index/'.$id)); 
    }

    public function download_nib($id)
    {
        $img = $this->input->post('download');

        force_download('assets/foto/nib/'. $img , NULL);

        redirect(site_url('detail_akun/index/'.$id));
    }

    public function download_npwp($id)
    {
        $img = $this->input->post('download');

        force_download('assets/foto/npwp/'. $img , NULL);

        redirect(site_url('detail_akun/index/'.$id));
    }

    public function download_siup($id)
    {
        $img = $this->input->post('download');

        force_download('assets/foto/siup/'. $img , NULL);

        redirect(site_url('detail_akun/index/'.$id));
    }
    public function download_akta($id)
    {
        $img = $this->input->post('download');

        force_download('assets/foto/akta/'. $img , NULL);

        redirect(site_url('detail_akun/index/'.$id));
    }
    public function download_peb($id)
    {
        $img = $this->input->post('download');

        force_download('assets/foto/peb/'. $img , NULL);

        redirect(site_url('detail_akun/index/'.$id));
    }
    public function download_domisili($id)
    {
        $img = $this->input->post('download');

        force_download('assets/foto/domisili/'. $img , NULL);

        redirect(site_url('detail_akun/index/'.$id));
    }
    public function download_riwayat($id)
    {
        $img = $this->input->post('download');

        force_download('assets/foto/riwayat/'. $img , NULL);

        redirect(site_url('detail_akun/index/'.$id));
    }
    public function download_kuantitas($id)
    {
        $img = $this->input->post('download');

        force_download('assets/foto/kuantitas/'. $img , NULL);

        redirect(site_url('detail_akun/index/'.$id));
    }





    public function update_npwp($id)
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
            $this->detail_akun_model->update($data,$id);
        } else {
            $data = array(
                'npwp_perusahaan' => $npwp,
                'qyc_npwp' => $this->input->post('qyc'),
            );
            $this->detail_akun_model->update($data,$id);
        }

        redirect(site_url('detail_akun/index/'.$id));
    }

    public function update_siup($id)
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
            $this->detail_akun_model->update($data,$id);
        } else {
            $data = array(
                'no_siup' => $siup,
                'qyc_siup' => $this->input->post('qyc'),
            );
            $this->detail_akun_model->update($data,$id);
        }

        redirect(site_url('detail_akun/index/'.$id));
    }

    public function update_akta($id)
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
            $this->detail_akun_model->update($data,$id);
        } else {
            $data = array(
                'no_akta' => $akta,
                'qyc_akta' => $this->input->post('qyc'),
            );
            $this->detail_akun_model->update($data,$id);
        }

        redirect(site_url('detail_akun/index/'.$id));
    }

    public function update_peb($id)
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
            $this->detail_akun_model->update($data,$id);
        } else {
            $data = array(
                'no_peb' => $peb,
                'qyc_peb' => $this->input->post('qyc'),
            );
            $this->detail_akun_model->update($data,$id);
        }

        redirect(site_url('detail_akun/index/'.$id));
    }

    public function set_kuantitas($id)
    {
        
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
                'kd_data_diri' => $id,
                'unit' => $unit,

            );
            $this->detail_akun_model->set_kuantitas($data);
        } else {
            $data = array(
                'nama_komoditas' => $komoditas,
                'kuantitas' => $qty,
                'kestabilan_gradeone' => $kestabilan,
                'kd_data_diri' => $id,
                'unit' => $unit,

            );
            $this->detail_akun_model->set_kuantitas($data);
        }

        redirect(site_url('detail_akun/index/'.$id));
    }

    public function upd_kuantitas($id)
    {
        $komoditas = $this->input->post('nama');
        $qty = $this->input->post('qty');
        $kestabilan = $this->input->post('grade');
        $unit = $this->input->post('unit');
        $idk = $this->input->post('id_qty');

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
                'id_kuantitas' => $idk,
                'unit' => $unit,

            );
            $this->detail_akun_model->upd_kuantitas($data);
        } else {
            $data = array(
                'nama_komoditas' => $komoditas,
                'kuantitas' => $qty,
                'kestabilan_gradeone' => $kestabilan,
                'id_kuantitas' => $idk,
                'unit' => $unit,

            );
            $this->detail_akun_model->upd_kuantitas($data);
        }

        redirect(site_url('detail_akun/index/'.$id));
    }

    public function set_riwayat($id)
    {
        $id_usaha = $this->input->post('id_usaha');
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
                'kd_data_diri' => $id,
                
                

            );
            $this->detail_akun_model->set_riwayat($data,$id);
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
                'kd_data_diri' => $id

            );
            $this->detail_akun_model->set_riwayat($data,$id);
        }

        redirect(site_url('detail_akun/index/'.$id));
    }

    public function update_domisili($id)
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
            $this->detail_akun_model->update($data,$id);
        } else {
            $data = array(
                'domisili_perusahaan' => $domisili,
                'qyc_domisili' => $this->input->post('qyc'),
            );
            $this->detail_akun_model->update($data,$id);
        }

        redirect(site_url('detail_akun/index/'.$id));
    }

    public function set_officer($id)
    {
        $verif = null;
        $kd_diri = $id;
        $status = $this->input->post('status');
        if ($status=="verify") {
            $verif = "Verified";
        }else {
            $verif = "On Progress";
        }
        
        $data = array(
            'kd_data_diri' => $id,
            'negara' => $this->input->post('negara'),
            'kota' => $this->input->post('kota'),
            'nama' => $this->input->post('officer'),
            
        );
        $this->detail_akun_model->set_officer($data,$id);

        $data = array(
            'verified' => $verif,
        );
        $this->detail_akun_model->set_data_usaha($data,$kd_diri);

        $data = array(
            'verifikasi' => $verif,
        );
        $this->detail_akun_model->set_verif_data_diri($data,$kd_diri);

        redirect(site_url('detail_akun/index/'.$id));
    }

    public function set_riwayat_img($id)
    {
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
                'kd_data_diri' => $id,
            );
            $this->detail_akun_model->set_img_riwayat($data);
        }
        redirect(site_url('detail_akun/index/'.$id));
    }

    public function upd_riwayat_img($id)
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
            $this->detail_akun_model->upd_img_riwayat($data,$id);

            redirect(site_url('detail_akun/index/'.$id));
        }
    }

    public function set_kuantitas_img($id)
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
        redirect(site_url('detail_akun/index/'.$id));
    }

    public function excel_verif($id)
    {
        $data['verification'] = $this->detail_akun_model->get_data($id);

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

    public function excel_all($id)
    {

        $data['verification'] = $this->detail_akun_model->get_data($id);
        $data['riwayat'] = $this->detail_akun_model->get_ekspor($id);
        $data['kuantitas'] = $this->detail_akun_model->get_kuantitas($id);

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
