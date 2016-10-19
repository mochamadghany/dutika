function counter(time, url){
	var id_anggota = 
	var interval = setInterval(function(){
		$('#waktu').text(time);
		time = time - 1;
 
		if(time == 0){
			clearInterval(interval);
			window.location = url;
		}
	}, 1000);
}
 
$(document).ready(function(){
	counter(10, '<?php echo base_url();?>user/duel/c_duel/hasil_find');
});