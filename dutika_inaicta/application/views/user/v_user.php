<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<center><h1>Daftar User</h1></center>
		<center><table>
			<form action="<?php echo base_url();?>C_user/simpan" method="POST">
			<tr>
				<td>Username</td>
			</tr>
			<tr>
				<td><input type="text"  name="user" ></td>
			</tr>

			<tr>
				<td>Password</td>
			</tr>

			<tr>
				<td><input type="password"  name="pass" ></td>
			</tr>

			<tr>
				<td>Nama</td>
			</tr>
			<tr>
				<td><input type="text"  name="nama" ></td>
			</tr>

			<tr>
				<td>Email</td>
			</tr>
			<tr>
				<td><input type="email"  name="email" ></td>
			</tr>

			<tr>
				<td>Tanggal</td>
			</tr>
			<tr>
				<td><input type="text" value="<?php echo $tanggal; ?>" name="tanggal" readonly></td>
			</tr>

			<tr>
					<td>Hint</td>
			</tr>
			<tr>
						<td>
							<select name="hint">
								<option value="">--Pilih--</option>
								<option value="1">Apa Nama Panggilan Kamu Waktu Keci?</option>
								<option value="2">Apa Makanan Kesukaan Kamu?</option>
								<option value="3">Apa Hobby Kamu?</option>
								<option value="4">Binatang Apa Yang Kamu Suka</option>
							</select>
						</td>
				</tr>

			<tr>
				<td>Jawaban</td>
			</tr>
			<tr>
				<td><input type="text"  name="jawab" ></td>
			</tr>
			
		</table>
		<input type="submit" name="simpan" value="Simpan">
		<input type="RESET" name="batal" value="Batal">
		<a href="<?php echo base_url();?>C_user/kembali"><input type="button" name="kembali" value="Kembali"></a>

		</center>
</body>
</html>