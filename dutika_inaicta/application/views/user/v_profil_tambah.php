<!DOCTYPE html>
<html>
<head>
	<title>Tambah profil</title>
</head>
<body>

<div>
	<a href="<?= site_url('C_profil') ?>"><button>BATAL</button></a>
</div>

<hr>

<h2>Daftar</h2>

<hr>

<form action="<?= site_url('C_profil/simpan') ?>" method="post">
	<table>
		<tr>
			<td>Username</td>
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
			<td>Pertanyaan</td>
			<td><input type="text" name="id_hint" /></td>
		</tr>
		<tr>
			<td>Jawaban</td>
			<td><input type="text" name="jawaban" /></td>
		</tr>

		<tr>
			<td colspan="2" align="right">
				<button type="submit" name="submit">DAFTAR</button>
			</td>
		</tr>
	</table>
</form>

</body>
</html>