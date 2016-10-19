<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_rank extends CI_Controller {
	function __construct() {
		parent::__construct();

		// $this->load->model('rank/m_rank');
		$this->load->model('user/M_login');
		$this->load->model('M_score');
		$this->load->model('rank/M_rank');



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

	public function index()	{
		$scorerank = $this->M_rank->rank_score();
		$coin=$this->M_rank->rank_coin();
		$score = $this->M_score->score($this->id_user);
		
		$data = array(
			'score'=>$score,
			'scorerank'=>$scorerank,
			'coin'=>$coin
			  );

		$this->load->view('rank/v_rank',$data);
	}

	function logout()
	{
		$this->session->unset_userdata('isloginuser');
		redirect('user/C_login','refresh');
	}

}
