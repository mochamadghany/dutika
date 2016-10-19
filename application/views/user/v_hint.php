<!DOCTYPE html>
<html>
<head>
	<title>Tampil</title>
</head>
<body>

<h1>Halaman utama</h1>
<h3>Menampilkan data dari tabel tb_hint</h3>

<a href="<?= site_url('C_hint/tambah') ?>"><button type="button">TAMBAH</button></a>

<table border="1px">
	<tr>
		<th>No.</th>
		<th>Pertanyaan</th>
		<th colspan="2">Pilihan</th>
	</tr>

	<?php 
		$no = 1; 
		foreach ($hint as $h) { ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $h->pertanyaan ?></td>
				<td><a href="<?= site_url('C_hint/ubah').'/'.$h->id_hint ?>"><button>UBAH</button></a></td>
				<td><a href="<?= site_url('C_hint/hapus').'/'.$h->id_hint ?>"><button>HAPUS</button></a></td>
			</tr>
	<?php 
		} ?>
</table>

</body>
</html>