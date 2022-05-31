<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

		$this->load->model('mapp'); 
        $this->load->helper("url");
    
    }

    function index()
    {
        // $data = array(
        //     'title' => 'Dashboard',
        //     'header' => 'template/header',
        //     'menu' => 'template/menu',
        //     'content' => 'template/content',
        //     'app' => 'dashboard'
        // );
        $month  = date('m');
		$monthlabel	= array();
		for($i=1; $i <= 12; $i++){
			$dt = DateTime::createFromFormat('!m', $i);
			array_push($monthlabel,"'".$dt->format('M')."'");
		}
        // print_r($monthlabel);

        $q_comodity     		= $this->mapp->getcomodity();
        $q_transaction			= $this->mapp->gettransaction();
        $q_last5transaction		= $this->mapp->getlast5transact();
        $q_openrekening         = $this->mapp->getopenrekening();
        $q_distinctjenisrek     = $this->mapp->distinct_jenisrek();
        $q_pinjam               = $this->mapp->getpinjam();
        $q_eksmatch             = $this->mapp->getselectall('ekspansi_matchmaking');
        $q_comodities           = $this->mapp->getselectall('ekspansi_comodities');
        $q_request              = $this->mapp->getselectall('ekspansi_request');
        // print_r($q_eksmatch);

        $arvalue_komodity       = array();
        $arvalue_komodity2      = array();
        $arvalue_transaction	= array();
        $arvalue_pinjam			= array();
        $arvalue_rekening       = array();
        $arvalue_dist_jenisrek  = array();
        $arvalue_pinjam         = array();
        $arvalue_pinjam2        = array();
        $arvalue_polar          = array();
        $arvalue_polarlabel     = array();
        $arvalue_polarcolor     = array();
        $arcolor_rek            = array();
        $arcolor_jenisrek       = array();
        for ($i=0; $i < 12; $i++) { 
            $stat       = 0;
            $value      = 0;
            $value2      = 0;
            foreach($q_comodity as $data){
                if(intval($data['bulan']) == intval(($i+1))){
                    $value = $value + $data['jumlah_pengajuan'];
                    $value2++;
                }
            }
            array_push($arvalue_komodity, $value);
            array_push($arvalue_komodity2, $value2);
        }
        //echo json_encode($q_comodity); die;

		for ($i=0; $i < 12; $i++) { 
            $stat       = 0;
            $value      = 0;
            foreach($q_transaction as $data){
                if(intval($data['bulan']) == intval(($i+1))){
                    $value = $value + $data['profit'];
                }
            }
            array_push($arvalue_transaction, $value);
        }

		// for ($i=0; $i < 12; $i++) { 
        foreach($q_distinctjenisrek as $data0){
            $stat_a1        = 0;
            $valtemp_a1     = 0;
            foreach($q_openrekening as $data){
                if($data['jenis_rek'] == $data0['jenis_rek']){
                    $stat_a1 = 1;
                    $valtemp_a1     += $data['profit'];
                }
            }
            array_push($arvalue_rekening, $valtemp_a1);
            array_push($arvalue_dist_jenisrek, "'".$data0['jenis_rek']."'");
            if($data0['jenis_rek'] == 'Giro'){
                array_push($arcolor_jenisrek, "'#16676e'");
            }else{
                array_push($arcolor_jenisrek, "'#d88f1a'");
            }
        }

		for ($i=0; $i < 12; $i++) { 
            $stat_a1        = 0;
            $valtemp_a1     = 0;
            $valtemp_a2     = 0;
            foreach ($q_pinjam as $data) {
                if(intval($data['bulan']) == intval(($i+1))){
                    $stat_a1 = 1;
                    $valtemp_a1 += $data['profit'];
                    $valtemp_a2++;
                }
            }
            array_push($arvalue_pinjam, $valtemp_a1);
            array_push($arvalue_pinjam2, $valtemp_a2);
        }

        $count                      = $this->mapp->countdrct();

        array_push($arvalue_polar, count($q_eksmatch), count($q_comodities), count($q_request));
        array_push($arvalue_polarlabel, "'Matchmaking'", "'Comodities'", "'Request'");
        array_push($arvalue_polarcolor, "'#16676e'", "'#d88f1a'", "'#36b9cc'");
        //echo json_encode($arvalue_polar); die;
        // }

        // foreach($q_distinctjenisrek as $data){
        // }

        // print_r($arvalue_polar);


        $data = [
            'title' => 'Dashboard',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'app' => 'dashboard',
            'graph_komodity'        => $arvalue_komodity,
            'graph_komodity2'       => $arvalue_komodity2,
            'graph_transaction'     => $arvalue_transaction,
            'graph_rekening'        => $arvalue_rekening,
            'graph_dsit_jenisrek'   => $arvalue_dist_jenisrek,
            'graph_pinjam'          => $arvalue_pinjam,
            'graph_pinjam2'         => $arvalue_pinjam2,
            'graph_polar'           => $arvalue_polar,
            'label_polar'           => $arvalue_polarlabel,
            'color_polar'           => $arvalue_polarcolor,
            'monthlabel'            => $monthlabel,
            'last5'            		=> $q_last5transaction,
            'schema_rekening'       => $q_openrekening,
            'schema_pinjam'         => $q_pinjam,
            'schema_komodity'       => $q_comodity,
            'schema_transaksi'      => $q_transaction,
            'count'                 => $count,
            'color_jenisrek'        => $arcolor_jenisrek,
            'eksmatch'              => $q_eksmatch,
            'request'               => $q_request,
            'comodities'            => $q_comodities,
        ];
        //echo json_encode($arvalue_komodity); die;
        //$this->load->view('templates/wrapper', $data);
        $this->load->view('template/main', $data);
    }
}
