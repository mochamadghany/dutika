<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_duel extends CI_Controller {
		function __construct()
		{
		parent::__construct();
		$this->load->model('user/m_login');
		$this->load->model('m_score');
		$this->load->model('user/m_duel');
		$this->load->model('user/m_level');
		$this->load->model('user/m_quiz_duel');
		$this->load->model('user/m_profile');

		$session = $this->session->userdata('isloginuser');
		if($session==True){
			$ambil_akun = $this->m_login->ambil_user($this->session->userdata('username'));
			//$stat = $this->session->userdata('stat_admin');
			$username=$this->session->userdata('username');
		}
		else
		{
			$username='';
			$ambil_akun=$this->m_login->ambil_user($username);
		}
		//$this->load->database();
		$this->username=$username;
		foreach ($ambil_akun as $q)
		{
      		$id_user=$q->id_user;
		}
		$this->id_user = $id_user;
		$this->user = $ambil_akun;
		$this->cek();

	}
	function cek()
	{
		if($this->username==""){
			echo"
				<script>alert('harap login')</script>";
				redirect('user/c_login','refresh');

		}
	}
	
	function find() {
		$id_anggota = $this->uri->segment(5);
		$cek_room = $this->m_duel->cek_room();
		if(empty($cek_room))
		{
			$this->m_duel->simpan_find_pertama($id_anggota);
		}
		else
		{
			$cek_room_ada = $this->m_duel->cek_room_ada();
			foreach ($cek_room_ada as $soni) {
				$nomer_room = $soni->nomer_room;
				$id_anggota1 = $soni->id_anggota1;
				$status1 = $soni->status1; 
				$id_anggota2 = $soni->id_anggota2; 
				$status2 = $soni->status2; 
				$hasil = $soni->hasil_status;
			}
			
			if(!empty($id_anggota1) && !empty($id_anggota2))
			{
				$nomer = $nomer_room + 1;
				$this->m_duel->simpan_find_pertama_ada($id_anggota,$nomer);
			}
			else
			{
				$this->m_duel->simpan_find_kedua($id_anggota1,$id_anggota,$nomer_room);
			}
		}
		$data = $this->m_score->score($this->id_user);
		$dataf = array(
			'foto'	 =>$data
			);
		$this->load->view('user/duel/find',$dataf);
	}

	function hasil_find()
	{
		$cari_hasil = $this->m_duel->cek_hasil_find1($this->id_user);
		foreach ($cari_hasil as $duel) {
			$duel_id_room = $duel->id_room;
			$duel_id_user1 = $duel->id_anggota1;
			$duel_id_user2 = $duel->id_anggota2;
		}

		if($cari_hasil[0]->hasil_status == 0)
		{
			$this->m_duel->hapus_room1($this->id_user);
			redirect('c_index','refresh');
		}
		else
		{
			$soni = $this->m_duel->ambil_room($this->id_user);
			foreach ($soni as $s){
				$id_anggota_lawan = $s->id_anggota2;
			}
			$soni2 = $this->m_duel->ambil_room2($this->id_user);
			foreach ($soni2 as $s){
				$id_anggota_lawan = $s->id_anggota1;
			}

			$profil_lawan = $this->m_duel->ambil_profil_lawan($id_anggota_lawan);
			if(empty($soni))
			{
				$tampil_data = $soni2;
			}
			else
			{
				$tampil_data = $soni;
			}
			$status_pending = 0;
			$simpan_duel = array(
				'id_user1'	=> $duel_id_user1,
				'status1'	=> $status_pending,
				'id_user2'	=> $duel_id_user2,
				'status2'	=> $status_pending,
				'tanggal'	=> date('y-m-d'),
				);
			$this->db->insert('tb_duel',$simpan_duel);

			$q = $this->db->select_max('id_duel');
            $q = $this->db->get('tb_duel');
            $q = $q->result(); 
            $last_id = $q['0']->id_duel;

			$data = array(
				'profil_pribadi'	=> $tampil_data,
				'profil_lawan'	=> $profil_lawan,
				'id_room'		=> $duel_id_room,
				'id_user'	=> $this->id_user,
				'data_duel'		=> $this->m_duel->data_duel($last_id),
				'id_duel'		=> $last_id,
				'data_duel2'		=> $this->m_duel->data_duel2($last_id),
				);
			// $this->m_duel->hapus_room_user($duel_id_room);
			$this->load->view('user/duel/versus',$data);
			// redirect('user/duel/c_duel/versus','refresh');
		}
	}

	function status_duel()
	{
        $id_user = $_REQUEST["q"];
        $cek_id = $this->m_duel->cek_id_user($id_user);

        $cek_id2 = $this->m_duel->cek_id_user2($id_user);
        if($cek_id)
        {
        	foreach ($cek_id as $q) {
        		$status = $q->status1;
        		$last_id = $q->id_duel;
        	}
			  $data2 = array(
                'status1'   =>  1
                );
                $this->db->where('id_duel', $last_id);
				$this->db->update('tb_duel', $data2);   
        }
        
        if($cek_id2)
        {
        	foreach ($cek_id2 as $s) {
        		$status = $s->status2;
        		$last_id = $s->id_duel;
        	}
     	   $data = array(
                'status2'   =>  1,
                );
                 $this->db->where('id_duel', $last_id);
                 $this->db->update('tb_duel', $data);   

        }
        		$data_duel = $this->m_duel->data_duel($last_id);
				$data_duel2 = $this->m_duel->data_duel2($last_id);

        ?>
                <div class="col-md-3" style="margin-top:50px;">
          <div class="profile-card text-center">

            
            <?php foreach ($data_duel as $soni):?>
              <div class="profile-info">

              <img class="profile-pic" src="<?php echo base_url();?>images/user/user/<?php echo $soni->foto;?>">

              <h2 class="hvr-underline-from-center"><?php echo $soni->nama;?><span>Level : <?php echo $soni->tingkat;?> </span> <span>Kelas :<?php echo $soni->kelas;?></span></h2>
              <div><img class="img-valign" src="<?php echo base_url();?>images/score.png" alt="" /><span class="non-data-text"><?php echo $soni->score_user;?> </span>
              </div>
              <br>
              <div ><h4>Status : </h4><span class="status-fightsalah" >
              <?php if($soni->status1==0)
              {
                ?>
                <span id="hilang1" class="status-fight">WAITING</span>
               <?php 
              }
              ?>
              <?php if($soni->status1==1)
              {
                ?>
                <span id="hilang1" class="status-fight">READY</span>
               <?php 
              }
              ?>
                <span id="tampil1" class="status-fight"></span>

              </div>
            </div>
            <input type="hidden" id="ready1" value="READY">
          <?php endforeach;?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="profile-card text-center" style="padding:5%;">

            <div class="profile-info">

              <h2 class="hvr-underline-from-center" style="margin-top:-30px;">RULES<span></span></h2>
              <div align="left">
                    <ol class="hintfight">
                  <li>You Must Answer 5 Question
                  <li>Each Question have 1 Correct and 3  Incorrect Answer
                  <li>If your Answer Correctly You will get +100 Score And +500 Coins
                  <li>If Opponent Answer Correct Before your Correct Answer you will get +50 Score  and +250 Coins
                  <li>If Your Answer Incorrectly You Will Get Score And if You Not Answer You Will Get 0 Score 
                  <li>And Whoever get Highest Scores Win The Fight
                </ol>
              </div>
              </div>

          </div>
        </div>
        <div class="col-md-3" style="margin-top:50px;">
          
          <div class="profile-card text-center">

            <?php foreach ($data_duel2 as $soni):?>
            <div class="profile-info">

              <img class="profile-pic" src="<?php echo base_url();?>images/user/user/<?php echo $soni->foto;?>">

              <h2 class="hvr-underline-from-center"><?php echo $soni->nama;?><span>Level : <?php echo $soni->tingkat;?> </span> <span>Kelas :<?php echo $soni->kelas;?></span></h2>
              <div><img class="img-valign" src="<?php echo base_url();?>images/score.png" alt="" /><span class="non-data-text"><?php echo $soni->score_user;?> </span>
              </div>
              <br>
              <div ><h4>Status : </h4>
                            <?php if($soni->status2==0)
              {
                ?>
                <span id="hilang2" class="status-fight">WAITING</span>
               <?php 
              }
              ?>
              <?php if($soni->status2==1)
              {
                ?>
                <span id="hilang2" class="status-fight">READY</span>
               <?php 
              }
              ?>
            </div>
          <?php endforeach;?>
        </div>


      </div>
    </div>
<?php
	}

	function masuk_quiz()
	{
		$id_duel = $this->uri->segment(5);

			 $getidquiz = $this->m_quiz_duel->ambilsoaldariquiz_1();
	      	$idquiz = $getidquiz['0']->id_quiz;
	        $getidsoal = $this->m_quiz_duel->ambilsoaldariquiz();
	        $lang = 'Indonesia';
	        $langlang = $this->m_quiz_duel->ambilidlang($lang);
	        $score = $this->m_score->score($this->id_user);
	        $data = array(
	        'quizpopuler' => $this->m_quiz_duel->quizpopuler(),
	        // 'tampil_bahasa'=>$this->tampil_bahasa,
	        'soalsoal' => $this->m_quiz_duel->inibarusoal($getidsoal, $langlang),
	        'idquiznya' => $idquiz,
	        'score' => $score
	        );
			$this->load->view('user/duel/duel_quiz', $data);


	}

	function quiz_ajax()
	{
		        $idquiz = $this->uri->segment(5);
        $lang = "Indonesia";
        $langlang = $this->m_quiz_duel->ambilidlang($lang);

        $iduser = $this->id_user;

        $getidsoal = $this->m_quiz_duel->ambilsoaldariquiz($idquiz); 
        $soal = $this->m_quiz_duel->inibarusoal($getidsoal, $langlang);
        
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


     
        // rumus matematika untuk lvling
        // $cek = $this->m_quiz_duel->cek_disable($iduser, $idquiz);
            $lvl = $this->m_level->ambiluser($iduser);
         // var_dump($lvl[0]->level);
         // exit();
            $score = $this->m_level->ambilbatasxp($lvl[0]->level);
            $xpnya = $lvl[0]->iniscoreuser + $xp;
            $xpnya_score_level = $lvl[0]->score_level + $xp;
            $xpnyacoin = $xp/10;
                if($xpnya_score_level == $score[0]->score){
                    $lvlnya = $lvl[0]->level + 1;

                    $coinnya = $lvl[0]->coin + $xpnyacoin;

                    $this->m_level->dapetxp_lvlup($iduser, $xpnya,$coinnya);
                    $this->m_level->lvlup($iduser, $lvlnya);

                }else if($xpnya_score_level < $score[0]->score){
                    $xpnya;

                    $coinnya = $lvl[0]->coin + $xpnyacoin;
                    $this->m_level->dapetxp($iduser, $xpnya,$xpnya_score_level,$coinnya);

                }else if($xpnya_score_level > $score[0]->score){
                    $lvlnya = $lvl[0]->level + 1;
                    $realxp = $xpnya_score_level - $score[0]->score;

                    $coinnya = $lvl[0]->coin + $xpnyacoin;
                    $this->m_level->dapetxp_levelup($iduser, $xpnya,$coinnya,$realxp);
                    $this->m_level->levelup($iduser, $lvlnya);
                }

            // $this->m_quiz_duel->tb_disable($iduser, $idquiz);

            ?>
            <a href="<?= base_url() ?>"><button>KEMBALI KE MENU AWAL</button></a>
            <?php        
            
            echo "<div id='hasil'>";

             echo " Jawaban Benar  : <span class='highlight'>". $benar."</span><br>";

             echo " Jawaban Salah  : <span class='highlight'>". $salah."</span><br>";

             echo " Tidak Terjawab  : <span class='highlight'>". $takterjawab."</span><br>";

             echo " XP Yang Diperoleh : ". $xp ." ";

            echo "</div>";
    
	}
}
