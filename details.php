<!DOCTYPE html>
<html>
<head>
	<title>NEWS|PHILSTAR</title>
	<meta charset = "utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "shortcut icon" href = "./uploads/1.png" />
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style2.css">
	<link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet"> 
	<link rel="stylesheet" href="./css/bootstrap.css" />	
	<!-- Custom styling -->	
	<link rel="stylesheet" href="./css/main.css">
	
</head>
<body>

<?php include"./includes/nav.php"?>	
<?php include"./includes/header.php"?>	
  <div class="container">
		<div class="row">
			  
			<div class="col-md-8 col-md-offset-2 post-div">  
	  <?php
	     $conn = new mysqli("localhost","root","","ckeditor") or die(mysqli_error());
		 $q = $conn->query("SELECT * FROM `ckeditor` WHERE `id` = '$_GET[id]'") or die(mysqli_error());
		  $f = $q->fetch_array();
		?>
         <div class="post">
         	<br/>
          <h3>
			<?php echo $f['title'];?>
		 </h3>
		 <br/>
		     <?php  echo $f['editor'];?>                                       
			</div> 
         </div>
        
        </div>
        
        </div>


<!-- JQuery -->
<script src="./js/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="./js/bootstrap.min.js"></script>

<!-- JQuery scripts -->

<script src="./js/script.js"></script>
<script src="./ckeditor/ckeditor.js"></script>

</body>
</html>