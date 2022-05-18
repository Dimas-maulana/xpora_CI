<?php

class produk_bni extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'download'));
        $this->load->model('produk_bni_model');
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
            'app' => 'produk_bni',
            'produk' => $this->produk_bni_model->get_all_produk(),
        );
        $this->load->view('template/main', $data);
    }

    public function update_produk()
    {

        $tabungan_bisnis = $this->input->post('tabungan_bisnis');
        $no_rek = $this->input->post('no_rek');
        $lc = $this->input->post('lc');
        $cif = $this->input->post('cif');

        $config['upload_path'] = './assets/foto/produk';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['file_name'] = $tabungan_bisnis . "_";
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
            $data = array(
                'jenis_rek' => $tabungan_bisnis,
                'no_rek' => $no_rek,
                'lc' => $lc,
                'cif' => $cif,
                'foto' => $filename,
            );
            $this->produk_bni_model->update_produk($data);
        } else {
            $data = array(
                'jenis_rek' => $tabungan_bisnis,
                'no_rek' => $no_rek,
                'lc' => $lc,
                'cif' => $cif,
            );
            $this->produk_bni_model->update_produk($data);
        }

        redirect('produk_bni/index');
    }

    public function set_produk()
    {
        $tabungan_bisnis = $this->input->post('tabungan_bisnis');
        $no_rek = $this->input->post('no_rek');
        $lc = $this->input->post('lc');
        $cif = $this->input->post('cif');

        $config['upload_path'] = './assets/foto/produk';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 5000;
        $config['file_name'] = $tabungan_bisnis . "_";
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
            $data = array(
                'jenis_rek' => $tabungan_bisnis,
                'no_rek' => $no_rek,
                'lc' => $lc,
                'cif' => $cif,
                'foto' => $filename,
            );
            $this->produk_bni_model->set_produk($data);
        } else {
            $data = array(
                'jenis_rek' => $tabungan_bisnis,
                'no_rek' => $no_rek,
                'lc' => $lc,
                'cif' => $cif,
            );
            $this->produk_bni_model->set_produk($data);
        }

        redirect('produk_bni/index');
    }

    public function download()
    {
        $img = $this->input->post('download');

        force_download('assets/foto/produk/'. $img , NULL);

        redirect('produk_bni/index');
    }

    public function excel_verif()
    {
        $data['verification'] = $this->produk_bni_model->get_all_produk();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("BNI Xpora");
        $object->getProperties()->setLastModifiedBy("BNI Xpora");
        $object->getProperties()->setTitle("Product Data");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'PRODUK BNI');
        $object->getActiveSheet()->setCellValue('A2', 'ID');
        $object->getActiveSheet()->setCellValue('B2', 'Nomor Rekening');
        $object->getActiveSheet()->setCellValue('C2', 'Nama Nasabah');
        $object->getActiveSheet()->setCellValue('D2', 'Jenis Rekening');
        $object->getActiveSheet()->setCellValue('E2', 'CIF');

        $baris = 3;

        foreach ($data['verification'] as $verif) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $verif['id_pembuatan']);
            $object->getActiveSheet()->setCellValue('B' . $baris, $verif['no_rek']);
            $object->getActiveSheet()->setCellValue('C' . $baris, $verif['nama_nasabah']);
            $object->getActiveSheet()->setCellValue('D' . $baris, $verif['jenis_rek']);
            $object->getActiveSheet()->setCellValue('E' . $baris, $verif['cif']);

            $baris++;
        }

        $filename = "Data Produk" . '.xls';

        $object->getActiveSheet()->setTitle("Data Produk BNI");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');

        exit();
    }
}
