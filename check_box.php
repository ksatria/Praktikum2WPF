<!DOCTYPE html>
<html>
	<head>
		<title>Data Check Box</title>
	</head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			Hobi
			<input type="checkbox" name="hobby[]" value="baca" /> Membaca
			<input type="checkbox" name="hobby[]" value="olga" /> Olah raga
			<input type="checkbox" name="hobby[]" value="nyanyi" /> Menyanyi
			<br />
			<input type="submit" value="OK" />
		</form>
		
		<?php
		if(isset($_POST['hobby'])){
			echo "Daftar hobi : <br />";
			
			// Ekstraksi nilai data
			foreach($_POST['hobby'] AS $key => $val){
				echo $key . ' - ' . $val . '<br />';
			}
		}
		?>
	</body>
</html>