<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class surat_model extends CI_Model
{
    private $_table = "surat_kp";
    
    function getAll()
    {
        return $this->db->get('surat_kp');
    }
    function save($data,$table){
        $this->db->insert($table,$data);
    }
    public function ceknosurat()
    {
        $query = $this->db->query("SELECT MAX(no_surat) as no_surat from surat_kp");
        $hasil = $query->row();
        return $hasil->no_surat;
    }
}