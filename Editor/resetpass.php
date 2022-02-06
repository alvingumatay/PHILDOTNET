<!DOCTYPE html>
<?php
  $connect = mysqli_connect("localhost","root","","ckeditor");
  if(isset($_POST['submit'])){
  	$newpass = $_POST['newpass'];
  	$username = $_GET['username'];


  	$changepass=mysqli_query($connect,"UPDATE news_editor SET password='".$newpass."' WHERE username='".$username."'");
  	if($changepass){
  		echo "<script>alert('Successfully Changed Password.')</script>";
  		echo "<script>window.open('index.php','_self')</script>";
  		
  	}else{
      echo "<script>alert('Error.');
       </script>";
  	}	
  }
?>

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
<?php include('includes/header3.php');?>
<div class="ts-main-content">
	<br/><br/>	<br/>	<br/>	<br/>	
<br/>	<br/>	<br/>	<br/>	<br/>	
<div class="card mx-auto" style="width: 30rem;">
  <div class="card-body">
		<div class = "panel panel-primary">
			<div class = "panel-heading">
				<center><h3>Change Password</h3></center>
			</div>
		<div class = "panel-body">	
		<form method="post">
		<div class = "form-group">				
		<input class="form-control" type="text"  name="newpass" placeholder="Enter new Pass">
		</div>
		<div class = "form-group">	
		<button class="btn btn-block btn-warning" type="submit" name="submit"><h4>Change</h4></button>
		</div>
		</form>
	</div>
    </div>
   </div>
 </div>
</div>
</body>
</html>