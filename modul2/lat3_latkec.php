<!DOCTYPE html>
<html>
	<head>
		<title>Prefill Data Radio Button</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Jenis Kelamin 
			<input type="radio" name="sex" value="Pria" <?php if($_POST['sex']=='Pria')echo"checked"; ?> />Pria 
			<input type="radio" name="sex" value="Wanita" <?php if($_POST['sex']=='Wanita')echo"checked"; ?> />Wanita
			<br />
			<input type="submit" value="OK" />
		</form>
		<?php
			if(isset($_POST['sex'])){
				echo $_POST['sex'];
			}
		?>
	</body>
</html>