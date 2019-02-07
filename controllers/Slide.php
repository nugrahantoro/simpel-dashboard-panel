<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slide extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('m_data');
	}
	
	public function index(){
		$data['tampil'] = $this->m_data->view_slide("ref_slide");
		$this->load->view('panel_head');
		$this->load->view('panel_sidebar');
		$this->load->view('panel_slide',$data);
		$this->load->view('panel_foot');
	}

	public function edit($where){
		$data['tampil'] = $this->m_data->read_slide("ref_slide",$where);
		$this->load->view('panel_head');
		$this->load->view('panel_sidebar');
		$this->load->view('panel_edit_slide',$data);
		$this->load->view('panel_foot');
	}

	public function aksi_edit(){
		$t    = $this->input;
		$nama = $t->post('userfile');

		$config['file_name'] = $nama;
		$config['upload_path'] = './assets/slide/';
		$config['allowed_types'] = 'jpg|png|jpeg';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload())
		{
			echo " <script>alert('Slide gagal diedit!');history.go(-1);</script>";
		}
		else{
			$file_data = $this->upload->data();
			$where 	   = $t->post('id_slide');
			$tgl 	   = date("Ymd");
			$data      = array(
				'slide_title' => $t->post('slide_title'),
				'slide_thumb' => $file_data['file_name'],
				'created_at'  => $tgl
			);
			$this->db->where('id_slide',$where);
			$this->db->update('ref_slide', $data);
			echo " <script>alert('Slide berhasil diedit!');history.go(-2);</script>";
		}
	}
}
