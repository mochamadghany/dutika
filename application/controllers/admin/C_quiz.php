<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_quiz extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->library('session');
		$this->load->model('admin/m_quiz');

		$session = $this->session->userdata('admin');
		if (empty($session)) {
			?><script>alert('Harap masuk terlebih dahulu!'); window.location = 'c_admin_login';</script><?php
		}
	}


	private function cek()  
	{

		if ($this->cek_stat=="") 
		{
			echo "<script>alert('Anda belum login!');</script>";
			redirect('login','refresh');
		}
	}


	public function search_ajax() {
		$idkategori = $this->uri->segment(4);

		$fahmi = array();
		$this->db->select('*');
			$this->db->from('tb_soal');
				$this->db->join('tb_soal_language', 'tb_soal_language.id_soal = tb_soal.id');
					$this->db->where('tb_soal.id_level', $idkategori);
					$this->db->where('tb_soal_language.id_language', '1');
		
		$q = $this->db->get();
		$q = $q->result();
		// var_dump($q);
				
				// foreach ($q as $mi) {
				// 	$data = array(
				// 			array(
				// 			'id' => $q->id,
				// 			'soal' => $q->soal,
				// 			),
				// 		);
				// }
			
		echo json_encode($q);
	}



	public function ubahsoal() {
		$id = $this->uri->segment(4);
		$ambil_akun = $this->m_login->ambil_member($this->session->userdata('username'));
		
		$data = array(
			'kategori' => $this->m_quiz->listkategori(),
			'user'  => $this->seson,
			'id' => $id,
			'lang' => $this->m_quiz->language(),
			'jumlah_lang' => $this->m_quiz->jumlahbahasa(),
			'isiantbsoal' => $this->m_quiz->ambiltbsoal($id),
			'isiantbsoallang' => $this->m_quiz->ambiltbsoallang($id),
			'isiantbsoaljaw' => $this->m_quiz->ambiltbsoaljaw($id)
		);
		
		
		$this->load->view('Admin/v_ubahsoal', $data);
	}

	public function ubahsoalpost() {
		$id = $this->uri->segment(4);
		$ambil_akun = $this->m_login->ambil_member($this->session->userdata('username'));
		
		$this->m_quiz->ubahsoalpost($id);
		$this->session->set_userdata(array(
				'peringatan'   => TRUE, //set data telah login
				'alert'  => 2, //set session username
			));   
		redirect('admin/c_quiz/daftarsoal');
	}

	public function hapussoal() {
		$id = $this->uri->segment(4);
		$ambil_akun = $this->m_login->ambil_member($this->session->userdata('username'));
		
		$this->m_quiz->hapussoal($id);
		$this->session->set_userdata(array(
				'peringatan'   => TRUE, //set data telah login
				'alert'  => 1, //set session username
			));
		redirect('admin/c_quiz/daftarsoal');
	}


	//halaman tambah kategori
	public function tambahkategori() {
		$data = array(
			'user' => $this->seson
			);
		$this->load->view('Admin/tambahkategori', $data);
	}


	//fungsi untuk menambahkan kategori
	public function tambahkategoripost() {
		
		$this->m_quiz->simpankategori();

		redirect('admin/c_quiz/tambahkategori');
	}

	//fungsi melihat semua soal
	public function daftarsoal() {
		$ambil_akun = $this->m_login->ambil_member($this->session->userdata('username'));
		
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

		$jumlah= $this->m_quiz->jumlah('tb_soal');
		$dari = $this->uri->segment(4);
		$data = array(
			'kategori' => $this->m_quiz->lihatdaftarsoal(),
			'user' => $this->seson,
			'pesan'	=>$pesan,
			);
		$this->session->unset_userdata('alert');
		$this->load->view('Admin/daftarsoal', $data);
	}


	public function daftarquiz() {
		
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
			$jumlah= $this->m_quiz->jumlah('tb_quiz');
	 
			
			$dari = $this->uri->segment(4);
			$data = array(
				'kategori' => $this->m_quiz->lihatdaftarquiz(),
				'pesan'	=>$pesan
				);
			$this->session->unset_userdata('alert');
			$this->load->view('admin/quiz/data', $data);
		}



	//fungsi melihat semua kategori
	public function daftarkategori() {
		

		$jumlah= $this->m_quiz->jumlah('tb_kategori_quiz');
 
		$config['base_url'] = base_url().'admin/c_quiz/daftarsoal/';
		$config['total_rows'] = $jumlah;
		$config['per_page'] = 10;
		$config['attributes'] = array('class' => 'btn btn-default');
		$config['full_tag_open'] = '<div class="btn-group">';
		$config['full_tag_close'] = '</div>';
		$config['cur_tag_open'] = '<button type="button" class="btn btn-danger">';
		$config['cur_tag_close'] = '</button>';
		$config['first_link'] = 'Awal';
		$config['last_link'] = 'Akhir'; 		
 
		
		$dari = $this->uri->segment(4);
		$data = array(
			'kategori' => $this->m_quiz->lihat($config['per_page'],$dari,'tb_kategori_quiz'),
			'user' => $this->seson
			);
		$this->pagination->initialize($config); 

		$this->load->view('Admin/daftarkategori', $data);
	}



	//fungsi untuk menambahkan soal
	public function tambahsoalpost() {
		
		$this->m_quiz->simpansoal();
		$this->session->set_userdata(array(
				'peringatan'   => TRUE, //set data telah login
				'alert'  => 3, //set session username
			));
		redirect('admin/c_quiz/daftarsoal');
	}


	//halaman untuk mengubah kategori quiz
	public function ubahkategori(){
		$id = $this->uri->segment(4);
		
		$data = array(
			'user' => $this->seson,
			'mydata' => $this->m_quiz->ubahkategori($id)
			); 
		$this->load->view('Admin/ubahkategori', $data);
	}


	//fungsi untuk mengubah kategori quiz
	public function ubahkategoripost(){
		$id = $this->uri->segment(4);
		
		$this->m_quiz->ubahkategoripost($id);
		redirect('admin/c_quiz/daftarkategori');
	}


	//untuk menghapus kategori quiz
	public function hapuskategori(){
		$id = $this->uri->segment(4);
		
		$this->m_quiz->hapuskategori($id);
		redirect('admin/c_quiz/daftarkategori');
	}

	public function tambahquiz(){
		
		$data = array(
			'level' => $this->m_quiz->listkategori()
			);
		$this->load->view('admin/quiz/tambah', $data);
	}


	public function tambahquizpost() {
		
		$this->m_quiz->buatquiz();
		$this->session->set_userdata(array(
				'peringatan'   => TRUE, //set data telah login
				'alert'  => 3, //set session username
			));
		redirect('admin/c_quiz/daftarquiz');
	}

	public function ubahquiz() {
		
		$id = $this->uri->segment(4);
		$data = array(
			'id' => $id,
			'user' => $this->session,
			'data' => $this->m_quiz->dataquiz($id),
			'kategori' => $this->m_quiz->listkategori(),
			'soal1' => $this->m_quiz->datasoaluntukquiz('soal1',$id),
			'soal2' => $this->m_quiz->datasoaluntukquiz('soal2',$id),
			'soal3' => $this->m_quiz->datasoaluntukquiz('soal3',$id),
			'soal4' => $this->m_quiz->datasoaluntukquiz('soal4',$id),
			'soal5' => $this->m_quiz->datasoaluntukquiz('soal5',$id),
			'quiz' => $this->m_quiz->ubahsoalquiz($id)
			);

		$this->load->view('admin/quiz/ubah', $data);
	}
	function ubah_simpan(){
		$this->m_quiz->ubah_simpan();
		redirect('admin/c_quiz/daftarquiz','refresh');
	}
	public function ubahquizpost() {
		$id = $this->uri->segment(4);
		
		$this->m_quiz->ubahquiz($id);
$this->session->set_userdata(array(
				'peringatan'   => TRUE, //set data telah login
				'alert'  => 2, //set session username
			));
		redirect('admin/c_quiz/daftarquiz');
	}

	public function hapusquiz() {
		$id = $this->uri->segment(4);
		
		$this->m_quiz->hapusquiz($id);
		$this->session->set_userdata(array(
				'peringatan'   => TRUE, //set data telah login
				'alert'  => 1, //set session username
			));
		redirect('admin/c_quiz/daftarquiz');
	}

	public function pilihquiz() {
		

		$jumlah= $this->m_quiz->jumlah('tb_quiz');
 
		$config['base_url'] = base_url().'admin/c_quiz/daftarsoal/';
		$config['total_rows'] = $jumlah;
		$config['per_page'] = 10;
		$config['attributes'] = array('class' => 'btn btn-default');
		$config['full_tag_open'] = '<div class="btn-group">';
		$config['full_tag_close'] = '</div>';
		$config['cur_tag_open'] = '<button type="button" class="btn btn-danger">';
		$config['cur_tag_close'] = '</button>';
		$config['first_link'] = 'Awal';
		$config['last_link'] = 'Akhir'; 		
 
		
		$dari = $this->uri->segment(4);
		$data = array(
			'kategori' => $this->m_quiz->lihatdaftarquiz($config['per_page'],$dari),
			'user' => $this->seson
			);
		$this->pagination->initialize($config); 

		$this->load->view('Admin/v_pilihquiz', $data);
	}

	public function jawab(){
		$idquiz = $this->uri->segment(4);
		
		$getidsoal = $this->m_quiz->ambilsoaldariquiz($idquiz);
		$data = array(
			'user' => $this->seson,
			'soalsoal' => $this->m_quiz->inibarusoal($getidsoal),
			'idquiznya' => $idquiz
			);
		// var_dump($data['soalsoal']);
		// exit();
		$this->load->view('Admin/v_jawabquiz', $data);
	}

	public function quiz_ajax() {
		$idquiz = $this->uri->segment(4);
		
		$getidsoal = $this->m_quiz->ambilsoaldariquiz($idquiz);	
		$soal = $this->m_quiz->inibarusoal($getidsoal);
		
		$i = 1;
		$benar = 0;
		$salah = 0;
		$takterjawab = 0;
		$xp = 0;

		foreach ($soal as $jawabeuy) {
			if($jawabeuy->jawaban == $_POST["jawaban".$i]){
				$benar++;
				$xp=$xp+$jawabeuy->xp;
			}else if($_POST["jawaban".$i] == "Z"){
				$takterjawab++;
			}else{
				$salah++;
			}
		$i++;	
		}

		//rumus matematika untuk lvling
		$cek = $this->m_quiz->cek_disable($iduser, $idquiz);
		if ($cek == 0) {
			$lvl = $this->m_level->ambiluser($iduser);
			$batasxp = $this->m_level->ambilbatasxp($lvl[0]->level);
			$xpnya = $lvl[0]->xp + $xp;

				if($xpnya == $batasxp){
					$lvlnya = $lvl[0]->level + 1;
				}else if($xpnya < $batasxp){
					$xpnya;
				}else if($xpnya > $batasxpnya){
					$lvlnya = $lvl[0]->level + 1;
					$realxp = $xpnya - $batasxp;
				}

			
			$this->m_quiz->tb_disable($iduser, $idquiz);
			
			echo "<div id='hasil'>";

			 echo " Jawaban Benar  : <span class='highlight'>". $benar."</span><br>";

			 echo " Jawaban Salah  : <span class='highlight'>". $salah."</span><br>";

			 echo " Tidak Terjawab  : <span class='highlight'>". $takterjawab."</span><br>";

			 echo " XP Yang Diperoleh : ". $xp ." ";

			echo "</div>";

		} else if($cek > 0) {

		echo "<div id='hasil'>";

		 echo " Jawaban Benar  : <span class='highlight'>". $benar."</span><br>";

		 echo " Jawaban Salah  : <span class='highlight'>". $salah."</span><br>";

		 echo " Tidak Terjawab  : <span class='highlight'>". $takterjawab."</span><br>";

		 echo " XP Yang Diperoleh : ". $xp ." ";

		echo "</div>";
		}
		
	}

		
}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */