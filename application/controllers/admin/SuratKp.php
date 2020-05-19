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
        $alamat_intansi = $this->input->post('alamat_intansi');
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
            'alamat_intansi'=>$alamat_intansi,
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
    function hapus($no_surat){
		$where = array('no_surat' => $no_surat);
		$this->surat_model->hapus_data($where,'surat_kp');
		redirect('admin/SuratKp/index');
	}
 
	function edit_form($no_surat){
		$where = array('no_surat' => $no_surat);
        $data['surat_kp'] = $this->surat_model->edit_data($where,'surat_kp')->result();
		$this->load->view('admin/edit_form_suratKP',$data);
    }
    // function edit_form($no_surat){
	// 	$this->uri->segment(1); // controller
    //     $this->uri->segment(2); // action
    //     $this->uri->segment(3);
    //     $no_surat=$this->uri->segment(4)."/".$this->uri->segment(5)."/".$this->uri->segment(6)."/".$this->uri->segment(7)."/".$this->uri->segment(8)."/".$this->uri->segment(9); // 1stsegment
    //     // 
    //     $aweu='no_surat';
    //     $data['surat_kp'] = $this->surat_model->edit_data($no_surat,'surat_kp')->result();
    //     $this->load_view('admin_edit_form_suratKP',$data);
	// }
    function update(){
        $no_surat = $this->input->post('no_surat');
		$tanggal_surat = $this->input->post('tanggal_surat');
        $nama_intansi = $this->input->post('nama_intansi');
        $alamat_intansi = $this->input->post('alamat_intansi');
        $nama_lengkap=$this->input->post('nama_lengkap');
        $nim=$this->input->post('nim');
        $jurusan=$this->input->post('jurusan');
        $semester=$this->input->post('semester');
        $lamanya=$this->input->post('lamanya');
        $mulai_tgl=$this->input->post('mulai_tgl');
        $akhir_tgl=$this->input->post('akhir_tgl');
		$data = array(
			'tanggal_surat' => $tanggal_surat,
            'nama_intansi' => $nama_intansi,
            'alamat_intansi'=>$alamat_intansi,
            'nama_lengkap' => $nama_lengkap,
            'nim' => $nim,
            'jurusan' => $jurusan,
            'semester' => $semester,
            'lamanya' => $lamanya,
            'mulai_tgl' => $mulai_tgl,
            'akhir_tgl' => $akhir_tgl,
			);
        $where = array(
            'no_surat' => $no_surat
        );
        $this->surat_model->update_data($where,$data,'surat_kp');
        redirect('admin/SuratKp/index');
    }

}
