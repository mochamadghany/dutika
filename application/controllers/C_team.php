<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_team extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->model('user/M_login');

	}

	public function index()	{
		$hint = $this->M_login->hint();
			$data = array(
				'hint'	=>$hint);
		$this->load->view('v_profile_team',$data);
	}
}
