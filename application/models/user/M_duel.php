<?php
	class M_duel extends CI_Model {
		function cek_room() {
			$p = $this->db->select('*')
						  // ->select_max('nomer_room')
						  ->from('tb_room')
						  ->get()
						  ->result();
			return $p;
		}

		function cek_room_ada() {
			$p = $this->db->select('*')
						  ->from('tb_room')
						  ->limit(1)
						  ->order_by('tb_room.nomer_room','desc')
						  ->get()
						  ->result();
			return $p;
		}
		function cek_id_user($id_user) {
			$p = $this->db->select('*')
						  ->from('tb_duel')
						  ->where('id_user1',$id_user)
						  ->get()
						  ->result();
			return $p;
		}
		function cek_id_user2($id_user) {
			$p = $this->db->select('*')
						  ->from('tb_duel')
						  ->where('id_user2',$id_user)
						  ->get()
						  ->result();
			return $p;
		}

		function simpan_find_pertama($id_anggota) {
			$satu = 1;
			$nol = 0;
			$data = array(
					'nomer_room' => $satu,
					'id_anggota1' => $id_anggota,
					'status1' => $satu,
					'id_anggota2' => $nol,
					'status2' => $nol,
					'hasil_status' => $nol,
				);
			$this->db->insert('tb_room',$data);
		}
		function update_duel1($id_duel,$status)
		{
			  $data = array(
                'status1'   =>  $status,
                );
                $exe1 = $this->db->where('id_duel', $id_duel);
                $exe1 = $this->db->update('tb_duel', $data);   
		    return true;
		}
		function update_duel2($id_duel,$status)
		{
			  $data = array(
                'status2'   =>  $status,
                );
                $exe1 = $this->db->where('id_duel', $id_duel);
                $exe1 = $this->db->update('tb_duel', $data);   
		    return true;
		}
		function simpan_find_pertama_ada($id_anggota,$nomer) {
			$nol = 0;
			$satu =1;
			$data = array(
					'nomer_room' => $nomer,
					'id_anggota1' => $id_anggota,
					'status1' => $satu,
					'id_anggota2' => $nol,
					'status2' => $nol,
					'hasil_status' => $nol,
				);
			$this->db->insert('tb_room',$data);
		}

		function simpan_find_kedua($id_anggota1,$id_anggota,$nomer_room) {
			$satu = 1;
			$nol = 0;
			$data = array(
					'id_anggota2' => $id_anggota,
					'status2' => $satu,
					'hasil_status' => $satu,
				);
			$this->db->where('id_anggota1',$id_anggota1)
					 ->update('tb_room',$data);
		}

		function cek_hasil_find1($id_user) {
			$where = "id_anggota1='".$id_user."' OR id_anggota2='".$id_user."'";
			$p = $this->db->select('*')
						  ->from('tb_room')
						  ->where($where)
						  ->get()
						  ->result();
			return $p;
		}

		function tampil_pemain($id_pemain) {
			$q = $this->db->select('*')
						  ->from('tb_user_level')
						  ->join('tb_user_score','tb_user_score.id_user_score = tb_user_level.id_user_score')
						  ->join('tb_user','tb_user.id_user = tb_user_score.id_user')
						  ->join('tb_level','tb_level.id_level = tb_user_level.id_level')
						  ->where('tb_user.id_user', $id_pemain)
						  ->get()
						  ->result();
			return $q;
		}

		
		function ambil_room($id_user)
		{
			$where = "tb_room.id_anggota1='".$id_user."'";
			$p = $this->db->select('*')
						->select('tb_user_score.score as score_user')
						  ->from('tb_room')
						  ->join('tb_user','tb_user.id_user = tb_room.id_anggota1')
						  ->join('tb_user_score','tb_user_score.id_user = tb_user.id_user')
						  ->join('tb_user_level','tb_user_level.id_user_score = tb_user_score.id_user_score')
						  ->join('tb_level','tb_level.id_level = tb_user_level.id_level')
						  ->where($where)
						  ->get()
						  ->result();
			return $p;
		}

		function ambil_room2($id_user)
		{
			$where = "tb_room.id_anggota2='".$id_user."'";
			$p = $this->db->select('*')
						->select('tb_user_score.score as score_user')
						  ->from('tb_room')
						  ->join('tb_user','tb_user.id_user = tb_room.id_anggota2')
						  ->join('tb_user_score','tb_user_score.id_user = tb_user.id_user')
						  ->join('tb_user_level','tb_user_level.id_user_score = tb_user_score.id_user_score')
						  ->join('tb_level','tb_level.id_level = tb_user_level.id_level')
						  ->where($where)
						  ->get()
						  ->result();
			return $p;
		}

		function ambil_profil_lawan($id_anggota_lawan)
		{
			$p = $this->db->select('*')
						->select('tb_user_score.score as score_user')
						  ->from('tb_user_level')
						  ->join('tb_user_score','tb_user_score.id_user_score = tb_user_level.id_user_score')
						  ->join('tb_user','tb_user.id_user = tb_user_score.id_user')
						  ->join('tb_level','tb_level.id_level = tb_user_level.id_level')
						  ->where('tb_user.id_user',$id_anggota_lawan)
						  ->get()
						  ->result();
			return $p;
		}

		function data_duel($last_id)
		{
			$p = $this->db->select('*')
						->select('tb_user_score.score as score_user')
						  ->from('tb_user_level')
						  ->join('tb_user_score','tb_user_score.id_user_score = tb_user_level.id_user_score')
						  ->join('tb_user','tb_user.id_user = tb_user_score.id_user')
						  ->join('tb_duel','tb_duel.id_user1 = tb_user.id_user')
						  // ->join('tb_duel','tb_duel.id_user2 = tb_user.id_user')
						  ->join('tb_level','tb_level.id_level = tb_user_level.id_level')
						  ->where('tb_duel.id_duel',$last_id)
						  ->get()
						  ->result();
			return $p;
		}
		function data_duel2($last_id)
		{
			$p = $this->db->select('*')
						->select('tb_user_score.score as score_user')
						  ->from('tb_user_level')
						  ->join('tb_user_score','tb_user_score.id_user_score = tb_user_level.id_user_score')
						  ->join('tb_user','tb_user.id_user = tb_user_score.id_user')
						  // ->join('tb_duel','tb_duel.id_user1 = tb_user.id_user')
						  ->join('tb_duel','tb_duel.id_user2 = tb_user.id_user')
						  ->join('tb_level','tb_level.id_level = tb_user_level.id_level')
						  ->where('tb_duel.id_duel',$last_id)
						  ->get()
						  ->result();
			return $p;
		}

		function hapus_room1($id_user){
			$this->db->where('id_anggota1',$id_user)
					 ->delete('tb_room');
		}

		function hapus_room2($id_user){
			$this->db->where('id_anggota2',$id_user)
					 ->delete('tb_room');
		}
		function hapus_room_user($duel_id_room)
		{
			$this->db->where('id_room',$duel_id_room)
					 ->delete('tb_room');
		}

	}
?>