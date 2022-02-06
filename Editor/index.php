<!DOCTYPE html>
<html>
<head>
	<title>PHILDOTNET || EDITOR</title>
	<meta charset = "utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "shortcut icon" href = "./uploads/1.png" />
    <link rel = "stylesheet" type = "text/css" href = "../css2/bootstrap.min.css" />
    <link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.min.css" />
    <link rel = "stylesheet" type = "text/css" href = "../css2/jquery.dataTables.css" />
    <link rel = "stylesheet" type = "text/css" href = "../css/jquery-ui.css"> 
	<link href="../font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet"> 
    <link rel = "stylesheet" type = "text/css" href = "../css/customize.css"/>
    <link rel="stylesheet" href="../css2/css1/bootstrap.css">
    <link rel="stylesheet" href="../css2/css1/bootstrap.min.css">
    <link rel="stylesheet" href="../css2/css1/style.css">
</head>
<body style="background:url('../uploads/1.png')no-repeat; background-position: center; background-size: cover; background-attachment: all;">
<?php include('includes/header1.php');?>
<div class="ts-main-content">
<br><br><br>
<br><br><br>
<br><br><br>
  <center>
  <div class="card mx-auto" style="width: 26rem;">
  <div class="card-body">
   <div class = "panel panel-primary">
			
			<div class = "panel-heading">
				<center><h3>NEWS EDITOR</h3></center>
			</div>

			<div class = "panel-body">
				<form enctype = "multipart/form-data" action = "login.php" role = "form" method = "POST">
					<div class = "form-group">
						<label for = "username">Username</label>
						<input class = "form-control" name = "username" placeholder = "Username" type = "text" required = "required" >
					</div>
					<div class = "form-group">
						<label for = "password">Password</label>
						<input class = "form-control" name = "password" placeholder = "Password" type = "password" required = "required" >
					</div>
					<div class = "form-group">
						<button class = "btn btn-block btn-info"  name = "login"><h4><span class = "glyphicon glyphicon-log-in"></span> Login</h4></button>
					</div>
				</form>
				<div class="card-footer"><a href="verification.php">Forget a Password ? </a></div>
			</div>
		</div>	
	</div>
    </div>
    </center>
    </div>
    
</body>
</html>