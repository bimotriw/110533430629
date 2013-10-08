<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Mulai
 2. Pilih pekerjaan anda
 3. Tekan tombol OK untuk men-submit form
 4. Akan muncul hasil yaitu pekerjaan anda
 5. Selesai
-->
	<head>
		<title>Data Seleksi</title>
	</head>
	<body>
    	<!-- action pada file itu sendiri yang pengiriman data melalui method POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Pekerjaan 
			<select name="job">
				<option value="Mahasiswa">Mahasiswa</option>
				<option value="ABRI">ABRI</option>
				<option value="PNS">PNS</option>
				<option value="Swasta">Swasta</option>
			</select>
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['job'])){ //validasi digunakan jika terdapat masukkan yang nama variablenya "job" yang didapat dari method POST
				echo $_POST['job'];
			}
		?>
	</body>
</html>