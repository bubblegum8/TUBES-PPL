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
}