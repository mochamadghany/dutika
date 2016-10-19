<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<center><h1>Tambah Topik</h1></center>
		<center><table>
		<?php foreach ($data as $q):?>
			<form action="<?php echo base_url();?>C_forum/simpan" method="POST">
			<tr>
				<td>Username</td>
			</tr>
			<tr>
				<input type="hidden" value="<?php echo $q->id_user;?>" name="id_user">
			<td>
				<input type="text" value="<?php echo $q->username;?>" name="user" readonly></td>
			</tr>
			<tr>
				<td>Tanggal</td>
			</tr>
			<tr>
				<td><input type="text" value="<?php echo $q->tanggal;?>" name="tanggal" readonly></td>
			</tr>
			<tr>
				<td>Judul Topik</td>
			</tr>
			<tr>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>Isi Topik</td>
			</tr>
			<tr>
				<td>
					<textarea id="editortopik" name="isi">
                    </textarea>
                </td>
			</tr>
						
			<?php endforeach;?>
		</table>
		<input type="submit" name="simpan" value="Kirim"></a>
		</center>
<script src="<?php echo base_url();?>asset/ckeditor/jquery/jQuery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  
  $(function () {
            CKEDITOR.replace('editortopik');       
      });

  </script>
</body>

</html>