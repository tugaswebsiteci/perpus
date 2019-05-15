<?php
class M_kategori extends CI_Model{
	
	function tampil(){
		return $this->db->get('kategori');
	}

	function simpan($data){
		return $this->db->insert('kategori',$data);
	}
}