<!DOCTYPE html>
<html>
	<head>
		<title>Data Seleksi</title>
	</head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			Pekerjaan
			<select name="job">
				<option value="mhs" <?php echo (isset($_POST['job']) AND $_POST['job'] == 'mhs') ? 'selected' : ''; ?>>Mahasiswa</option>
				<option value="tnt" <?php echo (isset($_POST['job']) AND $_POST['job'] == 'tnt') ? 'selected' : ''; ?>>Tentara</option>
				<option value="pns" <?php echo (isset($_POST['job']) AND $_POST['job'] == 'pns') ? 'selected' : ''; ?>>Pegawai Negeri Sipil</option>
				<option value="sws" <?php echo (isset($_POST['job']) AND $_POST['job'] == 'sws') ? 'selected' : ''; ?>>Swasta</option>
			</select>
			<br />
			<input type="submit" value="OK" />
		</form>
		
		<?php
		if(isset($_POST['job'])){
			echo 'Kode pekerjaan = ' . $_POST['job'];
		}
		?>
	</body>
</html>