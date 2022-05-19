<?php defined('BASEPATH') or exit('No direct script access allowed');
class m_ekspansibisnis extends CI_ModeL
{
    var $table = 'clb';
    public function __construct()
    {
        $this->load->database();
    }
}
