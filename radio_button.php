<!DOCTYPE html>
<html>
	<head>
		<title>Data Radio Button</title>
	</head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			Jenis kelamin
			<input type="radio" name="sex" value="L" 
			<?php echo (isset($_POST['sex']) AND $_POST['sex'] == 'L') ? 'checked' : ''; ?> /> Pria
			<input type="radio" name="sex" value="P" 
			<?php echo (isset($_POST['sex']) AND $_POST['sex'] == 'P') ? 'checked' : ''; ?> /> Wanita
			<br />
			<input type="submit" value="OK" />
		</form>
		
		<?php
		if(isset($_POST['sex'])){
			echo 'Jenis kelamin = ' . $_POST['sex'];
		}
		?>
	</body>
</html>