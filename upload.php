<!DOCTYPE html>
<html>
	<head>
		<title>Upload File</title>
	</head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
			File: <input type="file" name="fl" />
			<input type="submit" name="submit" value="Upload" />
		</form>
		
		<?php
		if(isset($_POST['submit']) AND isset($_FILES['fl'])){
			// Tentukan lokasi penyimpanan file yang di-upload
			$dir = './upload/';
			$file = $_FILES['fl']['tmp_name'];
			$name = $_FILES['fl']['name'];
			
			// Pastikan file yang di-upload ada
			if(!is_uploaded_file($file))
				exit('Tidak ada file yang di-upload');
			
			// Pindahkan file ke direktori penyimpanan
			if(move_uploaded_file($file,$dir.$name))
				echo "File berhasil di-upload";
			else
				echo "File gagal di-upload";
		}
		?>
	</body>
</html>