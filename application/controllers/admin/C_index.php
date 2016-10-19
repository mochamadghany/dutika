<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class C_index extends CI_Controller{
		function __construct() {
			parent::__construct();
			$this->load->model('admin/M_index');
		}
		function index()
		{
			$tampil_level = $this->M_index->data_level(); 
			$data=array(
			'level' => $tampil_level,
			);
			$this->load->view('admin/v_index',$data);
		}
	}