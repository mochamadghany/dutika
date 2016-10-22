<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_quiz extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->admin = 'tb_admin';
		$this->gallery_path = realpath(APPPATH. '../images/user/cover');
		$this->gallery_path_url = base_url(). 'images/user/cover';
	}

		function language() {
			$this->db->select('*');
			$q = $this->db->get('tb_language');
			$q = $q->result();

			return $q;
		}

		function jumlahbahasa() {
			return $this->db->get('tb_language')->num_rows();
		}

		function saveregister() {
			$password=$this->input->post('password');
			$passwordx=md5($password);


			$data = array(
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => $passwordx,
				);
				$this->db->insert('admin', $data);
			return true;
		}

		function login() {
		$username = $this->input->post('username'); 
		$password = $this->input->post('password'); 
		//$passwordx = md5($password);
			$this->db->select('*');
			$q = $this->db->where('username', $username);
			$q = $this->db->where('password', $password);
			$q = $this->db->get($this->admin);
			$q = $q->result_array();
			
			return $q;
			
		}

		function simpankategori() {
			$kategori = $this->input->post('kategori_quiz');
			$data = array(
				'kategori_quiz' => $kategori
				);
			$this->db->insert('tb_level', $data);

			return true;
		}

		function simpansoal() {
			
			$kategori = $this->input->post('kategori');
			$xp = $this->input->post('xp');
			$jawabanbenar = $this->input->post('jawabanbenar');
			$jumlahbahasa = $this->m_quiz->jumlahbahasa();

			for ($i=1; $i <= $jumlahbahasa ; $i++) { 
					${"jawabana$i"} = $this->input->post('jawabana'.$i.'');
					${"jawabanb$i"} = $this->input->post('jawabanb'.$i.'');
					${"jawabanc$i"} = $this->input->post('jawabanc'.$i.'');
					${"jawaband$i"} = $this->input->post('jawaband'.$i.'');
				}


			if ($jawabanbenar == "A") {
				$jawabanbenartext = $jawabana1;
			}elseif ($jawabanbenar == "B") {
				$jawabanbenartext = $jawabanb1;
			}elseif ($jawabanbenar == "C") {
				$jawabanbenartext = $jawabanc1;
			}elseif ($jawabanbenar == "D") {
				$jawabanbenartext = $jawaband1;
			}


			

			$data1 = array(
						'xp' => $xp,
						'jawaban' => $jawabanbenar,
						'jawaban_text_benar' => $jawabanbenartext,
						'id_level' => $kategori
					);

					$exe1 = $this->db->insert('tb_soal', $data1);

			$q = $this->db->select_max('id');
			$q = $this->db->get('tb_soal');
			$q = $q->result(); 
			$lastid_soal = $q['0']->id;//ambil last id dari tabel soal



				for ($x=1; $x <= $jumlahbahasa ; $x++) { 
					${"soal$x"} = $this->input->post('soal'.$x.'');
				}	



				for ($h=1; $h <= $jumlahbahasa ; $h++) { 

					$exe2 = $this->db->query("INSERT INTO tb_soal_language(id_soal,soal,id_language) VALUES 
					('".$lastid_soal."','".${"soal$h"}."','".$h."')");	
				}
				
				for ($k=1; $k <= $jumlahbahasa ; $k++) { 
					$exe3 = $this->db->query("INSERT INTO tb_jawaban(jawaban_texta,jawaban_textb,jawaban_textc,jawaban_textd,id_soal,id_language) VALUES 
					('".${"jawabana$k"}."','".${"jawabanb$k"}."','".${"jawabanc$k"}."','".${"jawaband$k"}."','".$lastid_soal."','".$k."')");
				}
			
			return true;
		}

		function ubahsoalpost($id){
			$kategori = $this->input->post('kategori');
			$xp = $this->input->post('xp');
			$jawabanbenar = $this->input->post('jawabanbenar');
			$jumlahbahasa = $this->m_quiz->jumlahbahasa();

			for ($i=1; $i <= $jumlahbahasa ; $i++) { 
					${"jawabana$i"} = $this->input->post('jawabana'.$i.'');
					${"jawabanb$i"} = $this->input->post('jawabanb'.$i.'');
					${"jawabanc$i"} = $this->input->post('jawabanc'.$i.'');
					${"jawaband$i"} = $this->input->post('jawaband'.$i.'');
				}


			if ($jawabanbenar == "A") {
				$jawabanbenartext = $jawabana1;
			}elseif ($jawabanbenar == "B") {
				$jawabanbenartext = $jawabanb1;
			}elseif ($jawabanbenar == "C") {
				$jawabanbenartext = $jawabanc1;
			}elseif ($jawabanbenar == "D") {
				$jawabanbenartext = $jawaband1;
			}


			

			$data1 = array(
						'jawaban' => $jawabanbenar,
						'jawaban_text_benar' => $jawabanbenartext,
						'id_level' => $kategori,
						'xp' => $xp
					);

					$exe1 = $this->db->where('id', $id);
					$exe1 = $this->db->update('tb_soal', $data1);
					

			
				for ($x=1; $x <= $jumlahbahasa ; $x++) { 
					${"soal$x"} = $this->input->post('soal'.$x.'');
				}	



				for ($h=1; $h <= $jumlahbahasa ; $h++) { 

					$exe2 = $this->db->query("UPDATE tb_soal_language SET soal='".${"soal$h"}."' WHERE id_soal='".$id."' AND id_language='".$h."'");	
				}
				
				for ($k=1; $k <= $jumlahbahasa ; $k++) { 
					$exe3 = $this->db->query("UPDATE tb_jawaban SET jawaban_texta='".${"jawabana$k"}."',jawaban_textb='".${"jawabanb$k"}."'
						,jawaban_textc='".${"jawabanc$k"}."',jawaban_textd='".${"jawaband$k"}."'  
							WHERE id_soal='".$id."' AND id_language='".$k."'");
				}
			
			return true;
		}

		function hapussoal($id) {
		$exe1 = $this->db->where('id', $id);
		$exe1 = $this->db->delete('tb_soal');
			$exe2 = $this->db->where('id_soal', $id);
			$exe2 = $this->db->delete('tb_soal_language');
				$exe3 = $this->db->where('id_soal', $id);
				$exe3 = $this->db->delete('tb_jawaban');

		return true;
		}


		function ubahkategori($id) {
			$q = $this->db->select('*');
			$q = $this->db->where('id', $id);
			$q = $this->db->get('tb_level');
			$q = $q->result();

			return $q;
		}

		function ubahkategoripost($id) {
			$kategori = $this->input->post('kategori_quiz');
			$data = array(
				'kategori_quiz' => $kategori,
				);

			$this->db->where('id', $id);
			$this->db->update('tb_level', $data);

			return true;
		}


		function hapuskategori($id){
			$this->db->where('id', $id);
			$this->db->delete('tb_level');

			return true;
		}

		function lihatdaftarsoal(){
		$this->db->select('*');
		$this->db->from('tb_soal');
			$this->db->join('tb_soal_language', 'tb_soal_language.id_soal = tb_soal.id');
				$this->db->join('tb_jawaban', 'tb_jawaban.id_soal = tb_soal.id');
					$this->db->join('tb_level', 'tb_level.id_level = tb_soal.id_level');
						$this->db->where('tb_soal_language.id_language', '1');					
							$this->db->group_by('tb_soal_language.id_soal');
								// $this->db->limit($sampai,$dari);
		$query = $this->db->get();
		
		return $query->result();
		}

		function lihatdaftarquiz(){
		$this->db->select('*');
		$this->db->from('tb_quiz');
			$this->db->join('tb_quiz_language', 'tb_quiz.id = tb_quiz_language.id_quiz');
				$this->db->join('tb_level', 'tb_level.id_level = tb_quiz_language.id_level');
					// $this->db->limit($sampai,$dari);
		$query = $this->db->get();
		
		return $query->result();
		}

		function lihat($sampai,$dari,$namatabel) {
			$this->db->select('*');
			$this->db->from($namatabel);
				$this->db->limit($sampai,$dari);
			$query = $this->db->get();
			return $query->result();
		}

		function ambiltbsoal($id) {
		$this->db->select('*');
		$this->db->from('tb_soal');
			$this->db->where('id', $id);
		$query = $this->db->get();
		
		return $query->result();
		}

		function ambiltbsoallang($id) {
		$this->db->select('soal');
		$this->db->from('tb_soal_language');
			$this->db->where('id_soal', $id);
		$query = $this->db->get();
		
		return $query->result();	
		}

		function ambiltbsoaljaw($id) {
		$this->db->select('*');
		$this->db->from('tb_jawaban');
			$this->db->where('id_soal', $id);
		$query = $this->db->get();

		return $query->result();
		}		
	 
		function jumlah($namatabel){
			return $this->db->get($namatabel)->num_rows();
		}

		function listkategori() {
			$this->db->select('*');
			$q = $this->db->get('tb_level');
			$q = $q->result();
			return $q;
		}

		function tb_level($id) {
		$sql = $this->db->select('*');
		$sql = $this->db->from('tb_level');
		$sql = $this->db->where('id', $id);
		$result = $this->db->get($sql);


		return $result; 
		}

		function buatquiz() {
			$config = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' =>$this->gallery_path,
			'max_size' => 0,
			'file_name' => url_title($this->input->post('userfile')),
			);
			$judul = $this->input->post('judul');
			$keterangan = $this->input->post('keterangan');
			$kategori = $this->input->post('kategori');
			$tanggal = $this->input->post('tanggal');
			$this->load->library('upload',$config);
			if( !$this->upload->do_upload('userfile')){
				for($a=1 ; $a <= 5 ; $a++) {
					${"soal$a"} = $this->input->post("soal".$a."");
				}
					$data1 = array(
						'tanggal' => $tanggal 
						);

					$exe1 = $this->db->insert('tb_quiz', $data1);

						$q = $this->db->select_max('id');
						$q = $this->db->get('tb_quiz');
						$q = $q->result(); 
						$lastid = $q['0']->id;
	
						$data2 = array(
							'id_quiz' => $lastid,
							'cover'	=>$this->upload->file_name,
							'judul_quiz' => $judul,
							'keterangan' => $keterangan,
							'id_level' => $kategori,
							'soal1' => $soal1,
							'soal2' => $soal2,
							'soal3' => $soal3,
							'soal4' => $soal4,
							'soal5' => $soal5,
							);
						$exe3 = $this->db->insert('tb_quiz_language', $data2);
			return true;
			}
			else
			{
				for($a=1 ; $a <= 5 ; $a++) {
					${"soal$a"} = $this->input->post("soal".$a."");
				}

					$data1 = array(
						'tanggal' => $tanggal 
						);

					$exe1 = $this->db->insert('tb_quiz', $data1);

						$q = $this->db->select_max('id');
						$q = $this->db->get('tb_quiz');
						$q = $q->result(); 
						$lastid = $q['0']->id;
	
						$data2 = array(
							'id_quiz' => $lastid,
							'cover'	=>$this->upload->file_name,
							'judul_quiz' => $judul,
							'keterangan' => $keterangan,
							'id_level' => $kategori,
							'soal1' => $soal1,
							'soal2' => $soal2,
							'soal3' => $soal3,
							'soal4' => $soal4,
							'soal5' => $soal5,
							);
						$exe3 = $this->db->insert('tb_quiz_language', $data2);
			return true;
			}
		}
		function ubahquiz($id) {
			$config = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' =>$this->gallery_path,
			'max_size' => 0,
			'file_name' => url_title($this->input->post('userfile')),
			);
			$this->load->library('upload',$config);
		$this->upload->initialize($config); //meng set config yang sudah di atur
			$judul = $this->input->post('judul');
			$keterangan = $this->input->post('keterangan');
			$kategori = $this->input->post('kategori');
			$tanggal = $this->input->post('tanggal');
			if( !$this->upload->do_upload('userfile')){
				for($a=1 ; $a <= 5 ; $a++) {
					${"soal$a"} = $this->input->post("soal".$a."");
				}

					$data1 = array(
						'tanggal' => $tanggal 
						);
					$exe1 = $this->db->where('id', $id);
					$exe1 = $this->db->update('tb_quiz', $data1);

	
						$data2 = array(
							'judul_quiz' => $judul,
							'keterangan' => $keterangan,
							'id_level' => $kategori,
							'soal1' => $soal1,
							'soal2' => $soal2,
							'soal3' => $soal3,
							'soal4' => $soal4,
							'soal5' => $soal5,
							);
						$exe3 = $this->db->where('id_quiz', $id);
						$exe3 = $this->db->update('tb_quiz_language', $data2);
		
			return true;
			}
			else
			{
				$map = $_SERVER['DOCUMENT_ROOT'];
		        $path = $map . ''.base_url().'images/quiz/';
		        $nama_photo = $this->input->post('cover');
				$image = $path.$nama_photo;
		        unlink($image);

				for($a=1 ; $a <= 5 ; $a++) {
					${"soal$a"} = $this->input->post("soal".$a."");
				}

					$data1 = array(
						'tanggal' => $tanggal 
						);
					$exe1 = $this->db->where('id', $id);
					$exe1 = $this->db->update('tb_quiz', $data1);

	
						$data2 = array(
							'cover' => $this->upload->file_name,
							'judul_quiz' => $judul,
							'keterangan' => $keterangan,
							'id_level' => $kategori,
							'soal1' => $soal1,
							'soal2' => $soal2,
							'soal3' => $soal3,
							'soal4' => $soal4,
							'soal5' => $soal5,
							);
						$exe3 = $this->db->where('id_quiz', $id);
						$exe3 = $this->db->update('tb_quiz_language', $data2);
		
			return true;	
			}
		}
		

		function dataquiz($id){
			$this->db->select('*');
			$this->db->from('tb_quiz');
			$this->db->join('tb_quiz_language', 'tb_quiz.id = tb_quiz_language.id_quiz');
			$this->db->join('tb_level', 'tb_level.id_level = tb_quiz_language.id_level');
			$this->db->where('tb_quiz.id', $id);
			$data = $this->db->get();
		return $data->result();
		}
		function datasoaluntukquiz($idsoalnya,$idquiz){
			$this->load->model('Admin/m_quiz');
				$kode_soal = $this->m_quiz->dataquiz($idquiz);
				$id_soal = $kode_soal[0]->$idsoalnya;
				$soalnya = $this->db->select('*');
				$soalnya = $this->db->from('tb_soal');
				$soalnya = $this->db->join('tb_soal_language', 'tb_soal.id = tb_soal_language.id_soal');
				$soalnya = $this->db->get();
				$soalnya = $soalnya->result();
				$soal = $soalnya[0]->soal;
				return $soal;
		}
		function ubahsoalquiz($id){
			$qu = $this->db->select('*')
						   ->from('tb_quiz_language')
						   ->join('tb_soal_language', 'tb_quiz_language.id_quiz =tb_soal_language.id_soal')
						   ->where('id_quiz', $id)
						   ->get()
						   ->result();
			return $qu;
		}
		public function hapusquiz($id) {
			$exe1 = $this->db->where('id', $id);
			$exe1 = $this->db->delete('tb_quiz');
				$exe2 = $this->db->where('id_quiz', $id);
				$exe2 = $this->db->delete('tb_quiz_language');
		}

		public function ambilsoaldariquiz($idquiz) {
			$exe1 = $this->db->select('*')
							 ->from('tb_quiz')
							 ->join('tb_quiz_language', 'tb_quiz.id = tb_quiz_language.id_quiz')
							 ->where('id', $idquiz)
							 ->get()
							 ->result();
				
			return array(
				'soal1' => $idsoal = $exe1['0']->soal1,
				'soal2' => $idsoal = $exe1['0']->soal2,
				'soal3' => $idsoal = $exe1['0']->soal3,
				'soal4' => $idsoal = $exe1['0']->soal4,
				'soal5' => $idsoal = $exe1['0']->soal5
				);
		}


		function inibarusoal($idsoal) {
			
			for ($uhuy=1; $uhuy <= 5 ; $uhuy++) { 
				
				${"exe$uhuy"} = $this->db->select('*')
										 ->from('tb_soal')
										 ->join('tb_soal_language', 'tb_soal.id = tb_soal_language.id_soal')
										 ->join('tb_jawaban', 'tb_soal.id = tb_jawaban.id_soal')
										 ->where('tb_soal.id', $idsoal["soal".$uhuy])
										 ->where('tb_soal_language.id_language', '1')
										 ->where('tb_jawaban.id_language', '1')
										 ->get()
										 ->result();
			}
			
			$arraysoal = array();
			for ($i=1; $i <= 5 ; $i++) { 
				foreach (${"exe$i"} as ${"exe$i"}) {
						$arraysoal[] =  ${"exe$i"};
				}
			}
			
			return $arraysoal;
		}

		function tb_disable($iduser, $idquiz) {
			$data = array(
				'id_user' => $iduser,
				'id_quiz' => $idquiz
				);

				$q = $this->db->insert('tb_disable', $data);
			return true;
		}

		function cek_disable($iduser, $idquiz) {
			$q = $this->db->select('*')
						  ->from('tb_disable')
						  ->where('id_user', $iduser)
						  ->where('id_quiz', $idquiz)
						  ->get()
						  ->result();
			return count($q);
		}	
		function ubah_simpan(){
				$id_quiz = $this->input->post('id_quiz');
				$data = array(
					// 'cover' => $this->input->post('userfile'),
					'judul_quiz' => $this->input->post('judul'),
					'keterangan' => $this->input->post('keterangan'),
					'id_level' => $this->input->post('kategori')
					);
			$this->db->where('id_quiz',$id_quiz);
			$this->db->update('tb_quiz_language',$data);
			echo "<script>alert ('Data Terubah')</script>";
		}
}