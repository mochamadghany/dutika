<?php
	class M_user extends CI_Model {
		function tampil() {
			/*$p = $this->db->select('*')
						  ->from('tb_user')
						  ->get()
						  ->result();
			return $p;*/

			/*"

			SELECT *
			FROM tb_user
			INNER JOIN tb_hint
			ON tb_user.id_hint=tb_hint.id_hint
			ORDER BY tb_user.username;

			"*/
		
			// INNER JOIN
			$p = $this->db->select('*')
					  ->from('tb_user')
					  ->join('tb_hint', 'tb_hint.id_hint = tb_user.id_hint','inner')
					  ->order_by('username','asc')
					  ->get()
					  ->result();
			return $p;
		}

		function simpan() {
			$data = array(
					'username'	=> $this->input->post('username'),
					'password'	=> $this->input->post('password'),
					'nama'		=> $this->input->post('nama'),
					'email'		=> $this->input->post('email'),
					'tanggal'	=> date('d M y'),
					'id_hint'	=> $this->input->post('id_hint'),
					'jawaban'	=> $this->input->post('jawaban'),
					'status'	=> '0'
				);
			$this->db->insert('tb_user',$data);
		}

		function ubah_tampil($id) {
			$ut = $this->db->select('*')
						   ->from('tb_user')
						   ->where('id_user',$id)
						   ->get()
						   ->result();
			return $ut;
		}
		function ubah_simpan() {
			$id = $this->input->post('id_user');
			$data = array(
					'password'	=> $this->input->post('password'),
					'nama'		=> $this->input->post('nama'),
					'email'		=> $this->input->post('email'),
					'tanggal'	=> $this->input->post('tanggal'),
					'id_hint'	=> $this->input->post('id_hint'),
					'jawaban'	=> $this->input->post('jawaban'),
					'status'	=> $this->input->post('status')
				);
			$this->db->where('id_user',$id)
					 ->update('tb_user',$data);
		}

		function hapus($id) {
			$this->db->where('id_user',$id)
					 ->delete('tb_user');
			?><script>alert('Data terhapus');</script><?php
		}
	}

?>