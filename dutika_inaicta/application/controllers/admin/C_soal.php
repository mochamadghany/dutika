<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_soal extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/m_soal');

		$session = $this->session->userdata('admin');
		if (empty($session)) {
			?><script>alert('Harap masuk terlebih dahulu!'); window.location = 'c_admin_login';</script><?php
		}
	}
	function cek()
	{
		if($this->username==""){
			echo"
				<script>alert('harap login')</script>";
				redirect('user/c_login','refresh');

		}
	}

	public function index()
	{
			//fungsi melihat semua soal
		
		$alert = $this->session->userdata('alert');
        if($alert=='3')
        {
            $pesan = '3';
        }
        elseif($alert=='2')
        {
            $pesan = '2';
        }
        elseif($alert=='1')
        {
            $pesan = '1';
        }
        else
        {
            $pesan ='';
        }

        $jumlah= $this->m_soal->jumlah('tb_soal');

		$dari = $this->uri->segment(4);
		$data = array(
			'kategori' => $this->m_soal->lihatdaftarsoal(),
			'pesan'	=>$pesan,
			);
        $this->session->unset_userdata('alert');
		$this->load->view('admin/soal/data',$data);
	}

	function tambah_soal() {
		$listkategori = array(
			'kategori' => $this->m_soal->listkategori(),
			'lang' => $this->m_soal->language(),
			'jumlah_lang' => $this->m_soal->jumlahbahasa(),
		);
		//var_dump($listkategori['kategori']);
		$this->load->view('admin/soal/tambah', $listkategori);
	}

	//fungsi untuk menambahkan soal
	public function tambahsoalpost() {
		$this->m_soal->simpansoal();
		$this->session->set_userdata(array(
                'peringatan'   => TRUE, //set data telah login
                'alert'  => 3, //set session username
            ));
		redirect('admin/C_soal/index');
	}

	function logout()
	{
		$this->session->unset_userdata('isloginuser');
		redirect('user/c_login','refresh');
	}
}
