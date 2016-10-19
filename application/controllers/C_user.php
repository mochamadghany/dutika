<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->model('m_user');

		$session = $this->session->userdata('admin');
		if (empty($session)) {
			?><script>alert('Harap masuk terlebih dahulu!'); window.location = 'c_admin_login';</script><?php
		}
	}


	// fungsi database
	function index() {
		$tampil = $this->m_user->tampil();
		$data = array('user' => $tampil);
		$this->load->view('v_user',$data);
	}

	function simpan() {
		$this->m_user->simpan();
		redirect('c_user','refresh');
	}

	public function ubah($id) {
		$id_ubah = $this->m_user->ubah_tampil($id);
		$data = array('user' => $id_ubah);
		$this->load->view('v_user_ubah',$data);
	}
	function ubah_simpan() {
		$this->m_user->ubah_simpan();
		redirect('c_user','refresh');
	}

	function hapus($id) {
		$this->m_user->hapus($id);
		redirect('c_user','refresh');
	}

	// link
	function tambah() {
		$this->load->view('v_user_tambah');
	}

	function keluar() {
		$this->session->unset_userdata(array(
				'akun',
				'admin'
			));

		redirect('c_admin_login');
	}
}