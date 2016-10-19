<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_forum extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('forum/M_forum');
		$this->load->model('M_score');
		$this->load->model('user/M_login');
		

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
		$this->tanggal=$this->hr.",".$this->tgl.",".$this->bulan.",".$this->tahun.",".date('H:i:s');


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
		if(empty($ambil_akun))
		{
			$id_user="";
		}
		else
		{
			foreach ($ambil_akun as $q)
			{
	      		$id_user=$q->id_user;
			}
			
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

	public function index()
	{
		$tampil_post=$this->M_forum->data_forum();
		$kategori = $this->M_forum->kategori();
		$score = $this->M_score->score($this->id_user);
		// var_dump($score);
		// exit();
		$data = array(
			'forum'=>$tampil_post,
			'data'	=> $this->user,
			'kategori'	=>$kategori,
			'score'=>$score
			  );
		$this->load->view('forum/v_forum',$data);
			
	}
	function tambah()
	{
		$data = array(
			'data'	=> $this->user,
			'tanggal'=> $this->tanggal);
		$this->load->view('forum/v_forum_tambah',$data);
	}
	function simpan()
	{
		$this->M_forum->simpan();
		redirect('forum/C_forum','refresh');
	}
	function lihat()
	{
		$id_forum = $this->uri->segment(4);
		$tampil_post=$this->M_forum->lihat($id_forum);
		$tampil_komen = $this->M_forum->tampil_komen($id_forum);
		$tampil_kategori = $this->M_forum->kategori($id_forum);
		$score = $this->M_score->score($this->id_user);
		// var_dump($tampil_post);
		// exit();
		$data = array(
			'data'	=> $this->user,
			'data_forum'	=> $tampil_post,
			'id_forum'	=>$id_forum,
			'score'=>$score,
			'lihat_komen'	=>$tampil_komen,
			'kategori'=>$tampil_kategori,
			'tanggal'=> $this->tanggal);
		$this->load->view('forum/v_forum_lihat',$data);
		

	}

	function simpan_komen()
	{
		$id_forum = $this->input->post('id_forum');
		$simpan = $this->M_forum->simpan_komen();
		$kategori=$this->M_forum->kategori();
		redirect('forum/C_forum/lihat/'.$id_forum.' ','refresh');
	}
	
	function logout()
	{
		$this->session->unset_userdata('isloginuser');
		redirect('user/C_login','refresh');
	}
}
