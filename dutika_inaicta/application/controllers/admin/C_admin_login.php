<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class C_admin_login extends CI_Controller {
		function __construct() {
			parent::__construct();

			$session = $this->session->userdata('admin');

			$this->load->model('admin/m_admin_login');
			// $this->load->model('admin/M_index');
			
			foreach ($ambil_akun as $q){
				$id_user = $q->id_user;
			}
			$this->id_user = $id_user;
			$this->user = $ambil_akun;
			$this->cek();
		}

		function index() {
			$session = $this->session->userdata('admin');
			if (empty($session)) {
				$this->load->view('admin/v_admin_login');
			} else {
				redirect('admin/c_index','refresh');
			}
				
		}

		function proses_login() {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek = $this->M_admin_login->cek($username,$password);

			if (count($cek) == 1) {
				$this->session->set_userdata(array(
						'admin'	=> $username
					));

				redirect('admin/c_index/index','refresh');
			} else {
				?><script>alert('Username atau password salah!'); window.history.back();</script><?php 
			}

		}
	}
?>