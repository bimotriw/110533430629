<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Mulai
 2. Masukkan nama pada input text
 3. Tekan tombol OK untuk men-submit form
 4. Akan muncul hasil seperti yang diinputkan dengan pengambilan data metode POST
 5. Selesai
-->
	<head>
		<title>Metode POST</title>
	</head>
	<body>
    	<!-- action pada file itu sendiri yang pengiriman data melalui method POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Nama <input type="text" name="nama" />
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['nama'])){ //validasi digunakan jika terdapat masukkan yang nama variablenya "nama" yang didapat dari method POST
				echo 'Hallo '. $_POST['nama'];
			}
		?>
	</body>
</html>