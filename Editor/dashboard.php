<?php require_once 'logincheck.php'; ?>
<!DOCTYPE html>
<html lang = "eng">
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
    <link rel="stylesheet" type="text/css" href="../css/design.css">
    <link rel="stylesheet" type="text/css" href="../css/icon.css">
    <style>
      .ip{
        background:url(../uploads/img.png)no-repeat;
        background-size:300px; 
        background-position: center;
      }

      .op{
        background-color: white; 
        width: 50px; 
        height: 50px; 
        border-radius: 50px; 
        position: relative; 
        margin-left: 404px;
        margin-bottom: 0px; 
        margin-top: 20px; 
        top: 30px;
      }
      @media(max-width:768px) {
        .ip{
        background:url(./uploads/img.png)no-repeat;
        background-size:300px; 
        background-position: center;
        }
        .op{
        background-color: white; 
        width: 50px; 
        height: 50px; 
        border-radius: 50px; 
        position: relative; 
        margin-left: 280px;
        margin-bottom: 0px; 
        margin-top: 20px; 
        top: 30px;
        }
      }
    </style>
	</head>
<body>
  <div class="loader" id="loader"></div>
<?php include('includes/header.php');?>
<br/><br/><br/><br/>
  <div class="ts-main-content">
  <?php include('includes/leftbar.php');?>
  <div class="content-wrapper">
  <div class="container-fluid">
  <div class="row">
      <div class="col-md-8 col-md-offset-2 post-div mx-auto">  
    <div class = "panel panel-warning">
      <div class = "panel-heading">
        <center><label><h3>D A S H B O A R D</h3></label></center>
      </div>
      <div class = "panel-body">

         <div class="ip" style="height: 300px;">
           <a href="edit_section.php" class="thumb-nail" >         
              <p class="op">
              <font size="6px;" style="color: red; position: relative; margin-left: 15px; font-weight: bold;" >
              <?php 
                $conn = new mysqli("localhost","root","","ckeditor") or die(mysqli_error()); 
                $qs = $conn->query("SELECT COUNT(id) AS total FROM `ckeditor`") or die(mysqli_error());
                $fs = $qs->fetch_array();
                $num_rows = $fs['total'];
          
                echo $num_rows;
              ?>
              </font>
              </p>
             </a>
              </div>
            </div>
      </div>
      </div> 
      </div>
   </div>
	   </div>
    </div>

</body>
	
<?php require'script.php' ?>
<script>
  window.onload = function(){
    document.getElementById('loader').className = 'loader';
    setTimeout(function(){
     document.getElementById('loader').style.display='none';
    },5000);
  }
</script>
<script type = "text/javascript" src="../js2/confirmdelete.js"></script>
<script type = "text/javascript" src="../js2/forward.js"></script>
<!-- Loading Scripts -->
  <script src="../js2/js1/jquery.min.js"></script>
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
<!-- Loading Scripts -->
<script src="../js2/js1/main.js"></script>
<?php require'script.php' ?>
<!-- Loading Scripts -->
 
 
 <script src="ckeditor/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('editor', {
        filebrowserUploadUrl:'ckeditor/ck_upload.php',
        filebrowserUploadMethod: 'form'
    });

    </script>




<script src="../js3/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="../js3/bootstrap.min.js"></script>
<!-- CKEditor -->



</html>