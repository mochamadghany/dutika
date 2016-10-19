<!DOCTYPE html>
<html>
<head>
	<title>Tambah Hint</title>
</head>
<body>

<h2>Tambah Data</h2>

<form action="<?= site_url('C_hint/simpan') ?>" method="post">
	<table>
		<tr><td colspan="2">Pertanyaan</td></tr>
		<tr><td colspan="2"><input type="text" name="pertanyaan" autofocus /></td></tr>
		<tr>
			<td align="left"><a href="<?= site_url('C_hint') ?>"><button type="button">BATAL</button></a></td>
			<td align="right"><button type="submit" name="submit">SIMPAN</button></td>
		</tr>
	</table>
</form>

</body>
</html>