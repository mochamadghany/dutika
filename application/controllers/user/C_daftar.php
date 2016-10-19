<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_daftar extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->model('user/m_daftar');
	}

	public function index()	{
		
		$this->load->view('user/v_login');
	}

	public function proses_daftar() {
		$this->m_daftar->proses_daftar();
		redirect('user/c_login/#popup21','refresh');
	}
}
