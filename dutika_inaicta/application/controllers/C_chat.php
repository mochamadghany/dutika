<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_chat extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->model('M_chat');

		$this->load->view('jquery');

		$session = $this->session->userdata('akun');
		if (empty($session)) { 
			?><script>alert('Harap masuk terlebih dahulu!'); window.location = 'C_login';</script><?php
		}
	}

	function index() {
		$tampil = $this->M_chat->tampil();
		$data = array('chat' => $tampil);
		$this->load->view('v_chat',$data);
	}

	function simpan() {
		$this->M_chat->simpan();
	}
}