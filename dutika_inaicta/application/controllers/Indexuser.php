<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indexuser extends CI_Controller {
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
			// echo"<script>alert('Harap logout')</script>";
			redirect('c_index','refresh');
		}
		
	}
	function login()
	{
		$username=$this->input->post("username");
		$password=$this->input->post("password");
		$cek=$this->m_login->user($username,$password);

		if(count($cek)==1){
			$this->session->set_userdata(array(
					'isloginuser'=>TRUE,
					'username' => $username,
				));
			redirect('c_index','refresh');
		}else{
			echo"<script>
					alert('Cek username & password anda benar')</script>";
				redirect('user/c_login/#popup1','refresh');
		}
	}
}
