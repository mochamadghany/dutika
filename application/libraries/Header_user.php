<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Header_user {
	public function index()
	{	
		$session = $this->session->userdata('bahasa');
        $bahasa = $this->session->userdata('language');
        
		if($bahasa == 'Indonesia')
        {
            $this->bhs=$bahasa;
            $this->lang->load('home','indonesia');                        
        }
        elseif($bahasa == 'English')
        {
            $this->bhs=$bahasa;
            $this->lang->load('home','english');
        }
        else
        {
            $this->bhs ='Indonesia';
            $this->lang->load('home','indonesia');                         
        }
            //index
            //menu
            $this->h_beranda = $this->lang->line('h_beranda');
            $this->h_tentang = $this->lang->line('h_tentang');
            $this->h_keaggotaan= $this->lang->line('h_keaggotaan');
            $this->h_devisi= $this->lang->line('h_devisi');
            $this->h_forum= $this->lang->line('h_forum');
            $this->h_kontak= $this->lang->line('h_kontak');
            $this->h_publikasi= $this->lang->line('h_publikasi');
            $this->h_klinik= $this->lang->line('h_klinik');
	}
}
?>
