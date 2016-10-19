<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');

		/*Script Menentukan hari*/
		$array_hr=array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
		$this->hr=$array_hr[date('N')];


		/*Script menentukan tanggal*/
		$this->tgl=date('j');


		$array_bulan=array(1=>"Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
		$this->bulan=$array_bulan[date('n')];


		/*Script menentukan tahun*/
		$this->tahun=date('Y');


		/*Script perintah keluaran*/
		$this->tanggal=$this->hr.",".$this->tgl.",".$this->bulan.",".$this->tahun.",".date('H:i');
		
	}
	public function index()
	{
		$data=array(
			'tanggal'=>$this->tanggal
			);
		
		$this->load->view('v_user',$data);
	}
	
	function simpan()
	{
		$this->m_user->simpan();
		redirect('C_login','refresh');
	}
	function kembali()
	{
		$this->load->view('v_login');
	}
}

