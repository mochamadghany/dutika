<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_hint extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->model('M_hint');
		$this->load->view('style');
	}

	// fungsi database
	function index() {
		$tampil = $this->M_hint->tampil();
		$data = array('hint' => $tampil); // 'hint' => sama dengan yang ada di foreach
		$this->load->view('v_hint',$data);
	}

	function simpan() {
		$this->M_hint->simpan();
		// redirect('c_user','refresh');
	}

	function ubah($id_hint) {
		$id = $this->M_hint->ubah($id_hint);
		$data = array('hint' => $id);
		$this->load->view('v_hint_ubah',$data);
	}
	function ubah_simpan() {
		$this->M_hint->ubah_simpan();
	}

	function hapus($id_hint) {
		$this->M_hint->hapus($id_hint);
		redirect('C_hint','refresh');
	}



	// link
	function tambah() {
		$this->load->view('v_hint_tambah');
	}
}