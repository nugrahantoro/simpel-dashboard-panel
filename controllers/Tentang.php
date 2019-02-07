<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('m_data');
	}
	
	public function index(){
		//$where = 1;
		//$data['tampil'] = $this->m_data->view_tentang("berita",$where);
		$this->load->view('panel_head');
		$this->load->view('panel_sidebar');
		$this->load->view('panel_tentang');
		$this->load->view('panel_foot');
	}
}
