<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_lupa_password extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('user/M_lupa_password');
	}
	public function index()
	{
		$this->load->view('user/v_lupa_password');
	}
	function hint(){
		$hint = $this->M_lupa_password->hint();
		$data = array('hint'=>$hint);
		$this->load->view('user/v_lupa_password',$data);
	}
	function submit(){
		$email = $this->input->post("email");
		$hint = $this->input->post("hint");
		$jawaban = $this->input->post("jawaban");

		$cek = $this->M_lupa_password->submit_hint($email,$hint,$jawaban);
		
		if ($cek==1) {
			redirect('user/v_tampil','refresh');
		}else{
			echo "<script>alert('Cek kembali')</script>";
			redirect('user/C_lupa_password/hint','refresh');
		}
	}
}
?>