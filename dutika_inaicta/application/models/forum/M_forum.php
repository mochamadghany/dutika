<?php
class M_forum extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->gallery_path= realpath(APPPATH.'../images/user/user');
		$this->gallery_path_url= base_url().'images/user/user/';
	}
	function data_forum()
	{
		$q=$this->db->select('*')
					->select('tb_forum.tanggal as tgll')
					->from('tb_forum')
					->join('tb_user','tb_user.id_user = tb_forum.id_user')
					->join('tb_forum_kategori','tb_forum_kategori.id_kategori=tb_forum.id_kategori') 
					->order_by('tb_forum.id_forum','desc')
					->get()
					->result();
		return $q;

	}
	function simpan()
	{
		if ($this->input->post('simpan')) {
				$config= array(
					'allowed_types'=>'jpg|jpeg|gif|png',
					'upload_path'=>$this->gallery_path,
					'max_size'=>2000,
					'file_name'=>url_title($this->input->post('gambar')),
					);
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('gambar')) {
				$data=array(
				'id_user' =>$this->input->post('id_user'),
				'tanggal' =>$this->input->post('tanggal'),
				'judul'   =>$this->input->post('judul'),
				'isi'     =>$this->input->post('isi'),
				'id_kategori'=> $this->input->post('id_kategori'),
				// 'gambar' =>$this->upload->file_name
				);

					$this->db->insert('tb_forum',$data);
				}else{
				$data=array(
				'id_user' =>$this->input->post('id_user'),
				'tanggal' =>$this->input->post('tanggal'),
				'judul'   =>$this->input->post('judul'),
				'isi'     =>$this->input->post('isi'),
				'id_kategori'=> $this->input->post('id_kategori'),
				'gambar' =>$this->upload->file_name

				);

					$this->db->insert('tb_forum',$data);
				}
		echo"<script>alert('Data Berhasil Terkirim');</script>";
	}
	}
	function lihat($id_forum)
	{
		$q=$this->db->select('*')
					->select('tb_forum.tanggal as tggl')
					->from('tb_forum')
					->join('tb_forum_kategori','tb_forum_kategori.id_kategori=tb_forum.id_kategori') 
					->join('tb_user','tb_user.id_user = tb_forum.id_user')
					->where('tb_forum.id_forum',$id_forum)
					->get()
					->result();
		return $q;
	}
	function simpan_komen()
	{

		$data = array(
			'id_forum'	=> $this->input->post('id_forum'),
			'id_user'	=> $this->input->post('id_user'),
			'komentar'	=> $this->input->post('komentar'),
			'tanggal'	=> $this->input->post('tanggal')
			);
		$this->db->insert('tb_komenforum',$data);
						echo"<script>alert('komentar berhasil terkirim');</script>";
	}
	function tampil_komen($id_forum)
	{
		$q=$this->db->select('*')
					->select('tb_komenforum.tanggal as tgl')
					->from('tb_komenforum')
					->join('tb_forum','tb_forum.id_forum = tb_komenforum.id_forum')
					->join('tb_user','tb_user.id_user = tb_komenforum.id_user')
					->where('tb_forum.id_forum',$id_forum)
					->get()
					->result();
		return $q;
	}

	function kategori()
		{
		$u = $this->db->select('*')
					  ->from('tb_forum_kategori')
					  ->get()
					  ->result();
		return $u;
		}
}
?>