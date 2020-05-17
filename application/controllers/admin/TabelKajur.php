<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelKajur extends CI_Controller {
public function index()
    {
        $this->load->view("admin/data_pegawai/tampil_kajur");   
    }
}
    