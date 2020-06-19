<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
        //cek session dan level user
        if($this->admin->is_role() != "user"){
            redirect("login/");
        }
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

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}