<!DOCTYPE html>
<html>	
<!-- 
Algoritma Program
 1. Mulai
 2. Pada browser akan men-set cookie dengan nama 'test' dan ber-value 'value'
 3. Jika cookie dengan nama 'test' ter-set maka akan tampil tulisan 'support'
 4. Jika cookie dengan nama 'test' belum ter-set maka akan tampil tulisan 'tidak support'
 5. Selesai
-->
	<head>		
		<title>Cek Dukungan Cookie</title>	
	</head>		
	<body>		
		<?php		
		if(isset($_GET['q']) && $_GET['q'] == 1) {			
			if(isset($_COOKIE['test'])) {				
				echo 'support';			
			} else {				
				echo 'tidak support';			
			}		
		} else {			
			setcookie('test', 'value');			
			$self = $_SERVER['PHP_SELF'];						
			//Redirect ke current script			
			header('Location : ' . $self . '?q=1');			
			exit;		
		}		
		?>				
		<p>		
		Tekan Refresh (f5).	
	</body>
</html>