<?php
	class M_hint extends CI_Model {
	/*	function __construct() {
			$this->load->view('style');
		}
	*/	
		function simpan() {
			$data = array(
					'pertanyaan' => $this->input->post('pertanyaan')
				);
			$this->db->insert('tb_hint',$data);
		}

		function tampil() {
			$h = $this->db->select('*')
							   ->from('tb_hint')
							   ->get()
							   ->result();
			return $h;
		}

		function ubah($id_hint) {
			$ubah = $this->db->select('*')
						   ->from('tb_hint')
						   ->where('id_hint',$id_hint)
						   ->get()
						   ->result();
			return $ubah;
		}

		function ubah_simpan() {
			$id_hint = $this->input->post('id_hint');
			$data = array(
					'pertanyaan' => $this->input->post('pertanyaan')
				);
			$this->db->where('id_hint',$id_hint)
					 ->update('tb_hint',$data);
		}

		function hapus($id_hint) {
			$this->db->where('id_hint',$id_hint)
					 ->delete('tb_hint');
		}
	}
?>