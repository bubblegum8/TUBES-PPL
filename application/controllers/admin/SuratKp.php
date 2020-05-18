<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratKp extends CI_Controller {
function __construct() {
    parent::__construct();
    $this->load->library('pdf');
    $this->load->model("surat_model");
}
public function index()
    {
        $data["surat_kp"] = $this->surat_model->getAll()->result();
        $this->load->view("admin/suratkp",$data);   
    }
    public function add(){
        $no_surat = $this->input->post('no_surat');
		$tanggal_surat = $this->input->post('tanggal_surat');
        $nama_intansi = $this->input->post('nama_intansi');
        $nama_lengkap=$this->input->post('nama_lengkap');
        $nim=$this->input->post('nim');
        $jurusan=$this->input->post('jurusan');
        $semester=$this->input->post('semester');
        $lamanya=$this->input->post('lamanya');
        $mulai_tgl=$this->input->post('mulai_tgl');
        $akhir_tgl=$this->input->post('akhir_tgl');
 
		$data = array(
			'no_surat' => $no_surat,
			'tanggal_surat' => $tanggal_surat,
            'nama_intansi' => $nama_intansi,
            'nama_lengkap' => $nama_lengkap,
            'nim' => $nim,
            'jurusan' => $jurusan,
            'semester' => $semester,
            'lamanya' => $lamanya,
            'mulai_tgl' => $mulai_tgl,
            'akhir_tgl' => $akhir_tgl,
			);
        $this->surat_model->save($data,'surat_kp');
        $this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/Dashboard/index');
    }
}
