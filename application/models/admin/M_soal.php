<?php
	class M_soal extends CI_Model {
		function tampil() {
			$p = $this->db->select('*')
						  ->from('tb_user')
						  ->get()
						  ->result();
			return $p;
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

		function jumlah($namatabel){
			return $this->db->get($namatabel)->num_rows();
		}
		
		function listkategori() {
			$this->db->select('*');
			$q = $this->db->get('tb_level');
			$q = $q->result();
			return $q;
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

			function simpansoal() {
			
			$kategori = $this->input->post('kategori');
			$xp = $this->input->post('xp');
			$jawabanbenar = $this->input->post('jawabanbenar');
			$jumlahbahasa = $this->m_soal->jumlahbahasa();

			for ($i=1; $i <= $jumlahbahasa ; $i++) { 
					${"jawabana$i"} = $this->input->post('jawabana'.$i.'');
					${"jawabanb$i"} = $this->input->post('jawabanb'.$i.'');
					${"jawabanc$i"} = $this->input->post('jawabanc'.$i.'');
					${"jawaband$i"} = $this->input->post('jawaband'.$i.'');
					// var_dump(${"jawabana$i"});
					// exit();
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
					$soal = $this->input->post('soal');
					// var_dump($soal);
					// exit();

				}	



				for ($h=1; $h <= $jumlahbahasa ; $h++) { 
					$exe2 = $this->db->query("INSERT INTO tb_soal_language(id_soal,soal,id_language) VALUES 
					('".$lastid_soal."','".$soal."','".$h."')");	
					// var_dump($soal);
					// exit();
				}
				
				for ($k=1; $k <= $jumlahbahasa ; $k++) { 
					$exe3 = $this->db->query("INSERT INTO tb_jawaban(jawaban_texta,jawaban_textb,jawaban_textc,jawaban_textd,id_soal,id_language) VALUES 
					('".${"jawabana$k"}."','".${"jawabanb$k"}."','".${"jawabanc$k"}."','".${"jawaband$k"}."','".$lastid_soal."','".$k."')");
				}
			
			return true;
		}

		function cek_ubah($id){
			$s=$this->db->select('*')
						->from('tb_soal')
						->where('id',$id)
						->get()
						->result();
			return $s;
		}
		function soall($id){
			$a= $this->db->select('*')
						 ->from('tb_soal_language')
						 ->where('id_soal',$id)
						 ->get()
						 ->result();
			return $a;
		}
		function jawab($id){
			$j=$this->db->select('*')
						->from('tb_jawaban')
						->where('id_soal',$id)
						->get()
						->result();
			return $j;
		}
		function ubah_simpan(){
			$id = $this->input->post('id');
			$kategori = $this->input->post('kategori');
			$xp = $this->input->post('xp');
			$jawabanbenar = $this->input->post('jawabanbenar');
			$jumlahbahasa = $this->m_soal->jumlahbahasa();

			for ($i=1; $i <= $jumlahbahasa ; $i++) { 
					${"jawabana$i"} = $this->input->post('jawabana'.$i.'');
					${"jawabanb$i"} = $this->input->post('jawabanb'.$i.'');
					${"jawabanc$i"} = $this->input->post('jawabanc'.$i.'');
					${"jawaband$i"} = $this->input->post('jawaband'.$i.'');
					// var_dump(${"jawabana$i"});
					// exit();
				}


			if ($jawabanbenar == "A") {
				$jawabanbenartext = $this->input->post('jawabana');
			}elseif ($jawabanbenar == "B") {
				$jawabanbenartext = $this->input->post('jawabanb');
			}elseif ($jawabanbenar == "C") {
				$jawabanbenartext = $this->input->post('jawabanc');
			}elseif ($jawabanbenar == "D") {
				$jawabanbenartext = $this->input->post('jawaband');
			}


			

			$data1 = array(
						'xp' => $xp,
						'jawaban' => $jawabanbenar,
						'jawaban_text_benar' => $jawabanbenartext,
						'id_level' => $kategori
					);
				$exe1 = $this->db->where('id',$id);
						$this->db->update('tb_soal', $data1);
					// var_dump($data1);
					// exit();

			$q = $this->db->select_max('id');
			$q = $this->db->get('tb_soal');
			$q = $q->result(); 
			$lastid_soal = $q['0']->id;//ambil last id dari tabel soal



				for ($x=1; $x <= $jumlahbahasa ; $x++) { 
					$soal = $this->input->post('soal');
					$id = $this->input->post('id');
					// var_dump($soal);
					// exit();

				}	



				for ($h=1; $h <= $jumlahbahasa ; $h++) { 
					$data2 = array(
						'soal' => $soal,
						'id_language' => $h
					);

					$exe2 = $this->db->where('id_soal',$id);
							$this->db->update('tb_soal_language', $data2);
					// var_dump($soal);
					// exit();
				}
				
				for ($k=1; $k <= $jumlahbahasa ; $k++) {
					$a = $this->input->post('jawabana');
					$b = $this->input->post('jawabanb');
					$c = $this->input->post('jawabanc');
					$d = $this->input->post('jawaband');
					$data3 = array(
						'jawaban_texta' => $a,
						'jawaban_textb' => $b,
						'jawaban_textc' => $c,
						'jawaban_textd' => $d,
						'id_language' => $k
					);
					// var_dump($data3);
					// exit();
					$exe3 = $this->db->where('id_soal',$id);
							$this->db->update('tb_jawaban', $data3);
				}
			
			return true;
		}
		function hapus(){
		$id = $this->uri->segment(4);
		             $this->db->where('id_soal',$id);
				     $this->db->delete('tb_soal_language');
		echo"<script>alert('Data Telah Dihapus');</script>";
		}
	}

?>