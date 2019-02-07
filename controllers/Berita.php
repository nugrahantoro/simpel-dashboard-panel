<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('m_data');
	}
	
	public function index(){
		$data['tampil'] = $this->m_data->view_berita("berita");
		$this->load->view('panel_head');
		$this->load->view('panel_sidebar');
		$this->load->view('panel_berita',$data);
		$this->load->view('panel_foot');
	}

	public function add(){
		$this->load->view('panel_head');
		$this->load->view('panel_sidebar');
		$this->load->view('panel_add_berita');
		$this->load->view('panel_foot');
	}

	public function read($where){
		$data['tampil'] = $this->m_data->read_berita("berita",$where);
		$this->load->view('panel_head');
		$this->load->view('panel_sidebar');
		$this->load->view('panel_read_berita',$data);
		$this->load->view('panel_foot');
	}

	public function edit($where){
		$data['tampil'] = $this->m_data->read_berita("berita",$where);
		$this->load->view('panel_head');
		$this->load->view('panel_sidebar');
		$this->load->view('panel_edit_berita',$data);
		$this->load->view('panel_foot');
	}

	public function aksi_tambah(){
		$t 		= $this->input;
		$id 	= $t->post('id_user');
		$judul 	= $t->post('berita_title');
		$berita = $t->post('berita_data');
		$status = $t->post('berita_status');
		$post	= date("Y-m-d");
		$tgl	= date("Y-m-d h:i:sa");
		$data 	= array(
			'id_user' 		  => $id,
			'berita_title' 	  => $judul,
			'berita_data'	  => $berita,
			'berita_status'   => $status,
			'berita_tgl_post' => $post,
			'created_at' 	  => $tgl
		);
		$this->m_data->add_berita("berita",$data);
		echo " <script>alert('Berita berhasil ditambah!');history.go(-2);</script>";
	}

	public function aksi_edit(){
		$t 		= $this->input;
		$where 	= $t->post('id_berita');
		$judul 	= $t->post('berita_title');
		$berita = $t->post('berita_data');
		$status = $t->post('berita_status');
		$data 	= array(
			'berita_title' => $judul,
			'berita_data'  => $berita,
			'berita_status'=> $status
		);
		$this->m_data->edit_berita("berita",$data,$where);
		echo " <script>alert('Berita berhasil diedit!');history.go(-2);</script>";
	}

	public function aksi_hapus($where){
		$this->m_data->hapus_berita("berita",$where);
		echo " <script>alert('Berita berhasil dihapus!');history.go(-1);</script>";
	}
}
