<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_index extends CI_Controller {
	function __construct()

	{
		parent::__construct();
		$this->load->model('user/m_login');
		$this->load->model('m_score');
		

		
		$session = $this->session->userdata('isloginuser');
		if($session==True){
			$ambil_akun = $this->m_login->ambil_user($this->session->userdata('username'));
			//$stat = $this->session->userdata('stat_admin');
			$username=$this->session->userdata('username');
		}
		else
		{
			$username='';
			$ambil_akun=$this->m_login->ambil_user($username);
		}
		//$this->load->database();
		$this->username=$username;
		if(empty($ambil_akun))
		{
			$id_user ="";
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
				redirect('user/c_login','refresh');

		}
	}

	public function index()
	{
		$score = $this->m_score->score($this->id_user);
		$data = array(
			'score'=>$score
			  );
		$this->load->view('v_index',$data);
	}

	function logout()
	{
		$this->session->unset_userdata('isloginuser');
		redirect('user/c_login','refresh');
	}
}
