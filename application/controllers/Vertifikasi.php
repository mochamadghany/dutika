<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Vertifikasi extends CI_Controller{
	function __construct(){
    parent::__construct();
  }
	
    public function verification($key)
  {
     $data = array(
     'status' => 1
     );
     $this->db->where('md5(id_user)', $key);
     $this->db->update('tb_user', $data);

   echo "<script>alert('Selamat anda telah berhasil melakukan vertifikasi, Silahkan Login');</script>";

   redirect('user/c_login','refresh');

  } 
}