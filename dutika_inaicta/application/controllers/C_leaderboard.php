<!-- Kelas Controller adalah sebuah kelas yang disediakan Framework Codeigniter untuk melakukan kontrol terhadap tampilan atau interface web baik pemanggilan,perubahan, dan lain sebagainya. selain itu pada kelas Controller ini kita juga dapat memanggil fungsi CRUD (Create,Read,Update,Delete) dalam pengolahan database. -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Leaderboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_leaderboard');
	}

	public function index()
	{
		$this->load->view('v_leaderboard');
	}
	function score(){
		$this->load->view('v_top_score');
	}
	function level(){
		$this->load->view('v_top_level');
	}
	function win(){
		$this->load->view('v_top_win');
	}

}
?>