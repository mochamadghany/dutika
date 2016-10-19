<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<center><h1>Tambah Topik</h1></center>
		<center><table>
			<form action="<?php echo base_url();?>C_forum/daftarsimpan" method="POST">
			<tr>
				<td>Username</td>
			</tr>
			<tr>
				<input type="text"  name="user" ></td>
			</tr>

			<tr>
				<td>Password</td>
			</tr>
			<tr>
				<input type="password"  name="pass" ></td>
			</tr>

			<tr>
				<td>Nama</td>
			</tr>
			<tr>
				<input type="text"  name="nama" ></td>
			</tr>

			<tr>
				<td>Email</td>
			</tr>
			<tr>
				<input type="email"  name="email" ></td>
			</tr>

			<tr>
				<td>Tanggal</td>
			</tr>
			<tr>
				<td><input type="text"  name="tanggal"></td>
			</tr>

			<tr>
				<td>Hint</td>
			</tr>
			<tr>
				<input type="text"  name="hint" ></td>
			</tr>

			<tr>
				<td>Jawaban</td>
			</tr>
			<tr>
				<input type="text"  name="jawab" ></td>
			</tr>
			
		</table>
		<input type="submit" name="daftarsimpan" value="Simpan"></a>
		</center>
</body>

</html>