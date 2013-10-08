<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Mulai
 2. Pilih jenis kelamin anda
 3. Tekan tombol OK untuk men-submit form
 4. Akan muncul hasil yaitu jenis kelamin yang anda pilih dan pilihan jenis kelamin masih bertanda
 5. Selesai
-->
	<head>
		<title>Prefill Data Radio Button</title>
	</head>
	<body>
    	<!-- action pada file itu sendiri yang pengiriman data melalui method POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Jenis Kelamin 
            <!-- terdapat validasi php pada masing-masing checkbox yang digunakan untuk prefilling inputan yang telah dipilih tetap ditandai dengan menambahkan attribut checked -->
			<input type="radio" name="sex" value="Pria" <?php if($_POST['sex']=='Pria')echo"checked"; ?> />Pria 
			<input type="radio" name="sex" value="Wanita" <?php if($_POST['sex']=='Wanita')echo"checked"; ?> />Wanita
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['sex'])){ //validasi digunakan jika terdapat masukkan yang nama variablenya "sex" yang didapat dari method POST
				echo $_POST['sex'];
			}
		?>
	</body>
</html>