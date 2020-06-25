<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelWadek extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('wadek_model');
        $this->load->library('form_validation');
    }
    public function index()
        {
            $data["wadek"] = $this->wadek_model->getAll();
            $this->load->view("admin/data_pegawai/tampil_wadek", $data);   
        }
    
    public function add(){
        $wadek = $this->wadek_model;
        $validation = $this->form_validation;
        $validation->set_rules($wadek->rules());
    
        if ($validation->run()){
            $wadek->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("admin/data_pegawai/tampil_wadek/new_form");
    }
    
    public function edit($id = null){
        if (!isset($id)) redirect ('admin/TabelWadek');
    
        $wadek = $this->wadek_model;
        $validation = $this->form_validation;
        $validation->set_rules($wadek->rules());
        
        if ($validation->run()){
            $wadek->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
    
        $data["wadek"] = $wadek->getById($id);
        if (!$data["wadek"]) show_404();
    
        $this->load->view("admin/data_pegawai/tampil_wadek/edit_form", $data);
    }
    
    public function delete($id=null){
        if (!isset($id)) show_404();
    
        if ($this->wadek_model->delete($id)){
            redirect(site_url('admin/TabelWadek'));
        }
    }
}
    