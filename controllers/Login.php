<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();	
		$this->load->model('m_login');	
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function aksi_login(){
		$t 		  = $this->input;
		$username = $t->post('username');
		$password = $t->post('password');
		$where	  = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		if ($cek>0) {
			$data =  $this->m_login->cek_login("user",$where)->result();
			foreach ($data as $val) {
				$id = $val->id_user;
			}
			$data_session = array(
				'id' 	=> $id,
				'nama' 	=> $username,
				'status'=> "login"
			);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("dashboard"));
		}
		else{
			echo "Username dan password salah !";
		}
	}

	public function aksi_logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
