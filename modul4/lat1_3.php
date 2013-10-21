<!DOCTYPE html>
<html>	
<!-- 
Algoritma Program
 1. Mulai
 2. Pada browser akan men-set cookie dengan nama 'nama_cookie' dan ber-value 'nilai_cookie'
 3. Jika cookie dengan nama 'nama_cookie' ter-set maka cookie akan diberikan nilai kosong yang berarti cookie telah dihapus
 4. Selesai
-->
	<head>		
		<title>Hapus Cookie</title>	
	</head>		
	<body>
		<?php		
		setcookie('nama_cookie', 'nilai_cookie');
		if(isset($_COOKIE['nama_cookie'])) {
			echo 'cookie di-set <br />';			
			//Menghapus cookie, dengan masa berlaku 3 jam yang lalu 
			setcookie('nama_cookie', '', time() - 3 * 3600);			
			echo 'cookie dihapus';		
		} else {			
			echo 'unset';		
		}		
		?>				
		<p>		
		Tekan Refresh (f5).	
	</body>
</html>