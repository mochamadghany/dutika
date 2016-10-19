<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_level extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->admin = 'tb_admin';
	}

	function ambiluser($iduser) {
		$q = $this->db->select('*')
					 ->select('tb_user_score.score as iniscoreuser')
					  ->from('tb_user_level')
					  ->join('tb_user_score','tb_user_score.id_user_score = tb_user_level.id_user_score')
					  ->join('tb_user','tb_user.id_user = tb_user_score.id_user')
					  ->join('tb_level','tb_level.id_level = tb_user_level.id_level')
					  ->where('tb_user.id_user', $iduser)
					  ->get()
					  ->result();
		return $q;
	}

	function ambiltblevel() {
		$q = $this->db->select('*')
					->from('tb_level')
					->get();
		$q = $q->result();
		return $q;
	}
	 function tampil_bahasa()
    {
        $this->db->select('*');
        $this->db->order_by('language');
        $this->db->from('tb_language');
        $query = $this->db->get();
        $result = $query->result();
        return $result;   
    }
	function ambilbatasxp($level) {
		$q = $this->db->select('*')
					  ->from('tb_level')
					  ->where('level', $level)
					  ->get()
					  ->result();
		return $q;
	}

	function autolevel() {
		$q = $this->db->select_max('level')
					  ->from('tb_level')
					  ->get();
		$q = $q->result();
		return $q[0]->level;
	}

	function lvlup($id, $lvl) {
		$q = $this->db->select('*')
					  ->from('tb_user_level')
					  ->join('tb_user_score','tb_user_score.id_user_score = tb_user_level.id_user_score')
					  ->join('tb_user','tb_user.id_user = tb_user_score.id_user')
					  ->join('tb_level','tb_level.id_level = tb_user_level.id_level')
					  ->where('tb_user.id_user', $id)
					  ->get()
					  ->result();
		foreach ($q as $soni) {
			$id_user_score = $soni->id_user_score;
		}
			$data = array(
				'id_level' => $lvl,
				);
				$this->db->where('id_user_score', $id_user_score);
				$this->db->update('tb_user_level', $data);
		return true; 
		}

		function dapetxp($id,$xp,$xpnya_score_level,$coinnya) {
			$q = $this->db->select('*')
					  ->from('tb_user_level')
					  ->join('tb_user_score','tb_user_score.id_user_score = tb_user_level.id_user_score')
					  ->join('tb_user','tb_user.id_user = tb_user_score.id_user')
					  ->join('tb_level','tb_level.id_level = tb_user_level.id_level')
					  ->where('tb_user.id_user', $id)
					  ->get()
					  ->result();

			foreach ($q as $soni) {
				$id_user_score = $soni->id_user_score;
			}

			$data = array(
				'coin' => $coinnya,
				'score' => $xp,
				'score_level' => $xpnya_score_level,
				);

				$this->db->where('id_user_score', $id_user_score);
				$this->db->update('tb_user_score', $data);
		return true;
		}

		function dapetxp_lvlup($id, $xp ,$coinnya) {
			$q = $this->db->select('*')
					  ->from('tb_user_level')
					  ->join('tb_user_score','tb_user_score.id_user_score = tb_user_level.id_user_score')
					  ->join('tb_user','tb_user.id_user = tb_user_score.id_user')
					  ->join('tb_level','tb_level.id_level = tb_user_level.id_level')
					  ->where('tb_user.id_user', $id)
					  ->get()
					  ->result();
			foreach ($q as $soni) {
				$id_user_score = $soni->id_user_score;
			}

			$data = array(
				'coin' => $coinnya,
				'score' => $xp,
				);
				$this->db->where('id_user_score', $id_user_score);
				$this->db->update('tb_user_score', $data);
		return true;
		}

		function dapetxp_levelup($id, $xp ,$coinnya , $realxp) {
			$q = $this->db->select('*')
					  ->from('tb_user_level')
					  ->join('tb_user_score','tb_user_score.id_user_score = tb_user_level.id_user_score')
					  ->join('tb_user','tb_user.id_user = tb_user_score.id_user')
					  ->join('tb_level','tb_level.id_level = tb_user_level.id_level')
					  ->where('tb_user.id_user', $id)
					  ->get()
					  ->result();
			foreach ($q as $soni) {
				$id_user_score = $soni->id_user_score;
			}

			$data = array(
				'coin' => $coinnya,
				'score' => $xp,
				'score_level'	=> $realxp,
				);
				$this->db->where('id_user_score', $id_user_score);
				$this->db->update('tb_user_score', $data);
		return true;
		}

		function levelup($id, $lvlnya) {
			$q = $this->db->select('*')
					  ->from('tb_user_level')
					  ->join('tb_user_score','tb_user_score.id_user_score = tb_user_level.id_user_score')
					  ->join('tb_user','tb_user.id_user = tb_user_score.id_user')
					  ->join('tb_level','tb_level.id_level = tb_user_level.id_level')
					  ->where('tb_user.id_user', $id)
					  ->get()
					  ->result();
			foreach ($q as $soni) {
				$id_user_score = $soni->id_user_score;
			}

			$data = array(
				'id_level' => $lvlnya,
				);

				$this->db->where('id_user_score', $id_user_score);
				$this->db->update('tb_user_level', $data);

		return true;
		}
}