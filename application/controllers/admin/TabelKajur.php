<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelKajur extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('kajur_model');
        $this->load->library('form_validation');
    }
    public function index()
        {
            $data["kajur"] = $this->kajur_model->getAll();
            $this->load->view("admin/data_pegawai/tampil_kajur", $data);   
        }
    
    public function add(){
        $kajur = $this->kajur_model;
        $validation = $this->form_validation;
        $validation->set_rules($kajur->rules());
    
        if ($validation->run()){
            $kajur->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("admin/data_pegawai/tampil_kajur/new_form");
    }
    
    public function edit($id = null){
        if (!isset($id)) redirect ('admin/TabelKajur');
    
        $kajur = $this->kajur_model;
        $validation = $this->form_validation;
        $validation->set_rules($kajur->rules());
        
        if ($validation->run()){
            $kajur->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
    
        $data["kajur"] = $kajur->getById($id);
        if (!$data["kajur"]) show_404();
    
        $this->load->view("admin/data_pegawai/tampil_kajur/edit_form", $data);
    }
    
    public function delete($id=null){
        if (!isset($id)) show_404();
    
        if ($this->kajur_model->delete($id)){
            redirect(site_url('admin/TabelKajur'));
        }
    }
}
    