<?php
class M_user extends CI_model{
	function __construct()
	{
		parent::__construct();
		$this->gallery_path= realpath(APPPATH.'../images/user');
		$this->gallery_path_url= base_url().'images/user/';
	}
	function data_user()
	{
		$u=$this->db->select('*')
					->from('tb_user')
					->join('tb_hint','tb_hint.id_hint=tb_user.id_hint')
					->get()
					->result();
			return $u;
	}

	function simpan()
	{
			
		if($this->input->post('simpan'))
		{
			
					$data = array(
					'username' 			=> $this->input->post('user'),
					'password' 			=> $this->input->post('pass'),
					'nama' 	   			=> $this->input->post('nama'),
					'email'   			=> $this->input->post('email'),
					'tanggal'	 		=> $this->input->post('tanggal'),
					'id_hint'			=> $this->input->post('hint'),
					'jawaban'			=> $this->input->post('jawab')
				);
					$this->db->insert('tb_user',$data);
						}
					echo"<script>alert('Data Berhasil Ditambahkan');</script>";
		}
	}
?>