<?php
	class M_penghargaan extends CI_Model {
		function tampil() {
			$p = $this->db->select('*')
						  ->from('tb_penghargaan')
						  ->get()
						  ->result();
			return $p;
		}

		function simpan() {
			$data = array(
					'id_penghargaan'	=> $this->input->post('id_penghargaan'),
					'id_user'			=> $this->input->post('id_user'),
					'hasil_misi_user'	=> $this->input->post('hasil_misi_user'),
					'status'			=> $this->input->post('status')
				);
			$this->db->insert('tb_penghargaan',$data);
		}

		function ubah_tampil($id) {
			$pu = $this->db->select('*')
						   ->from('tb_penghargaan')
						   ->where('id_penghargaan_user',$id)
						   ->get()
						   ->result();
			return $pu;
		}
		function ubah_simpan() {
			$id = $this->input->post('id_penghargaan_user');
			$data = array(
					'id_penghargaan'	=> $this->input->post('id_penghargaan'),
					'id_user'			=> $this->input->post('id_user'),
					'hasil_misi_user'	=> $this->input->post('hasil_misi_user'),
					'status'			=> $this->input->post('status')
				);
			$this->db->where('id_penghargaan_user',$id)
					 ->update('tb_penghargaan',$data);
		}


		function hapus($id) {
			$this->db->where('id_penghargaan_user',$id)
					 ->delete('tb_penghargaan');
		}
	}