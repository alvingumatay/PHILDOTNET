 <?php
 
      $connect =  mysqli_connect("localhost","root","","ckeditor");
     if(isset($_POST['submit'])){
 	 $username = $_POST['username'];
 	 $check_username=mysqli_query($connect,"SELECT * FROM news_editor WHERE username='".$username."'");
 	 if(mysqli_num_rows($check_username)==1){
   		header('location:resetpass.php?username='.$username);
 	}else{
 		echo "<script>alert('Wrong UserName.');
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
	<?php include('includes/header2.php');?>
<div class="ts-main-content">
   <br/> <br/> <br/> <br/> <br/> <br/>
		<center>
  <div class="card mx-auto" style="width: 30rem;">
  <div class="card-body">
		<div class = "panel panel-primary">
			
			<div class = "panel-heading">
				<center><h3>Verify Email</h3></center>
			</div>

      
		<div class = "panel-body">	
		<form method="post">
		<div class = "form-group">	
		<input class = "form-control" type="text" name="username" placeholder="Enter UserName">
	    </div>
	    <div class = "form-group">
	    <button class = "btn btn-block btn-warning  type="submit"  name="submit"><h4>Check</h4></button>
		</div>		
		</form>
	</div>
</div>
</div>
</div>
</center>
</body>
</html>