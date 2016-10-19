<?php
	class M_index extends CI_Model{
		function data_level(){
			$q = $this->db->select('*')
						  ->from('tb_level')
						  ->get()
						  ->result();
			return $q;
		}
	}
?>