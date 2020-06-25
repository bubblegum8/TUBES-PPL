<?php defined ('BASEPATH') OR exit ('No Dirext Script Access Allowed');
class dekan_model extends CI_Model{
    private $_table = "dekan";

    public $id_dekan;
    public $nip;
    public $nama;
    public $jurusan;
    public $alamat;
    public $telp;

    public function rules(){
        return [
            ['field' => 'nip',
            'label' => 'Nip',
            'rules' => 'numeric'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'jurusan',
            'label' => 'Jurusan',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'telp',
            'label' => 'Telp',
            'rules' => 'numeric']
        ];
    }
    

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["id_dekan" => $id])->row();
    }

    public function save(){
        $post = $this->input->post();
        $this->id_dekan = uniqid();
        $this->nip = $post["nip"];
        $this->nama = $post["nama"];
        $this->jurusan = $post["jurusan"];
        $this->alamat = $post["alamat"];
        $this->telp = $post["telp"];
        $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->id_dekan = $post ["id"];
        $this->nip = $post["nip"];
        $this->nama = $post["nama"];
        $this->jurusan = $post["jurusan"];
        $this->alamat = $post["alamat"];
        $this->telp = $post["telp"];
        $this->db->update($this->_table, $this, array('id_dekan' => $post ['id']));
    }
    
    public function delete($id){
        return $this->db->delete($this->_table, array("id_dekan" => $id));
    }
}