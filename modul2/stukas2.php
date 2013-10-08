<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Mulai
 2. Pilih makanan yang diinginkan
 3. Tekan tombol OK untuk men-submit form
 4. Akan muncul hasil dari perhitungan total harga dari harga masing-masing makanan yang dipilih
 5. Selesai
-->
	<head>
		<title>Studi Kasus 1</title>
	</head>
	<body>
		<h1>Kalkulator Sederhana</h1>
        <!-- action pada file itu sendiri yang pengiriman data melalui method POST -->
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        	<!-- input checkbox diberi value harga untuk nantinya dimasukkan pada proses perhitungan -->
			<input type="checkbox" name="ops1" value="5000" <?php if($_POST['ops1']=="5000") echo"checked"; ?> />Mie Ayam @5000
			<br />
			<input type="checkbox" name="ops2" value="7000" <?php if($_POST['ops2']=="7000") echo"checked"; ?> />Bakso @7000
			<br />
			<input type="submit" value="Cek Harga" />
		<?php
			$hasil = $_POST['ops1'] + $_POST['ops2']; //proses perhitungan
			echo $hasil;
		?>
			<br />
			<label>Total Bayar </label><input type='text' name='hasil' value='<?php echo $hasil;?>' />
			<br />
		</form>
	</body>
</html>