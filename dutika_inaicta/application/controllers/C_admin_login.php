<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class C_admin_login extends CI_Controller {
		function __construct() {
			parent::__construct();

			$this->load->model('m_admin_login');

			$session = $this->session->userdata('admin');

		}

		function index() {
			$session = $this->session->userdata('admin');
			if (empty($session)) {
				$this->load->view('v_admin_login');
			} else {
				redirect('c_user','refresh');
			}
				
		}

		function proses_login() {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek = $this->m_admin_login->cek($username,$password);

			if (count($cek) == 1) {
				$this->session->set_userdata(array(
						'admin'	=> $username
					));

				redirect('c_user','refresh');
			} else {
				?><script>alert('Username atau password salah!'); window.history.back();</script><?php 
			}

		}
	}
?>