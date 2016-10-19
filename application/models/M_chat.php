<?php
	class M_chat extends CI_Model {
		function tampil() {
			$tampil = $this->db->select("*")
							   ->from("tb_chat")
							   ->get()
							   ->result();
			return $tampil;
		}

		function simpan() {
			$data = array(
					'user'	=> $this->session->userdata('akun'),
					'pesan'	=> $this->input->post('pesan'),
				);
			$this->db->insert('tb_chat',$data);
			redirect('c_chat','refresh');
		}
	}