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
				<li class="active"><a href="<?= site_url('c_user') ?>"><i class="icon-user"></i><span>User</span> </a> </li>
				<li><a href="<?= site_url('c_hint') ?>"><i class="icon-question-sign"></i><span>Hint</span> </a> </li>
				<li><a href="<?= site_url('c_penghargaan') ?>"><i class="icon-trophy"></i><span>Penghargaan</span> </a></li>
				<li><a href="<?= site_url('c_leaderboard') ?>"><i class="icon-list-ol"></i><span>Urutan</span> </a> </li>
				<li><a href="<?= site_url('admin/C_tampilskl') ?>"><i class="icon-list-ol"></i><span>Score Coin Level</span> </a> </li>
				<li><a href="<?= site_url('admin/C_level') ?>"><i class="icon-list-ol"></i><span>Level</span> </a> </li>
				<li><a href="<?= site_url('admin/c_soal') ?>"><i class="icon-question-sign"></i><span>Soal</span> </a> </li>
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
								<a href="<?= site_url('c_user') ?>" class="btn btn-small btn-invert">
									<i class="btn-icon-only icon-arrow-left"></i>
								</a>
							</div>

							<i class="icon-th-list"></i>
							<h3>TAMBAH DATA</h3>
						</div>
						<!-- /widget-header -->
						<div class="widget-content">
							<form action="<?= site_url('c_user/simpan') ?>" method="post">
								<table style="margin: 30px 140px 80px;">
									<tr>
										<td width="200px">Username</td>
										<td><input type="text" name="username" autofocus /></td>
									</tr>
									<tr>
										<td>Password</td>
										<td><input type="text" name="password" /></td>
									</tr>
									<tr>
										<td>Nama</td>
										<td><input type="text" name="nama" /></td>
									</tr>
									<tr>
										<td>Email</td>
										<td><input type="text" name="email" /></td>
									</tr>
									<tr>
										<td>ID Hint</td>
										<td><input type="text" name="id_hint" /></td>
									</tr>
									<tr>
										<td>Jawaban</td>
										<td><input type="text" name="jawaban" /></td>
									</tr>

									<tr>
										<td colspan="2" align="right">
											<button type="submit" name="submit" class="btn btn-small btn-info">SIMPAN</button>
										</td>
									</tr>
								</table>
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