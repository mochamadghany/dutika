<?php
class M_tampilskl extends CI_Model{
	function tampilskl(){
		$q = $this->db->select('*')
					  ->from('tb_user_level')
					  ->join('tb_user_score','tb_user_score.id_user_score=tb_user_level.id_user_score')
					  ->join('tb_user','tb_user.id_user=tb_user_score.id_user')
					  ->join('tb_level','tb_level.id_level=tb_user_level.id_level')
					  // ->where('tb_user.id_user',$skl)
					  ->get()
					  ->result();
		return $q;
	}
	function ubah($skl){
		$u = $this->db->select('*')
					  ->from('tb_user_level')
					  ->join('tb_user_score','tb_user_score.id_user_score=tb_user_level.id_user_score')
					  ->join('tb_user','tb_user.id_user=tb_user_score.id_user')
					  ->join('tb_level','tb_level.id_level=tb_user_level.id_level')
					  ->where('tb_user.id_user',$skl)
					  ->get()
					  ->result();
		return $u;
	}
	function ubah_simpan(){
		if ($this->input->post('ubah')) {
			$id_user_score = $this->input->post('id_user_score');
			$id_level = $this->input->post('id_level');
			$data = array(
				'coin'		=> $this->input->post('coin'),
				'score'		=> $this->input->post('score'),
				);

			$this->db->where('id_user_score',$id_user_score);
			$this->db->update('tb_user_score',$data);

			$data2 = array(
				'tingkat'	=> $this->input->post('tingkat')
				);

			$this->db->where('id_level',$id_level);
			$this->db->update('tb_level',$data2);
			
		}
		echo "
			<script>alert('Data berhasil terubah')</script>
			";
	}
	function hapus($id_user){
		// $id_user_level = $this->uri->segment(4);
		$this->db->where('id_user_level',$id_user);
		$this->db->delete('tb_user_level');
		echo "<script>alert('Data berhasil terhapus')</script>";
	}
}
?>