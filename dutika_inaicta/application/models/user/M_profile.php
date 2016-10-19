<?php
	class M_profile extends CI_Model {
		function __construct(){
		parent::__construct();
		$this->gallery_path= realpath(APPPATH.'../images/user/user/');
		$this->gallery_path_url= base_url().'images/user/user/';
	}
		function tampil() {
			$p = $this->db->select('*')
						  ->from('tb_user')
						  ->where('username','Fajar')
						  ->get()
						  ->result();
			return $p;
		}

		// function simpan() {
		// 	$data = array(
		// 			'username' => $this->input->post('username'),
		// 			'password' => $this->input->post('password'),
		// 			'nama' => $this->input->post('nama'),
		// 			'email' => $this->input->post('email'),
		// 			'tanggal' => date('d M y'),
		// 			'id_hint' => $this->input->post('id_hint'),
		// 			'jawaban' => $this->input->post('jawaban'),
		// 			'status' => '1'
		// 		);
		// 	$this->db->insert('tb_user',$data);
		// }

		function ubah_tampil($id) {
			$ut = $this->db->select('*')
						   ->from('tb_user')
						   ->where('username',$id)
						   ->get()
						   ->result();
			return $ut;
		}
		function ubah_simpan() {
			if ($this->input->post('ubah')) {
			$config= array(
					'allowed_types'=>'jpg|jpeg|gif|png',
					'upload_path'=>$this->gallery_path,
					'max_size'=>2000,
					'file_name'=>url_title($this->input->post('photo')),
					);
			// 	var_dump($config);
			// exit();
				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if ($this->input->post('new') == "") {
					$periksa_pass_baru = $this->input->post('password');
				} else {
					$periksa_pass_baru = $this->input->post('new');
				}

				if (!$this->upload->do_upload('photo')){
					$id = $this->input->post('id_user');
						$data = array(
								'password'	=> $periksa_pass_baru,
								'nama'		=>$this->input->post('nama'),
								// 'foto' =>$this->upload->file_name
							);
						// var_dump($data);
						// exit();
						$this->db->where('id_user',$id)
								 ->update('tb_user',$data);
				}else{
					$id = $this->input->post('id_user');
						$data = array(
								'password'	=>  $periksa_pass_baru,
								'nama'		=>$this->input->post('nama'),
								'foto' =>$this->upload->file_name
							);
						$this->db->where('id_user',$id)
								 ->update('tb_user',$data);
				}
			}
			
		}
		function hapus($id) {
			$this->db->where('id_user',$id)
					 ->delete('tb_user');
		}
	}


	// tampil profil orang lain
	function tampil_profil_pengguna($username) {
		$pt = $this->db->select('*')
					   ->from('tb_user')
					   ->where('username',$username)
					   ->get()
					   ->result();
		return $pt;
	}
?>