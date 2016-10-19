<?php 
	class M_level extends CI_Model{
		function data_level(){
			$q = $this->db->select('*')
							  ->from('tb_level')
							  ->get()
							  ->result();
			return $q;
		}
		function simpan(){
			if ($this->input->post('tambah')) {
				$data = array(
				'tingkat' => $this->input->post('tingkat'),
				'kelas'	  => $this->input->post('kelas'),
				'score'	  => $this->input->post('score')
				);
				$this->db->insert('tb_level',$data);
				echo "<script> alert ('Data berhasil ditambah')</script>";
			}
			
			return true;
		}
	
	function ubah_simpan(){
		if ($this->input->post('ubah')) {
			$id_level = $this->input->post('id_level');
			$data = array(
				'tingkat' => $this->input->post('tingkat'),
				'kelas' => $this->input->post('kelas'),
				'score' => $this->input->post('score')
				);

			$this->db->where('id_level',$id_level);
			$this->db->update('tb_level',$data);
			echo "
			<script>alert('Data berhasil terubah')</script>
			";
		}
	}
	function ubah($level){
		$q = $this->db->select('*')
					  ->from('tb_level')
					  ->where('id_level',$level)
					  ->get()
					  ->result();
			return $q;
	}
	function hapus(){
		$id_level = $this->uri->segment(4);
		$this->db->where('id_level',$id_level);
		$this->db->delete('tb_level');
		echo "<script>alert('Data berhasil terhapus')</script>";
	}
	}
 ?>