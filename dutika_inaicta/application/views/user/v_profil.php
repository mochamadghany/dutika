<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
</head>
<body>
	Halo, <?= $this->session->userdata('akun').'.' ?>
	<hr>
	<div>
		<a href="<?= site_url('C_profil/tambah') ?>"><button>TAMBAH</button></a>
		<a href="<?= site_url('C_profil/keluar') ?>"><button>KELUAR</button></a>
		 | <a href="<?= site_url('C_hint') ?>"><button>Hint</button></a>
	</div>
	<div>
	</div>
	<hr>
	<h2>Menampilkan data dari tb_user</h2>
	<hr>

	<table border="1px">
		<tr>
			<th>No.</th>
			<th>Username</th>
			<th>Password</th>
			<th>Nama lengkap</th>
			<th>Email</th>
			<th>Waktu bergabung</th>
			<th>Status verifikasi</th>
			<th colspan="2">Opsi</th>
		</tr>

		<?php $no=1; foreach ($profil as $p): ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $p->username ?></td>
				<td><?= $p->password ?></td>
				<td><?= $p->nama ?></td>
				<td><?= $p->email ?></td>
				<td><?= $p->tanggal ?></td>
				<td><?= $p->status ?></td>
				<td><a href="<?= site_url('C_profil/ubah').'/'.$p->id_user ?>"><button>UBAH</button></a></td>
				<td><a href="<?= site_url('C_profil/hapus').'/'.$p->id_user ?>"><button>HAPUS</button></a></td>
			</tr>
		<?php endforeach; ?>
	</table>

</body>
</html>