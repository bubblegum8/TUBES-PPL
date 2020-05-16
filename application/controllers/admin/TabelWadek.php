<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelWadek extends CI_Controller {
public function index()
    {
        $this->load->view("admin/data_pegawai/tampil_wadek");   
    }
}
    