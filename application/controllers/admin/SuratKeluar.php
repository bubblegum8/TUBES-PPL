<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratKeluar extends CI_Controller {
public function index()
    {
        $this->load->view("admin/suratkeluar");   
    }
}
    