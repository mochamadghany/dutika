<?php
	Class M_login extends CI_model{
		function __construct() {
			parent::__construct();
			$this->tbl ="tb_user";
		}
		
		function user($username,$password) {
			$cek=$this->db->get_where($this->tbl,array('username'=>$username,'password'=>$password));
			$cek=$cek->result_array();
			return $cek;
		}

		function cek_verifikasi($username,$password) {
			$cek_verifikasi=$this->db->get_where($this->tbl,array('username'=>$username,'password'=>$password,'status'=>1));
			$cek_verifikasi=$cek_verifikasi->result_array();
			return $cek_verifikasi;
		}

		function hint() {
			$u = $this->db->select('*')
						  ->from('tb_hint')
						  ->get()
						  ->result();
			return $u;
		}
			
		function ambil_user($username) {
			$query=$this->db->get_where($this->tbl,array('username'=>$username));
			$query=$query->result();
			return $query;
		}
	}
?>

