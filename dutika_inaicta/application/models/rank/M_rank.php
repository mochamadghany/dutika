<?php
	class M_rank extends CI_Model {
		function rank_score() {
				$q=$this->db->select('*')
					->select('tb_user_score.score as scoree')
					->from('tb_user_level')
					->join('tb_user_score','tb_user_score.id_user_score = tb_user_level.id_user_score')
					->join('tb_user','tb_user.id_user = tb_user_score.id_user')
					->join('tb_level','tb_level.id_level = tb_user_level.id_level')
					->limit(10)
					// ->where('tb_user_score','score')
					->order_by('tb_user_score.score','desc')
					// ->select_max('tb_user_score.score','score')
					->get()
					->result();
		return $q;
							
	}

	function rank_coin() {
				$q=$this->db->select('*')
					->from('tb_user_level')
					->join('tb_user_score','tb_user_score.id_user_score = tb_user_level.id_user_score')
					->join('tb_level','tb_level.id_level = tb_user_level.id_level')
					->join('tb_user','tb_user.id_user = tb_user_score.id_user')
					->order_by('tb_user_score.coin','desc')
					->limit(10)
					->get()
					->result();
		return $q;
							
	}
}
