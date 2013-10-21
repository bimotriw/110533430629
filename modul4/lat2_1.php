<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Mulai
 2. Pada browser akan men-set session dengan nama 'test' dan ber-value 'value'
 3. Jika cookie dengan nama 'test' ter-set maka akan tampil value dari session tersebut'
 4. Selesai
-->
	<head>
		<title>Set Session</title>
	</head>
	
	<body>
		<?php
		//Inisialisasi data session
		session_start();
		
		//Set session jika belum ada
		if(!isset($_SESSION['test'])) {
			$_SESSION['test'] = 'value';
		} else {
			echo 'Session di-set <br />';
			//Mencetak nilai session test
			echo 'Nilai: ' . $_SESSION['test'] . '<br />';
			
			//Mencetak semua elemen session
			print_r($_SESSION);
		}
		?>
		
		<p>
		Tekan Refresh (f5).
	</body>
</html>