<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratKp extends CI_Controller {
function __construct() {
    parent::__construct();
    $this->load->library('pdf');
}
public function index()
    {
        $this->load->view("admin/suratkp");   
    }
}
