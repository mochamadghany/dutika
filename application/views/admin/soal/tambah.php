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
				<li class="active"><a href="<?= site_url('admin/c_soal') ?>"><i class="icon-question-sign"></i><span>Soal</span> </a> </li>
				<li><a href="<?= site_url('admin/c_quiz/daftarquiz') ?>"><i class="icon-align-center"></i><span>Quiz</span> </a> </li>
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
								<a href="<?= site_url('admin/c_soal') ?>" class="btn btn-small btn-invert">
									<i class="btn-icon-only icon-arrow-left"></i>
								</a>
							</div>

							<i class="icon-th-list"></i>
							<h3>TAMBAH DATA</h3>
						</div>
						<!-- /widget-header -->
						<div class="widget-content" style="padding: 30px 140px 80px;">


















<!-- <div class="panel panel-default"> -->
	<div class="panel-heading">
		<strong>Keterangan Soal</strong>
	</div>
	<div class="panel-body">
		<form action="<?php echo base_url();?>admin/c_soal/tambahsoalpost" method="POST">
			<div class="form-group">
				<label for="kategori">Kategori</label>
				<select class="form-control" name="kategori">
				<?php foreach ($kategori as $kategori) {?>
					<option value="<?php echo $kategori->id_level;?>"><?php echo $kategori->tingkat;?> <?php echo $kategori->kelas;?></option>

				<?php }?>
				</select>
			</div>

			<div class="form-group">
				<label for="xp">XP</label>
				<input type="number" name="xp" class="form-control">
			</div>

			<div class="form-group">
				<label for="jawabanbenar">Opsi Pilihan Benar Untuk Soal Ini</label>
				<select class="form-control" name="jawabanbenar">
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
					<option value="D">D</option>
				</select>
			</div>
	</div>
	<div class="panel-footer">
		
</div>


<?php for ($b=1; $b <= $jumlah_lang ; $b++) { ?>
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>
			<?php 
			$bahasanya = $b-1;
				echo $lang[$bahasanya]->language; 
			?>
			</strong>
	</div>
	<div class="panel-body">
	<div class="form-group">
				<label for="soal<?php echo $b?>">Soal</label>
				<input type="text" name="soal<?php echo $b?>" class="form-control">
			</div>
			<div class="form-group">
				<div class="input-group">
			      <span class="input-group-addon">
			      	A
			      </span>
			      <input type="text" class="form-control" name="jawabana<?php echo $b?>">
			    </div><!-- /input-group -->
			</div>
			<div class="form-group">
				<div class="input-group">
			      <span class="input-group-addon">
			      	B
			      </span>
			      <input type="text" class="form-control" name="jawabanb<?php echo $b?>">
			    </div><!-- /input-group -->	
			</div>
			<div class="form-group">
				<div class="input-group">
			      <span class="input-group-addon">
			      	C
			      </span>
			      <input type="text" class="form-control" name="jawabanc<?php echo $b?>">
			    </div><!-- /input-group -->
			</div>
			<div class="form-group">
				<div class="input-group">
			      <span class="input-group-addon">
			      	D
			      </span>
			      <input type="text" class="form-control" name="jawaband<?php echo $b?>">
			    </div><!-- /input-group -->
			</div>

	</div>
	<div class="panel-footer">	

</div>
</div>
<?php } ?>

			<div class="form-group">
				<input type="submit" value="SIMPAN" class="btn btn-info col-lg-12 col-md-12 col-sm-12 col-xs-12">
			</div>
		</form>













		
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

</body>
</html>