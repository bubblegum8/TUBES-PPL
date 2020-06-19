<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelDekan extends CI_Controller {

public function __construct(){
    parent::__construct();
    $this->load->model('dekan_model');
    $this->load->library('form_validation');
}
public function index()
    {
        $data["dekan"] = $this->dekan_model->getAll();
        $this->load->view("admin/data_pegawai/tampil_dekan", $data);   
    }

public function add(){
    $dekan = $this->dekan_model;
    $validation = $this->form_validation;
    $validation->set_rules($dekan->rules());

    if ($validation->run()){
        $dekan->save();
        $this->session->set_flashdata('success', 'Berhasil disimpan');
    }
    $this->load->view("admin/data_pegawai/tampil_dekan/new_form");
}

public function edit($id = null){
    if (!isset($id)) redirect ('admin/TabelDekan');

    $dekan = $this->dekan_model;
    $validation = $this->form_validation;
    $validation->set_rules($dekan->rules());
    
    if ($validation->run()){
        $dekan->update();
        $this->session->set_flashdata('success', 'Berhasil disimpan');
    }

    $data["dekan"] = $dekan->getById($id);
    if (!$data["dekan"]) show_404();

    $this->load->view("admin/data_pegawai/tampil_dekan/edit_form", $data);
}

public function delete($id=null){
    if (!isset($id)) show_404();

    if ($this->dekan_model->delete($id)){
        redirect(site_url('admin/TabelDekan'));
    }
}
}
    