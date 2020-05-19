<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->library('pdf');
        $this->load->model("surat_model");
    }
    function index($no_surat){
        $where = array('no_surat' => $no_surat);
        $data['surat_kp'] = $this->surat_model->get_data($where,'surat_kp')->result();
        $this->load->view('admin/cetakSurat',$data);
    }

}
