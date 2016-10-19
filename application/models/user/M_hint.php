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

			?><script>window.location = "<?= site_url('C_hint/tambah') ?>";</script><?php
		}

		function tampil() {
			$h = $this->db->select('*')
							   ->from('tb_hint')
							   ->get()
							   ->result();
			return $h;
			// $this->db->order_by('id_hint','asc');

			// return $this->db->get();
		}

		function ubah($id_hint) {
			// echo "ID Hint : ".$id_hint;

			$ubah = $this->db->select('*')
						   ->from('tb_hint')
						   ->where('id_hint',$id_hint)
						   ->get()
						   ->result();
			return $ubah;
		}

		function ubah_simpan() {
			$id = $this->input->post('id_hint');
			$data = array(
					'pertanyaan' => $this->input->post('pertanyaan')
				);
			$this->db->where('id_hint',$id);
			$this->db->update('tb_hint',$data);

			?><script>window.location = "<?= site_url('C_hint') ?>";</script><?php
		}

		function hapus($id_hint) {
			$this->db->where('id_hint',$id_hint)
					 ->delete('tb_hint');
		}
	}
?>