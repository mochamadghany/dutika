<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
</head>
<body>

<h1>DAFTAR</h1>

<form action="<?= site_url('C_daftar/proses_daftar') ?>" method="post">
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
			<td>Nama lengkap</td>
			<td><input type="text" name="nama" /></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" /></td>
		</tr>
		<tr>
			<td>Pertanyaan</td>
			<td>
				<select name="id_hint">
					<option>-- Pilih pertanyaan --</option>
					<option value="1">Siapa nama ibumu?</option>
					<option value="2">Apa tim sepak bola terbaikmu?</option>
					<option value="3">Tanggal berapa anda lahir?</option>
					<option value="4">Film apa yang pertama kali kamu tonton?</option>
					<option value="5">Dimana SMPmu?</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jawaban</td>
			<td><input type="text" name="jawaban" /></td>
		</tr>

		<tr>
			<td colspan="2" align="right"><button type="submit" name="submit">DAFTAR</button></td>
		</tr>
	</table>
</form>

</body>
</html>