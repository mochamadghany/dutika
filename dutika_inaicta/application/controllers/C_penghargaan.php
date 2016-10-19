<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_penghargaan extends CI_Controller {
	function __construct() {
		parent:: __construct();

		$this->load->model('m_penghargaan');
		
		$session = $this->session->userdata('admin');
		if (empty($session)) {
			?><script>alert('Harap masuk terlebih dahulu!'); window.location = 'c_admin_login';</script><?php
		}
	}

	// fungsi database
	function index() {
		$tampil = $this->m_penghargaan->tampil();
		$data = array('penghargaan' => $tampil);
		$this->load->view('v_penghargaan',$data);
	}

	function simpan(){
		$this->m_penghargaan->simpan();
		redirect('c_penghargaan','refresh');
	}

	function ubah_tampil($id) {
		$ubah_tampil = $this->m_penghargaan->ubah_tampil($id);
		$data = array('penghargaan' => $ubah_tampil);
		$this->load->view('v_penghargaan_ubah',$data);
	}
	function ubah_simpan() {
		$this->m_penghargaan->ubah_simpan();
		redirect('c_penghargaan','refresh');
	}

	function hapus($id) {
		$this->m_penghargaan->hapus($id);
		redirect('c_penghargaan','refresh');
	}

	// fungsi link
	function tambah() {
		$this->load->view('v_penghargaan_tambah');
	}
}