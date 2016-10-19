<!DOCTYPE html>
<html>
<head>
	<title>Ubah</title>
</head>
<body>

<h2>Ubah</h2>

<form action="<?= site_url('C_hint/ubah_simpan') ?>" method="post">
	<table>
		<?php foreach ($hint as $ubah): ?>
			<input type="text" value="<?= $ubah->id_hint ?>" name="id_hint">
			<tr><td colspan="2">Pertanyaan</td></tr>
			<tr><td colspan="2"><input type="text" name="pertanyaan" value="<?= $ubah->pertanyaan ?>" /></td></tr>
			<tr>
				<td align="left"><a href="<?= site_url('C_hint') ?>"><button type="button">BATAL</button></a></td>
				<td align="right"><button type="submit">SIMPAN</button></td>
			</tr>
		<?php endforeach; ?>
	</table>
</form>

</body>
</html>