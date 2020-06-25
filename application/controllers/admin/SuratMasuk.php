<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratMasuk extends CI_Controller {
public function index()
    {
        $this->load->view("admin/suratmasuk");   
    }
}
    