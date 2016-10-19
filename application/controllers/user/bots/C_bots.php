<?php
class C_bots extends CI_Controller
{
    var $gallery_path;
    var $gallery_path_url;
    var $urls;
    public $data = Array();

	function __construct()
    {
        parent::__construct(); 
        $this->gallery_path = realpath(APPPATH. '../images');
        $this->gallery_path_url = base_url(). 'images/';
        // $this->load->model('user/mod_index');
        $this->load->model('m_score');

        $this->load->model('user/m_login');
        $this->load->model('user/m_quiz');
        $this->load->model('user/m_level');

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
        if(empty($ambil_akun))
        {
            $id_user="";
        }
        else
        {
            foreach ($ambil_akun as $q)
            {
                $id_user=$q->id_user;
            }
            
        }
        $this->id_user = $id_user;
        $this->cek();

        $this->seson = $ambil_akun;
        $this->username = $username;

            //text Forum
            
        // $this->tampil_kategori = $this->m_level->tampil_kategori_forum();
        $this->tampil_bahasa = $this->m_level->tampil_bahasa();

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

    function jawab()
    {
        $idquiz = $this->uri->segment(5);

        $this->link ='c_quiz/jawab/'.$idquiz.'';
        // $data_artikel = $this->mod_index->data_artikel($this->bhs);
        // $data_berita = $this->mod_index->data_berita($this->bhs);
        // $data_topik = $this->mod_index->data_topik();
        $getidsoal = $this->m_quiz->ambilsoaldariquiz($idquiz);
        $lang = 'Indonesia';
        $langlang = $this->m_quiz->ambilidlang($lang);
        $score = $this->m_score->score($this->id_user);
        $data = array(
        'user'=>$this->seson,
        // 'data_artikel'  =>$data_artikel,
        // 'data_berita'  =>$data_berita,
        // 'data_topik'  =>$data_topik,
        'link' =>$this->link,
        'quizpopuler' => $this->m_quiz->quizpopuler(),
        // 'tampil_kategori_forum'=>$this->tampil_kategori,
        'tampil_bahasa'=>$this->tampil_bahasa,
        'soalsoal' => $this->m_quiz->inibarusoal($getidsoal, $langlang),
        'idquiznya' => $idquiz,
        'score' => $score
        );
        // var_dump($data);
        // exit();


        
		$this->load->view('user/bots/v_bots', $data);
	}

    public function index() {
                
        $this->link = 'c_quiz';
        $score = $this->m_score->score($this->id_user);
        foreach ($score as $soni) {
            $id_level = $soni->id_level;
        }
        $dari = $this->uri->segment(4);
        $data = array(
            'tampil_bahasa' =>$this->tampil_bahasa,
            'link' =>$this->link, 
            'kategori' => $this->m_quiz->lihatdaftarquiz($id_level),
            'user' => $this->seson,
            'score' => $score
            );

        $this->load->view('user/v_daftarquiz', $data);
    }

    function edit_profile()
    {
        $this->link ='index';

        // $data_user = $this->mod_index->data_member($this->username);
        $data = array(
        'member'  =>$data_user,
        'user'=>$this->seson,
        'tampil_kategori_forum'=>$this->tampil_kategori,
        'tampil_bahasa'=>$this->tampil_bahasa,
        );
        $this->load->view('user/edit_profile',$data);
    }

    function ubah_profile()
    {
        $hak ="user";
        if($this->input->post('submit'))
        {
            $config = array(
        'allowed_types' => 'jpg|jpeg|gif|png',
        'upload_path' =>$this->gallery_path,
        'max_size' => 2000,
        'file_name' => url_title($this->input->post('userfile')),
        );
        $this->load->library('upload',$config);
        $this->upload->initialize($config); //meng set config yang sudah di atur
         if( !$this->upload->do_upload('userfile'))
        {
            $username= $this->input->post('username');
            $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'hak' => $hak,
            'nama_depan' => $this->input->post('nama_depan'),
            'nama_belakang' => $this->input->post('nama_belakang'),
            'nama_panggilan' => $this->input->post('nama_panggilan'),
            'jk' => $this->input->post('jk'),
            'tentang' => $this->input->post('tentang'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('no_hp'),
             );
            // $this->mod_index->ubah_profile($username,$data);
            // var_dump($data);
            // exit();
            redirect('user/index/edit_profile');
        }
        else
        {
            $username= $this->input->post('username');
            $map = $_SERVER['DOCUMENT_ROOT'];
            $path = $map . '/kebudayaan_indonesia/images/';
            $nama_photo = $this->input->post('gambar_dlt');
            $image = $path.$nama_photo;
            unlink($image);
            $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'hak' => $hak,
            'nama_depan' => $this->input->post('nama_depan'),
            'nama_belakang' => $this->input->post('nama_belakang'),
            'nama_panggilan' => $this->input->post('nama_panggilan'),
            'jk' => $this->input->post('jk'),
            'tentang' => $this->input->post('tentang'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('no_hp'),
            'photo' => $this->upload->file_name,
        );  
        // $this->mod_index->ubah_profile($username,$data);
        redirect('user/index/edit_profile');
        }
      }
    }

    function logout_user()
    {
        // $this->session->sess_destroy();
        $this->session->unset_userdata('isLoginUser');  
        redirect('user/index','refresh');
    }

    function quiz_ajax() {
        $idquiz = $this->uri->segment(5);
        $lang = "Indonesia";
        $langlang = $this->m_quiz->ambilidlang($lang);

        $iduser = $this->id_user;

        $getidsoal = $this->m_quiz->ambilsoaldariquiz($idquiz); 
        $soal = $this->m_quiz->inibarusoal($getidsoal, $langlang);
        
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
        // $cek = $this->m_quiz->cek_disable($iduser, $idquiz);
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

            // $this->m_quiz->tb_disable($iduser, $idquiz);
            
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


?>