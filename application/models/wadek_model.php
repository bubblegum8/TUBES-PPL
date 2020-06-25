<?php defined ('BASEPATH') OR exit ('No Dirext Script Access Allowed');
class wadek_model extends CI_Model{
    private $_table = "wadek";

    public $id_wadek;
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
        return $this->db->get_where($this->_table, ["id_wadek" => $id])->row();
    }

    public function save(){
        $post = $this->input->post();
        $this->id_wadek = uniqid();
        $this->nip = $post["nip"];
        $this->nama = $post["nama"];
        $this->jurusan = $post["jurusan"];
        $this->alamat = $post["alamat"];
        $this->telp = $post["telp"];
        $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->id_wadek = $post ["id"];
        $this->nip = $post["nip"];
        $this->nama = $post["nama"];
        $this->jurusan = $post["jurusan"];
        $this->alamat = $post["alamat"];
        $this->telp = $post["telp"];
        $this->db->update($this->_table, $this, array('id_wadek' => $post ['id']));
    }
    
    public function delete($id){
        return $this->db->delete($this->_table, array("id_wadek" => $id));
    }
}