<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Mulai
 2. Pada browser akan men-set cookie dengan nama 'nama_cookie' dan ber-value 'nilai_cookie'
 3. Selesai
-->
	<head>
		<title>Set Cookie</title>
	</head>
	
	<body>
		<?php
		// Men-set nilai cookie
		setcookie('nama_cookie', 'nilai_cookie');
		
		echo $_COOKIE['nama_cookie'];
		?>
		
		<p>
		Tekan Refresh (f5).
	</body>
</html>