<?php
session_start();
$user=$_POST["user"];
$pass=$_POST["pass"];
	if($user=="user"&&$pass="user"){
		?>
		<script type="text/javascript">
		alert('Selamat Datang User!.');
		document.location='login.php';
		</script>
		<?php
		}
	else{
		echo "
		<script>
			alert('Maaf, Username atau Password Anda Salah');
			document.location='login.php';
		</script>
		";
	}
?>