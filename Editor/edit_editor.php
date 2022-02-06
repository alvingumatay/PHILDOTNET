 <?php require_once 'logincheck.php'; ?>
<?php require 'edit_query.php' ?>    
<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>PHILDOTNET || EDITOR</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "shortcut icon" href = "./uploads/1.png" />
		<link rel = "stylesheet" type = "text/css" href = "../css2/bootstrap.min.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css2/jquery.dataTables.css" />
        	<link rel = "stylesheet" type = "text/css" href = "../css/jquery-ui.css"> 
		<link href="../font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet"> 
		<link rel = "stylesheet" type = "text/css" href = "../css/customize.css"/>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
        <link rel="stylesheet" href="../css2/css1/bootstrap.css">
         <link rel="stylesheet" href="../css2/css1/bootstrap.min.css">
        <!-- Bootstrap Datatables -->
        <link rel="stylesheet" href="../css2/css1/dataTables.bootstrap.min.css">
        <!-- Bootstrap social button library -->
        <link rel="stylesheet" href="../css2/css1/bootstrap-social.css">
        <!-- Bootstrap select -->
        <link rel="stylesheet" href="../css2/css1/bootstrap-select.css">
        <!-- Bootstrap file input -->
        <link rel="stylesheet" href="../css2/css1/fileinput.min.css">
        <!-- Awesome Bootstrap checkbox -->
        <link rel="stylesheet" href="../css2/css1/awesome-bootstrap-checkbox.css">
        <!-- Admin Stye -->
        <link rel="stylesheet" href="../css2/css1/style.css">
	</head>
<body>
<?php include('includes/header.php');?>
<br/><br/><br/><br/>
  <div class="ts-main-content">
  <?php include('includes/leftbar.php');?>
  <div class="content-wrapper">
  <div class="container-fluid">
  <div class="row">
     
      <div class = "panel panel-primary"> 
    <?php
      $conn = new mysqli("localhost","root","","ckeditor") or die(mysqli_error());
      $query = $conn->query("SELECT * FROM `news_editor` WHERE `admin_id`") or die(mysqli_error());
      $fetch = $query->fetch_array();
    ?>
      <div class = "panel-heading">
        <label>EDIT EDITOR ACCOUNT</label>
        <a href = "account_setting.php" class = "btn btn-sm btn-info" style = "float:right; margin-top:-5px;"><span class = "glyphicon glyphicon-hand-right"></span> BACK</a>
      </div>
      <div class = "panel-body">
        <form id = "form_admin" method = "POST" enctype = "multi-part/form-data" >
          <div class = "panel panel-default" style = "width:60%; margin:auto;">
          <div class = "panel-heading">
          </div>
          <div class = "panel-body">
            <div class = "form-group">
              <label for = "username">Username: </label>
              <input class = "form-control" name = "username" value = "<?php echo $fetch['username'] ?>" type = "text" required = "required">
            </div>
            <div class = "form-group">  
              <label for = "password">Password: </label>
              &nbsp;&nbsp;
              <input class = "form-control" id="myInput"   name = "password" value = "<?php echo $fetch['password']?>" maxlength = "12" type = "password" required = "required">
            </div>
            <div class = "form-group">
              <label for = "firstname">Firstname: </label>
              <input class = "form-control" type = "text" name = "firstname" value = "<?php echo $fetch['firstname'] ?>" required = "required">
            </div>
           
            <div class = "form-group">
              <label for = "lastname">Lastname: </label>
              <input class = "form-control" type = "text" name = "lastname" value = "<?php echo $fetch['lastname'] ?>">
            </div>
              <button  class = "btn btn-warning" name = "edit_editor" ><span class = "glyphicon glyphicon-edit">
              </span> SAVE</button>
            
              <input type="checkbox" onclick="myFunction()">Show Password 
          </div>
          
          </div>
        </form>
      </div>  
    </div>
    <?php require 'edit_query.php' ?>         

		            
		</div>
	   </div>
    </div>

	
<?php require'script.php' ?>
<script type="text/javascript" rel="stylesheet" src="../js/showhide.js"></script>
<script type = "text/javascript" src="../js2/confirmdelete.js"></script>
<script type = "text/javascript" src="../js2/forward.js"></script>
<!-- Loading Scripts -->
  <script src="../js2/js1/jquery.min.js"></script>
    <script src="../js/jquery.min2.js"></script>
  <script src="../js2/js1/bootstrap-select.min.js"></script>
  <script src="../js2/js1/bootstrap.min.js"></script>
  <script src="../js2/js1/jquery.dataTables.min.js"></script>
  <script src="../js2/js1/dataTables.bootstrap.min.js"></script>
  <script src="../js2/js1/Chart.min.js"></script>
  <script src="../js2/js1/fileinput.js"></script>
  <script src="../js2/js1/chartData.js"></script>
  <script src="../js2/js1/main.js"></script>
  <script type="text/javascript">
         $(document).ready(function () {          
          setTimeout(function() {
            $('.succWrap').slideUp("slow");
          }, 3000);
          });
  </script>
</body>
</html>