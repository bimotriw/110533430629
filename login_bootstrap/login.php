<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login</title>
<meta name="description" content="File Upload">
<meta name="viewport" content="width=device-width">
<!-- Bootstrap CSS Toolkit styles -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<!-- Bootstrap styles for responsive website layout, supporting different screen sizes -->
<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
<!-- Bootstrap Image Gallery styles -->
<link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
<link rel="stylesheet" href="css/jquery.fileupload-ui.css">

</head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">Tugas Login Bootstrap</a>
            <div class="nav-collapse">
                <ul class="nav pull-right">
                    <li class="active"><a href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="page-header">
        <h1>Login-Bootstrap</h1>
    </div>
    <br>
    <!-- The file upload form used as target for the file upload widget -->
    <form action="act_login.php" method="POST">
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
        	<div class="span4">
            	<label>Username</label>
            	<input type="text" name="user" required>
                <label>Password</label>
            	<input type="password" name="pass" required>
        		<br>
        		<input type="submit" value="Login">
           	</div>
    	</div>
    </form>
</div>

<script src="js/jquery.min.js"></script>
<!-- Bootstrap JS and Bootstrap Image Gallery are not required, but included for the demo -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-image-gallery.min.js"></script>

</body> 
</html>
