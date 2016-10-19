<?php
	class M_daftar extends CI_Model {
		function proses_daftar() {
			$score=0;
			$score_level=0;
			$coin=100;

			$un= $this->input->post('username');
			$dpn_username= substr($un,0,1);


			if($dpn_username =="A"){
				$photo="A.png";
			}
			if($dpn_username =="B"){
				$photo="B.png";
			}
			if($dpn_username =="C"){
				$photo="C.png";
			}
			if($dpn_username =="D"){
				$photo="D.png";
			}
			if($dpn_username =="E"){
				$photo="E.png";
			}
			if($dpn_username =="F"){
				$photo="F.png";
			}
			if($dpn_username =="G"){
				$photo="G.png";
			}
			if($dpn_username =="H"){
				$photo="H.png";
			}
			if($dpn_username =="I"){
				$photo="I.png";
			}
			if($dpn_username =="J"){
				$photo="J.png";
			}
			if($dpn_username =="K"){
				$photo="K.png";
			}
			if($dpn_username =="L"){
				$photo="L.png";
			}
			if($dpn_username =="M"){
				$photo="M.png";
			}
			if($dpn_username =="N"){
				$photo="N.png";
			}
			if($dpn_username =="O"){
				$photo="O.png";
			}
			if($dpn_username =="P"){
				$photo="P.png";
			}
			if($dpn_username =="Q"){
				$photo="Q.png";
			}
			if($dpn_username =="R"){
				$photo="R.png";
			}
			if($dpn_username =="S"){
				$photo="S.png";
			}
			if($dpn_username =="T"){
				$photo="T.png";
			}
			if($dpn_username =="U"){
				$photo="U.png";
			}
			if($dpn_username =="V"){
				$photo="V.png";
			}
			if($dpn_username =="W"){
				$photo="W.png";
			}
			if($dpn_username =="X"){
				$photo="X.png";
			}
			if($dpn_username =="Y"){
				$photo="Y.png";
			}
			if($dpn_username =="Z"){
				$photo="Z.png";
			}
			if($dpn_username =="a"){
				$photo="A.png";
			}
			if($dpn_username =="b"){
				$photo="B.png";
			}
			if($dpn_username =="c"){
				$photo="C.png";
			}
			if($dpn_username =="d"){
				$photo="D.png";
			}
			if($dpn_username =="e"){
				$photo="E.png";
			}
			if($dpn_username =="f"){
				$photo="F.png";
			}
			if($dpn_username =="g"){
				$photo="G.png";
			}
			if($dpn_username =="h"){
				$photo="H.png";
			}
			if($dpn_username =="i"){
				$photo="I.png";
			}
			if($dpn_username =="j"){
				$photo="J.png";
			}
			if($dpn_username =="k"){
				$photo="K.png";
			}
			if($dpn_username =="l"){
				$photo="L.png";
			}
			if($dpn_username =="m"){
				$photo="M.png";
			}
			if($dpn_username =="n"){
				$photo="N.png";
			}
			if($dpn_username =="0"){
				$photo="O.png";
			}
			if($dpn_username =="p"){
				$photo="P.png";
			}
			if($dpn_username =="q"){
				$photo="Q.png";
			}
			if($dpn_username =="r"){
				$photo="R.png";
			}
			if($dpn_username =="s"){
				$photo="S.png";
			}
			if($dpn_username =="t"){
				$photo="T.png";
			}
			if($dpn_username =="u"){
				$photo="U.png";
			}
			if($dpn_username =="v"){
				$photo="V.png";
			}
			if($dpn_username =="w"){
				$photo="W.png";
			}
			if($dpn_username =="x"){
				$photo="X.png";
			}
			if($dpn_username =="y"){
				$photo="Y.png";
			}
			if($dpn_username =="z"){
				$photo="Z.png";
			}



			$data = array(
					'username'	=> $this->input->post('username'),
					'password'	=> $this->input->post('password'),
					'email'		=> $this->input->post('email'),
					'nama'		=> $this->input->post('nama'),
					'tanggal'	=> date('d M y'),
					'id_hint'	=> $this->input->post('id_hint'),
					'jawaban'	=> $this->input->post('jawaban'),
					'status'	=> '0',
					'foto'		=> $photo
					
				);
			
			$this->db->insert('tb_user',$data);

				$q=$this->db->select_max('id_user');
				$q=$this->db->get('tb_user');
				$q=$q->result();
				$last_id=$q['0']->id_user;

				$data_user_score = array(
					'id_user'=> $last_id,
					'coin'	 =>$coin,
					'score'	=>$score,
					'score_level'=>$score_level
					);

			$this->db->insert('tb_user_score',$data_user_score);

			$d=$this->db->select_max('id_user_score');
				$d=$this->db->get('tb_user_score');
				$d=$d->result();
				$id_user_score=$d['0']->id_user_score;

				$id_level = '1';
			
				$data_user_level = array(
					'id_user_score'	=>$id_user_score,
					'id_level'	=>$id_level
					);

			$this->db->insert('tb_user_level',$data_user_level);

			$ci = get_instance();
	        $ci->load->library('email');
	        $config['protocol'] = "smtp";
	        $config['smtp_host'] = "potatoes3.qwords.net";
	        $config['smtp_port'] = "465";
	        $config['smtp_user'] = "soni.setiawan@geekhouse.id";
	        $config['smtp_pass'] = "bismillah1";
	        $config['charset'] = "utf-8";
	        $config['mailtype'] = "html";
	        $config['newline'] = "\r\n";
	        
	        
	        $ci->email->initialize($config);

	      
	        $encrypted_id = md5($last_id);

	 		$subject = 'Dutika';
	        $message = "<p>Harap Verifikasi akun anda dengan mengklik link di bawah ini<br><br>
	            "."<a href='".base_url()."vertifikasi/verification/$encrypted_id'>Verifikasi </a>  </p>";

	        // Get full html:
	        $body =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
'.$message.'
</body>
</html>';
	        $ci->email->from('soni.setiawan@geekhouse.id', 'Soni Setiawan');
	        $list = array($this->input->post('email'));
	        $ci->email->to($list);
	        $ci->email->subject($subject);
	        $ci->email->message($body);
	        if ($this->email->send()) {
	            
				echo "<script>alert('Pendaftaran berhasil cek email anda untuk aktivasi')</script>";
				redirect('user/c_login','refresh');
	        } else {
	//echo "<script>alert('Gagal Mendaftar')</script>";
	//show_error($this->email->print_debugger());
	            echo "<script>alert('Pendaftaran berhasil cek email anda untuk aktivasi')</script>";
	            redirect('user/c_login','refresh');
	               }	
				}
	}
?>