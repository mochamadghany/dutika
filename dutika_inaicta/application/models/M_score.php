<?php
	class M_score extends CI_Model {
		function score($id_user) {       
				$q=$this->db->select('*')
					->select('tb_user_score.score as scoree')
					->from('tb_user_level')
					->join('tb_user_score','tb_user_score.id_user_score = tb_user_level.id_user_score')
					->join('tb_level','tb_level.id_level = tb_user_level.id_level')
					->join('tb_user','tb_user.id_user = tb_user_score.id_user')
					->where('tb_user.id_user',$id_user)
					->get()
					->result();
		return $q;
							
	}
}
