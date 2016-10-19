<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_hint extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->model('m_hint');
		
		$session = $this->session->userdata('admin');
		if (empty($session)) {
			?><script>alert('Harap masuk terlebih dahulu!'); window.location = 'c_admin_login';</script><?php
		}
	}

	// fungsi database
	function index() {
		$tampil = $this->m_hint->tampil();
		$data = array('hint' => $tampil); // 'hint' => sama dengan yang ada di foreach
		$this->load->view('v_hint',$data);
	}

	function simpan() {
		$this->m_hint->simpan();
		redirect('c_user','refresh');
	}

	function ubah($id_hint) {
		$id = $this->m_hint->ubah($id_hint);
		$data = array('hint' => $id);
		$this->load->view('v_hint_ubah',$data);
	}
	function ubah_simpan() {
		$this->m_hint->ubah_simpan();
		redirect('c_hint','refresh');
	}

	function hapus($id_hint) {
		$this->m_hint->hapus($id_hint);
		redirect('c_hint','refresh');
	}



	// link
	function tambah() {
		$this->load->view('v_hint_tambah');
	}
}