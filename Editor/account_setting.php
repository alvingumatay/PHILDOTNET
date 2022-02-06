
<?php include('add_editor.php');?>
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
        <link rel="stylesheet" type="text/css" href="../css/design.css">
		<link rel = "stylesheet" type = "text/css" href = "../css/customize.css"/>
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
  <div id = "add" class = "panel panel-primary">  
      <div class = "panel-heading">
        <label>ADD EDITOR</label>
        <button id = "hide" class = "btn btn-sm btn-warning" style = "float:right; margin-top:-5px;"><span class = "glyphicon glyphicon-remove"></span> CLOSE</button>
      </div>
      <div class = "panel-body">
        <form id = "form_admin" method = "POST" enctype = "multi-part/form-data" >
          <div class = "panel panel-default" style = "width:60%; margin:auto;">
          <div class = "panel-heading">
          </div>
          <div class = "panel-body">
            <div class = "form-group">
              <label for = "username">Username: </label>
              <input class = "form-control" name = "username" type = "text" required = "required">
            </div>
            <div class = "form-group">  
              <label for = "password">Password: </label>
              <input class = "form-control" name = "password" maxlength = "12" type = "password" required = "required">
            </div>
            <div class = "form-group">
              <label for = "firstname">Firstname: </label>
              <input class = "form-control" type = "text" name = "firstname" required = "required">
            </div>
           
            <div class = "form-group">
              <label for = "lastname">Lastname: </label>
              <input class = "form-control" type = "text" name = "lastname">
            </div>
              <button  class = "btn btn-warning" name = "save_editor" ><span class = "glyphicon glyphicon-check"></span> SAVE</button>
              <br />
          </div>
                
          </div>
        </form>
      </div>  
    </div> 

      <div class = "panel panel-primary">
      <div class = "panel-heading">
        <label>ACCOUNTS / ADMINISTRATOR</Label>
      </div>
      <div class = "panel-body">
        <button id = "show" class = "btn btn-info"><span class  = "glyphicon glyphicon-plus"></span> ADD</button>
        <br />
        <br />  
       <div class="table-responsive">  
        <table id = "table" class = "display" cellspacing = "0"  >
          <thead>
            <tr>
              <th>Username</th>
              <th>Password</th>
              <th>Name</th>
              <th><center>Action</center></th>
            </tr>
          </thead>
          <tbody>
          <?php
            $conn = new mysqli("localhost","root","","ckeditor") or die(mysqli_error());
            $query = $conn->query("SELECT * FROM `news_editor` ORDER BY `admin_id` ") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
          ?>
            <tr>
              <td><?php echo $fetch['username']?></td>
              <td><?php echo md5($fetch['password'])?></td>
              <td><?php echo $fetch['firstname']." ".$fetch['lastname']?></td>
              <td><center><a class = "btn btn-sm btn-warning" href = "edit_editor.php?id=<?php echo $fetch['admin_id']?>&lastname=<?php echo $fetch['lastname']?>"><i class = "glyphicon glyphicon-edit"></i> Update</a> <a onclick="confirmationDelete(this);return false;" href = "delete_editor.php?id=<?php echo $fetch['admin_id']?>" class = "btn btn-sm btn-danger"><i class = "glyphicon glyphicon-remove"></i> Delete</a></center></td>
            </tr>
          <?php
            }
            $conn->close();
          ?>
          </tbody>
        </table>
      </div>
      </div>
      </div>

		            
		</div>
	   </div>
    </div>

	
<?php require'script.php' ?>
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
</body>
</html>