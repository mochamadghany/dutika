<?php
	class Session_user{
		public function cek_user()
		{
			$this->ci =& get_instance();
			$this->sesi = $this->ci->session->userdata('isloginuser');
			$this->hak = $this->ci->session->userdata('username');
			if($this->sesi !=TRUE){
				redirect('user/login','refresh');
				exit();
			}
		}

	}
?>