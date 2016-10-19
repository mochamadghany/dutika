<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_tampilskl extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin/M_tampilskl');
	}
	public function index()
	{
		$tampil_skl = $this->M_tampilskl->tampilskl();
		$data=array(
			'skl' => $tampil_skl,
			);
		$this->load->view('admin/v_tampilskl',$data);
	}
	function ubah(){
		$id = $this->uri->segment(4);
		$tampil_skl = $this->M_tampilskl->ubah($id);
		$data = array(
			'skl' => $tampil_skl
			);
		$this->load->view('admin/v_tampilskl_ubah',$data);
	}
	function ubah_simpan(){
		$this->M_tampilskl->ubah_simpan();
		redirect('admin/C_tampilskl/index','refresh');
	}
	function hapus($id){
		$this->M_tampilskl->hapus($id);
		redirect('admin/C_tampilskl/index','refresh');
	}
}
?>