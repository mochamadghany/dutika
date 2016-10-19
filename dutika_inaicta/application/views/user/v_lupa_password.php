<center>
	<form action="<?php echo base_url(); ?>user/C_lupa_password/submit" method="POST">
		Email : <br>
		<input type="email" name="email"><br><br>
		Pertanyaan : <br>
		<select name="hint">
		<?php foreach ($hint as $q):?>
			<option value="<?php echo $q->id_hint;?>"><?php echo $q->pertanyaan;?></option>
		<?php endforeach;?>
		</select>
		<br><br>
		Jawaban : <br>
		<input type="text" name="jawaban"><br><br>

		<input type="submit" name="submit" value="Submit">
	</form>
</center>