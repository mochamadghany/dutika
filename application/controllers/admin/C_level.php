<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_level extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('admin/M_level');

		$session = $this->session->userdata('admin');
		if (empty($session)) {
			?><script>alert('Harap masuk terlebih dahulu!'); window.location = 'c_admin_login';</script><?php
		}
	}
	public function index()
	{
		$tampil_level = $this->M_level->data_level(); 
		$data=array(
			'level' => $tampil_level,
			);
		$this->load->view('admin/v_level',$data);

	}
	function tambah(){
		$this->load->view('admin/v_level_tambah');
	}
	function simpan(){
		$this->M_level->simpan();
		redirect('admin/c_level/index','refresh');
	}
	function ubah(){
		$id = $this->uri->segment(4);
		$data_level = $this->M_level->ubah($id);
		$data = array(
			'level' => $data_level
			);
		$this->load->view('admin/v_level_ubah',$data);
	}
	function ubah_simpan(){
		$this->m_level->ubah_simpan();
		redirect('admin/c_level/index','refresh');
	}
	function hapus(){
		$this->m_level->hapus();
		redirect('admin/c_level/index','refresh');
	}
}
