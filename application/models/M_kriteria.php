<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kriteria extends CI_Model {

	var $table = 'tbl_kriteria';
	var $table1 = 'tbl_kriteria_normalisasi';
    public function getkriteria() {
        $query = $this->db->query("SELECT * FROM  tbl_kriteria ");
        return $query->result();
    }    
    public function getkriteria_normalisasi() {
        $query = $this->db->query("SELECT * FROM  tbl_kriteria_normalisasi");
        return $query;
    }
	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}	
	public function update1($where, $data)
	{
		$this->db->update($this->table1, $data, $where);
		return $this->db->affected_rows();
	}

}
