<!DOCTYPE html>
<html>
<head>
	<title>Ubah data user</title>
</head>
<body>

	<center>
		<h1>Ubah Data</h1>
		<table>
			<tr>
				<form action="<?php echo base_url(); ?>C_user/ubah_simpan" method="POST" enctype="multipart/form-data">
					<?php foreach ($user as $q): ?>
						
						<input type="hidden" name="id_user" value="<?php echo $q->id_user; ?>"><br>
						Username : <input type="text" name="username" value="<?php echo $q->username; ?>"><br>
						Password : <input type="text" name="password" value="<?php echo $q->password; ?>"><br>
						E-mail : <input type="email" name="email" value="<?php echo $q->email; ?>"><br>
						Tanggal : <input type="text" name="tanggal" value="<?php echo $q->tanggal; ?>"><br>
						Pertanyaan : 
						<select class="form-control" onclick="cari(this.value)">
							<?php foreach ($hint as $a){ ?>
							<option value="<?php echo $a->pertanyaan; ?>"
								<?php if ($a->id_hint == $a->id_hint) {
									echo 'selected="selected"';
								}
								?>>
								<?php echo $a->pertanyaan; ?>
							</option>
							<?php } ?>
						</select>
						Jawaban : <input type="text" name="jawaban" value="<?php echo $q->jawaban; ?>"><br>
						Status : <input type="text" name="status" value="<?php echo $q->status; ?>"><br>
						<br>
						<input type="submit" name="ubah" value="Ubah">
					
					<?php  endforeach; ?>
				</form>
			</tr>
		</table>
	</center>

</body>
</html>