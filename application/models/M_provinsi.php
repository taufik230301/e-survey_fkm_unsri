<?php

class M_provinsi extends CI_Model
{
    public function read_all_provinsi()
    {
        
        $hasil=$this->db->query("SELECT * FROM read_all_provinsi");
        return $hasil;
        
    }
}