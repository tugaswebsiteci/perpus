<?php
class Kategori extends CI_Controller{
	function __construct(){
	parent:: __construct();
	$this->load->model('M_kategori');
}

function index(){
	$data['title']="Tampil Kategori";
	$data['kategori']=$this->M_kategori->tampil()->result();
	$this->load->view('kategori/tampil',$data);

}

function input(){
	$data['title']="Input kategori";
	$this->load->view('kategori/input',$data);

}

function simpan(){
	$data=array(
		'nama_kategori'=>$this->input->post('nama_kategori')
	);

	$this->M_kategori->simpan($data);
	redirect ('kategori');

}

function edit(){

}
function update(){

}
function hapus(){
	$id=$this->uri->segment(3);
	$this->db->where('id_kategori',$id);
	$this->db->delete('kategori');
	redirect('kategori');
}
}