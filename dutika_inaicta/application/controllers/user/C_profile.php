<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_profile extends CI_Controller {
		function __construct()
		{
		parent::__construct();
		$this->load->model('user/M_login');
		$this->load->model('M_score');
		$this->load->model('user/M_profile');

		$session = $this->session->userdata('isloginuser');
		if($session==True){
			$ambil_akun = $this->M_login->ambil_user($this->session->userdata('username'));
			//$stat = $this->session->userdata('stat_admin');
			$username=$this->session->userdata('username');
		}
		else
		{
			$username='';
			$ambil_akun=$this->M_login->ambil_user($username);
		}
		//$this->load->database();
		$this->username=$username;
		foreach ($ambil_akun as $q)
		{
      		$id_user=$q->id_user;
		}
		$this->id_user = $id_user;
		$this->user = $ambil_akun;
		$this->cek();

	}
	function cek()
	{
		if($this->username==""){
			echo"
				<script>alert('harap login')</script>";
				redirect('user/C_login','refresh');

		}
	}
	
	function index() {
		$tampil=$this->M_profile->tampil();
		$data = $this->M_score->score($this->id_user);
		$dataf = array(
			'profil' => $tampil,
			'foto'	 =>$data
			);
		$this->load->view('user/v_profile',$dataf);
	}

	function simpan() {
		$this->M_profile->simpan();
		redirect('user/C_profile','refresh');
	}

	function ubah($id){
		// $id = $this->input->get('id');
		$data_user = $this->M_profile->ubah_tampil($id);
		$data = $this->M_score->score($this->id_user);
		$dataf = array(
			'user' => $data_user,
			'score'=>$data
			);
		$this->load->view('user/v_profil_ubah',$dataf);
	}
	function ubah_simpan() {
		$this->M_profile->ubah_simpan();
		redirect('user/c_profile','refresh');
	}

	function hapus($id) {
		$this->M_profile->hapus($id);
		redirect('user/c_profile','refresh');
	}

	// link
	function tambah() {
		$this->load->view('user/v_profil_ubah');
		// echo "<h2>FUNGSI BELUM DIBUAT</h2>";
	}

	function logout() {
		$this->session->unset_userdata('akun');

		redirect('user/C_login');
	}

	// link lihat profil orang lain
	function profil_pengguna_lain($username) {
		$tampil=$this->M_profile->tampil_profil_pengguna($username);
		// $data = $this->M_score->score($this->id_user);
		$dataf = array(
				'profil_pengguna_lain' => $tampil
				// 'foto'	 =>$data
			);
		$this->load->view('user/v_profil_pengguna_lain',$dataf);

	}
}
