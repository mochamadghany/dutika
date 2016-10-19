<!DOCTYPE html>
<html>
<head>
		<title>Dutika</title>
		<link rel="icon" type="icon" href="<?= base_url() ?>logic/img/logo-dutika.png" type="image/png">
		<link rel = "stylesheet" href="<?= base_url() ?>logic/styles/style-login.css">
			<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">      
			<style>

			</style>
</head>

<body style="overflow:auto;">

<header class="versus">
	<section id="content-user-vs" style="margin-bottom:0px;">
		<div class="profil-versus">
			<img src="<?= base_url() ?>logic/img/swag-bitch.jpg">
			<div class="circle-versus-data" ><p>0/100</p></div>
			<div class="circle-versus-data" ><p>0/100</p></div>
			<div class="circle-versus-data" ><p>0/100</p></div>
			<div class="circle-versus-data" ><p>0/100</p></div>
			<div class="circle-versus-data" ><p>0/100</p></div>
		</div>
		<p class="name-versus">Fajar Saputro J</p>
	</section>
	
	<section id="middle-user-vs" style="margin-bottom:0px;">
		<h2 class="versus"><span>0</span><span><span> : <span>69<span></h2>
	</section>

	<aside id="sidebar-user-vs" style="margin-bottom:0px;">
		<div class="profil-versus">
			<div class="circle-versus-data" ><p>0/100</p></div>
			<div class="circle-versus-data" ><p>0/100</p></div>
			<div class="circle-versus-data" ><p>0/100</p></div>
			<div class="circle-versus-data" ><p>0/100</p></div>
			<div class="circle-versus-data" ><p>0/100</p></div>
			<img src="<?= base_url() ?>logic/img/gani.jpg" class="enemy-versus">
		</div>
		<p class="name-versus">Moch Ghani R</p>
	</aside>
</header>

<div class="progress-wrap progress-loading" data-progress-percent="-100">
	<div class="progress-bar-loading progress-loading"></div>
</div>


<div class="content-versus">
	<div class="label-round">
		<p>1 / 5</p>
	</div>

	<div class="prescreener show js-center grid">

		<div class="answer">
			<div id="hasil"></div>

			<form method="post" id="quiz_form">
				<?php $a=1 ?>
					<?php foreach ($soalsoal as $soal) { ?>
						<div id="soal<?php echo $a?>" class="soal">
							<h2 id="soal<?php echo $a?>"><?php echo $soal->soal;?></h2>

							<input type="radio" value="A" id='radioa_<?php echo $a;?>' name='jawaban<?php echo $a;?>'>
							<label id='jawabanatext<?php echo $a;?>' for='jawaban<?php echo $a;?>'><?php echo $soal->jawaban_texta;?></label>

							<br/>

							<input type="radio" value="B" id='radiob_<?php echo $a;?>' name='jawaban<?php echo $a;?>'>
							<label id='jawabanbtext<?php echo $a?>' for='jawaban<?php echo $a;?>'><?php echo $soal->jawaban_textb;?></label>

							<br/>

							<input type="radio" value="C" id='radioc_<?php echo $a;?>' name='jawaban<?php echo $a;?>'>
							<label id='jawabanctext<?php echo $a;?>' for='jawaban<?php echo $a;?>'><?php echo $soal->jawaban_textc;?></label>

							<br/>

							<input type="radio" value="D" id='radiod_<?php echo $a;?>' name='jawaban<?php echo $a;?>'>
							<label id='jawabandtext<?php echo $a?>' for='jawaban<?php echo $a;?>'><?php echo $soal->jawaban_textd;?></label>

							<br/>
							
							<input type="radio" checked='checked' value="Z" style='display:none' id='radioz_<?php echo $a;?>' name='jawaban<?php echo $a;?>'>
							
							<br/>
							<input type="button" id='next<?php echo $a;?>' value='Selanjutnya!' name='soal' class='butt'/>
						</div>
					<?php $a++;?>
				<?php } ?>
			</form>     
		</div> 

		<div class="actions">
			<a href="#" class="submit disabled" class="quiz">Submit</a>
		</div>
	</div>
</div>




<div class="or-spacer-vertical right-skip">
	<div class="mask"></div>
</div>

<footer class="footer-content-versus">
	<main class="content-container">
		<section class="box primary">
			<a href="#"><div class="footer-skip-next"><i class="fa fa-angle-left"></i> I Give Up I Want Quit</div></a><div class="skip-separator"></div>
		</section>

		<aside class="box secondary">
				<button class='button-versus check-versus -border-versus'>Skip This Question&nbsp;<i class="fa fa-angle-right"></i> </button>
		</aside>

		<aside class="box tertiary" >
				<button class='button-versus done-versus -border-versus'>Submit My Answer</button>
		</aside>
	</main>
</footer>

</body>




<!-- Side -->
	<div class="rightColumn3">	
		<br>	
		<?php foreach ($quizpopuler as $data) { ?>
			<div class="tile" style="background-image: url('<?= base_url() ?>images/quiz/<?= $data->cover ?>')">
				<div class="image-title"> 
					<h1><a href="<?= base_url() ?>user/c_quiz/jawab/<?= $data->id_quiz ?>"> <?= $data->judul_quiz ?></h1>
				</div>
			</div>
		<?php } ?>
	</div>

<script src="<?php echo base_url();?>asset/ckeditor/jquery/jQuery-2.1.4.min.js"></script>

<script>
	$(document).ready(function(){
		var steps = $('form').find(".soal");
		var count = steps.size();
		
		steps.each(function(i){
			
			hider=i+2;
			if (i == 0) {   
					$("#soal" + hider).hide();
					createNextButton(i);
					}
			else if(count==i+1){
				var step=i + 1;
				//$("#next"+step).attr('type','submit');
							$("#next"+step).on('click',function(){

					 submit();

							});
				}
			else{
				$("#soal" + hider).hide();
				createNextButton(i);
			}

		});
			function submit(){
				var id = <?php echo $idquiznya;?> 
				 $.ajax({
							type: "POST",
							url: "<?=base_url()?>user/duel/c_duel/quiz_ajax/"+id,
							data: $('form').serialize(),
							success: function(msg) {
								$("#quiz_form").addClass("hide");
								// alert(msg);
								$('#hasil').show();
								$('#hasil').append(msg);
							}
				 });

		}
		function createNextButton(i){
			var step = i + 1;
			var step1 = i + 2;
					$('#next'+step).on('click',function(){
						$("#soal" + step).hide();
						$("#soal" + step1).show();
					});
		}
	});
</script>

</body>
</html>