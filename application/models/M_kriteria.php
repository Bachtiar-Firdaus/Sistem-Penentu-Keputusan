<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kriteria extends CI_Model {

    public function getkriteria() {
        $query = $this->db->query("SELECT * FROM  tbl_kriteria ");
        return $query->result();
    }    
    public function getkriteria_normalisasi() {
        $query = $this->db->query("SELECT * FROM  tbl_kriteria_normalisasi");
        return $query;
    }


}
