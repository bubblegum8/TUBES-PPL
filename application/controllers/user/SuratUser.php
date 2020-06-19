<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratUser extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model("surat_model");
    }

    public function index()
    {
        $dariDB = $this->surat_model->ceknosurat();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut =(int) substr($dariDB, 3, 4);
        $noSuratSekarang = $nourut + 1;
        $data = array('no_surat' => $noSuratSekarang);
        $this->load->view("user/suratuser",$data);            

    }

    

}