<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=0.8, maximum-scale=2, user-scalable=yes">
	<title>Obrolan</title>
	<style>
		body {
			background-color: #3498db;
			font-family: calibri;
		}
		p {
			margin: 0px;
		}

		.utama {
			padding: 10px;
			width: 340px;
			border: 1px solid #F0F0F0;
			background-color: #F9F9F9;
			border-radius: 54px;
		}
			.tempat_pesan {
				padding: 10px;
				width: calc(100% - 20px);
				height: 500px;
				overflow: auto;
			}

		.pesan {
			margin-bottom: 20;
			padding: 10px 20px;
			text-align: left;
			border-radius: 8px;
			/*background-color: #3498db;*/
			/*background-color: #e74c3c;*/
			background-color: #2ecc71;
			color: white;
		}
		.saya {
			background-color: #3498db;
		}
		.teman {
			background-color: #ECECEC;
			color: #3C3C3C;
		}
			.pesan:hover {
				opacity: .8;
			}
			.pesan li {
				padding: 0px 0px;
			}

		.nama_pengguna {
			font-size: 12pt;
			margin-bottom: 1em;
		}

		.isi_pesan {
			font-size: 10pt;
		}

		.waktu {
			margin-top: .8em;
			font-size: 7pt;
			color: #E3E3E3;
			text-align: right;
		}
			.waktu.teman {
				color: #373737;
			}

		.kirim_pesan {
			padding: 9px 20px;
			border-radius: 3px;
			border: 1px solid #ECECEC;
		}
			.teks_pesan {
				width: calc(86% - 42px);
			}
			.tombol_pesan {
				margin-left: 10px;
				width: calc(35% - 42px);
			}
				.tombol_pesan:active {
					background-color: #3498db;
					color: white;
				}
	</style>

	<script>
		$(document).ready(function() {
			function tampildata() {
				$.ajax({
					url:"<?= site_url('c_chat') ?>",
				});
			}

			setInterval(function(){
				tampildata();
			},1000);
		});
	</script>
</head>
<body>
<center>
	<?php
		$akun = $this->session->userdata('akun');
	?>
	<div class="utama">

		<h2>NUKIEU</h2>
		
		<hr>
		
		<div class="tempat_pesan">
			<?php foreach($chat as $tampil): 
				$user = $tampil->user;
				if ($user==$akun) {
					$profil = "saya";
				} else {
					$profil = "teman";
				} ?>

				<div class="pesan <?= $profil ?>">
					<li class="nama_pengguna"><?= $tampil->user ?></li>
					<p class="isi_pesan"><?= $tampil->pesan ?></p>
					<div class="waktu <?= $profil ?>"><?= $tampil->waktu ?></div>
				</div>
			<?php endforeach; ?>
		</div>

		<hr>

		<form action="<?= site_url('c_chat/simpan') ?>" method="post">
			<input type="text" class="kirim_pesan teks_pesan" name="pesan" placeholder="tulis sesuatu..."><button type="submit" name="submit" class="kirim_pesan tombol_pesan">KIRIM</button>
		</form>

		
		<h5><?= $akun ?></h5>
	</div>
</center>


</body>
</html>