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


	}

?>