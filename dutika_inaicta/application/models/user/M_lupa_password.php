<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lupa_password extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->tbl="tb_user";
	}
	
	function simpan(){ //gadipake
		if ($this->input->post('submit')){
			$data = array(
				'email' => $this->input->post('email'),
				'id_hint' => $this->input->post('hint'),
				'jawaban' => $this->input->post('jawaban')
				);
			$this->db->insert('tb_user_detail',$data);
		}
		echo"<script>alert('Berhasil');</script>";
	}
	function hint()
	{
		$u = $this->db->select('*')
					  ->from('tb_hint')
					  ->get()
					  ->result();
		return $u;
	}
	function submit_hint($email="",$hint="",$jawaban=""){
		$cek=$this->db->get_where($this->tbl,array('email'=>$email,'id_hint'=>$hint,'jawaban'=>$jawaban));
			$cek=$cek->result_array();
			return $cek;
	}
}
?>