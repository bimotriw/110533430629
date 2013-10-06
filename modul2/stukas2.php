<!DOCTYPE html>
<html>
	<head>
		<title>Studi Kasus 1</title>
	</head>
	<body>
		<h1>Kalkulator Sederhana</h1>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			<input type="checkbox" name="ops1" value="5000" <?php if($_POST['ops1']=="5000") echo"checked"; ?> />Mie Ayam @5000
			<br />
			<input type="checkbox" name="ops2" value="7000" <?php if($_POST['ops1']=="7000") echo"checked"; ?> />Bakso @7000
			<br />
			<input type="submit" value="Cek Harga" />
		<?php
			$hasil = $_POST['ops1'] + $_POST['ops2'];
			echo $hasil;
		?>
			<br />
			<label>Total Bayar </label><input type='text' name='hasil' value='<?php echo $hasil;?>' />
			<br />
		</form>
	</body>
</html>