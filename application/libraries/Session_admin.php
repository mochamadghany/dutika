<?php 

	class Session_admin{
		public function cek_admin(){
			$this->ci =& get_instance();
			$this->sesi = $this->ci->session->userdata('isiloginadmin');
			$this->hak = $this->session->userdata('stat_admin');
			if ($this->sesi !=TRUE) {
				redirect('admin/login','refresh');
				exit();
			}
		}
	}

?>