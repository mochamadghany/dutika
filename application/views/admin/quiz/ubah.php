<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>DUTIKA - Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?= base_url() ?>asset/css_admin/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url() ?>asset/css_admin/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
<link href="<?= base_url() ?>asset/css_admin/font-awesome.css" rel="stylesheet">
<link href="<?= base_url() ?>asset/css_admin/style.css" rel="stylesheet">
<link href="<?= base_url() ?>asset/css_admin/pages/dashboard.css" rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container"> 
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
			</a>

			<a class="brand" href="index.html">dutika | Admin panel</a>

			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog"></i> Account <b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="javascript:;">Settings</a></li>
							<li><a href="javascript:;">Help</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i> <?= $session = $this->session->userdata('admin'); ?> <b class="caret"></b>
						</a>
						
						<ul class="dropdown-menu">
							<li><a href="javascript:;">Profile</a></li>
							<li><a href="<?= site_url('c_user/keluar') ?>">Logout</a></li>
						</ul>
					</li>
				</ul>
				<form class="navbar-search pull-right">
					<input type="text" class="search-query" placeholder="Search">
				</form>
			</div>
			<!--/.nav-collapse --> 
		</div>
		<!-- /container --> 
	</div>
	<!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
	<div class="subnavbar-inner">
		<div class="container">
			<ul class="mainnav">
				<li><a href="index.html"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
				<li><a href="<?= site_url('c_user') ?>"><i class="icon-user"></i><span>User</span> </a> </li>
				<li><a href="<?= site_url('c_hint') ?>"><i class="icon-question-sign"></i><span>Hint</span> </a> </li>
				<li><a href="<?= site_url('c_penghargaan') ?>"><i class="icon-trophy"></i><span>Penghargaan</span> </a></li>
				<li><a href="<?= site_url('c_leaderboard') ?>"><i class="icon-list-ol"></i><span>Urutan</span> </a> </li>
				<li><a href="<?= site_url('admin/C_tampilskl') ?>"><i class="icon-list-ol"></i><span>Score Coin Level</span> </a> </li>
				<li><a href="<?= site_url('admin/C_level') ?>"><i class="icon-list-ol"></i><span>Level</span> </a> </li>
				<li><a href="<?= site_url('admin/c_soal') ?>"><i class="icon-question-sign"></i><span>Soal</span> </a> </li>
				<li class="active"><a href="<?= site_url('admin/c_quiz/daftarquiz') ?>"><i class="icon-align-center"></i><span>Quiz</span> </a> </li>
			</ul>
		</div>
		<!-- /container --> 
	</div>
	<!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="widget widget-table action-table">
						<div class="widget-header">
							<div class="pull-left">
								<a href="<?= site_url('admin/c_quiz/daftarquiz') ?>" class="btn btn-small btn-invert">
									<i class="btn-icon-only icon-arrow-left"></i>
								</a>
							</div>

							<i class="icon-th-list"></i>
							<h3>UBAH DATA</h3>
						</div>
						<!-- /widget-header -->

						<div class="widget-content" style="padding: 30px 140px 80px;">
							<div class="panel panel-default">
								<div class="panel-heading">
									<strong>Ubah Kuis</strong>
								</div>

								<div class="panel-body">
									<form action="<?php echo base_url();?>admin/c_quiz/ubah_simpan" method="POST" enctype="multipart/form-data">
									<?php foreach ($data as $quiz):?>
										<input type="hidden" name="id_quiz" value="<?php echo $quiz->id_quiz; ?>">
										<div class="form-group">
											<label for="judul">Cover</label>
											<!-- <img src="<?php 
											// echo base_url();?>images/user/cover<?php
											 // echo $quiz->cover;?>"/>
											<br> -->
											<!-- <input type="file" name="userfile" id="preview_gambar" class="form-control col-md-7 col-xs-12" /> -->
										
										</div>
									
										<div class="form-group">
											<label for="judul">Judul</label>
											<input type="text" name="judul" class="form-control" value="<?php echo $quiz->judul_quiz;?>">
										</div>
										
										<div class="form-group">
											<label for="keterangan">Keterangan</label>
											<input type="text" name="keterangan" class="form-control" value="<?php echo $quiz->keterangan;?>">
										</div>
										<div class="form-group">
											<label for="kategori">Kategori</label>
												<select class="form-control" name="kategori" id="kategori" onchange="myFunction(this.value)">
												<option value="0"><?php echo $quiz->id_level; ?></option>
												<?php foreach ($kategori as $kat) {?>
													<option value="<?php echo $kat->id_level;?>"><?php echo $kat->tingkat;?><?php echo $kat->kelas;?></option>
												<?php }?>
												</select>
										</div>
										<div class="form-group">
											<label for="soal1">Soal 1</label>
											<select class="form-control soal" name="soal1" id="select0">
											<!-- <?php 
											// foreach ($quiz as $s1 ):?>
												<option><?php
												 // echo $s1->soal; ?>
												 </option>
											<?php 
											// endforeach; ?> -->
											<!-- masih error -->
											</select>
										</div>
										<div class="form-group">
											<label for="soal2">Soal 2</label>
											<select class="form-control" name="soal2" id="select1">
												<!-- <?php 
												// echo $quiz->soal2; ?> -->
											</select>
										</div>
										<div class="form-group">
											<label for="soal3">Soal 3</label>
											<select class="form-control" name="soal3" id="select2">
												<!-- <?php 
												// echo $quiz->soal3; ?> -->
											</select>
										</div>
										<div class="form-group">
											<label for="soal4">Soal 4</label>
											<select class="form-control" name="soal4" id="select3">
												<!-- <?php 
												// echo $quiz->soal4; ?> -->
											</select>
										</div>
										<div class="form-group">
											<label for="soal5">Soal 5</label>
											<select class="form-control" name="soal5" id="select4">
												<!-- <?php
												 // echo $quiz->soal5; ?> -->
											</select>
										</div>
										<div class="form-group">
											<ul id="finalResult"></ul>	
										</div>
										
										<?php endforeach; ?>
										<div class="form-group">
											<button type="submit" name="ubah" class="btn btn-small btn-info">UBAH</button>
										</div>
									</form>
								</div>
								<div class="panel-footer">
									
								</div>
							</div>
						</div>
						<!-- /widget-content -->
					</div>
					<!-- /widget --> 
				</div>
				<!-- /span6 --> 
			</div>
			<!-- /row --> 
		</div>
		<!-- /container --> 
	</div>
	<!-- /main-inner --> 
</div>
<!-- /main -->



<div class="footer">
	<div class="footer-inner">
		<div class="container">
			<div class="row">
				<div class="span12" align="center"> &copy; dutika </div>
				<!-- /span12 --> 
			</div>
			<!-- /row --> 
		</div>
		<!-- /container --> 
	</div>
	<!-- /footer-inner --> 
</div>
<!-- /footer --> 

<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="<?= base_url() ?>asset/js/jquery-1.7.2.min.js"></script> 
<script src="<?= base_url() ?>asset/js/excanvas.min.js"></script> 
<script src="<?= base_url() ?>asset/js/chart.min.js" type="text/javascript"></script> 
<script src="<?= base_url() ?>asset/js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="<?= base_url() ?>asset/js/full-calendar/fullcalendar.min.js"></script>
 
<script src="<?= base_url() ?>asset/js/base.js"></script>

<script src="<?php echo base_url();?>asset/ckeditor/jquery/jQuery-2.1.4.min.js"></script>

<script type="text/javascript">
	function myFunction(obj) {
		var idkategori = obj;

		var sel0 = $("#select0");
			sel0.empty();
			var sel1 = $("#select1");
			sel1.empty();	
			var sel2 = $("#select2");
			sel2.empty();
			var sel3 = $("#select3");
			sel3.empty();
			var sel4 = $("#select4");
			sel4.empty();

		$.ajax({
			url:"<?=base_url()?>admin/c_quiz/search_ajax/"+idkategori,
			type:'post',
			dataType: 'json',
			success: function(data) {
				var sel0 = $("#select0");
				sel0.empty();
				var sel1 = $("#select1");
				sel1.empty();	
				var sel2 = $("#select2");
				sel2.empty();
				var sel3 = $("#select3");
				sel3.empty();
				var sel4 = $("#select4");
				sel4.empty();

				for (var i=0; i< data.length; i++) {
				sel0.append('<option value="' + data[i].id + '">' + data[i].soal + '</option>');
				sel1.append('<option value="' + data[i].id + '">' + data[i].soal + '</option>');
				sel2.append('<option value="' + data[i].id + '">' + data[i].soal + '</option>');
				sel3.append('<option value="' + data[i].id + '">' + data[i].soal + '</option>');
				sel4.append('<option value="' + data[i].id + '">' + data[i].soal + '</option>');
				}
			}
		});
	}
</script>

</body>
</html>