<?php
	class M_admin_login extends CI_Model {
		function __construct() {
			parent::__construct();

			$this->tbl = "tb_admin";
		}

		function cek($username,$password) {
			$cek = $this->db->get_where($this->tbl,array('username' => $username, 'password' => $password));
			$cek = $cek->result_array();
			return $cek;
		}
	}
?>