<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Mulai
 2. Pada browser akan melanjutkan dari lat2_2
 3. Jika cookie dengan nama 'test' ter-set maka akan tampil tulisan 'session dihapus'
 4. Jika cookie dengan nama 'test' belum ter-set maka akan tampil semua elemen session
 5. Selesai
-->
	<head>
		<title>Hapus Session</title>
	</head>
	
	<body>
		<?php
		//Inisialisasi data session
		session_start();
		
		//Set session jika belum ada
		if(isset($_SESSION['test'])) {
			//Hapus session test
			unset($_SESSION['test']);
			
			echo 'session dihapus';
		} else {
			echo 'unset';
			
			//Mencetak semua elemen session
			print_r($_SESSION);
		}
		?>
		
		<p>
		Tekan Refresh (f5).
	</body>
</html>