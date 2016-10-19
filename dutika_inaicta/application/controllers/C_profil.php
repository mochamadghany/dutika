<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_profil extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->view('style');
		$this->load->model('M_profil');

		$session = $this->session->userdata('akun');
		if (empty($session)) { 
			?><script>alert('Harap masuk terlebih dahulu!'); window.location = 'C_login';</script><?php
		}
	}


	// fungsi database
	function index() {
		$tampil = $this->M_profil->tampil();
		$data = array('profil' => $tampil);
		$this->load->view('v_profil',$data);
	}

	function simpan() {
		$this->M_profil->simpan();
		redirect('C_profil','refresh');
	}

	public function ubah($id) {
		$id_ubah = $this->M_profil->ubah_tampil($id);
		$data = array('profil' => $id_ubah);
		$this->load->view('v_profil_ubah',$data);
	}
	function ubah_simpan() {
		$this->M_profil->ubah_simpan();
		redirect('C_profil','refresh');
	}

	function hapus($id) {
		$this->M_profil->hapus($id);
		redirect('C_profil','refresh');
	}

	// link
	function tambah() {
		$this->load->view('v_profil_tambah');
		// echo "<h2>FUNGSI BELUM DIBUAT</h2>";
	}

	function keluar() {
		$this->session->unset_userdata('akun');

		redirect('C_login');
	}
}