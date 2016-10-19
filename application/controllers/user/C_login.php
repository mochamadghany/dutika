<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {
		function __construct()
		{
			parent::__construct();
			$this->load->model('user/m_login');
		}
	
	public function index()
	{
		$session = $this->session->userdata('isloginuser');
		if($session==FALSE){

			$hint = $this->m_login->hint();
			
			$data = array(
				'hint'	=>$hint);
			$this->load->view('user/v_login',$data);
		}
		else
		{
			redirect('c_index','refresh');
		}
	}
	function login()
	{
		$username=$this->input->post("username");
		$password=$this->input->post("password");
		$cek=$this->m_login->user($username,$password);

		if(count($cek)==1){
			$cek_verifikasi=$this->m_login->cek_verifikasi($username,$password);
			if (count($cek_verifikasi)==1) {
				$this->session->set_userdata(array(
					'isloginuser'=>TRUE,
					'username' => $username,
				));
				redirect('c_index','refresh');
			} else {
				echo "<script>alert('Akunmu belum di verifikasi. Kamu harus memverifikasi akunmu sebelum kamu bisa bermain.')</script>";
				redirect('user/c_login/#popup1','refresh');
			}
		}else{
			echo "<script>alert('Please check your username and password!')</script>";
			redirect('user/c_login/#popup1','refresh');
		}
	}
}