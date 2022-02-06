  <?php require_once 'logincheck.php'; ?>
  <?php include('add_upload.php');?>
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
    <link rel="stylesheet" type="text/css" href="../css/design.css">
    <link rel="stylesheet" href="../css2/css1/bootstrap.css">
    <link rel="stylesheet" href="../css2/css1/bootstrap.min.css">
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

  <div class="col-md-10">
    <center>
    <div class="card">
    <div class="card-body">
        <h1 class="card-title">TITLE CONTENTS</h1>
        <p class="card-text"><h3>With supporting text below as a natural lead-in to additional content.</h3></p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><h3><i class="fa fa-edit"> OPEN  EDIT</i> </h3></button>
      </div>
   
    </div>
  </center>
  </div>


</div>



<!-- IBA BALITA -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">CONTENT TITLE</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
    
      <form method="post" action="edit_section.php"  enctype="multipart/form-data">
       <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" >
        </div>
    <textarea name="editor" class="tinymce" id="editor" cols="30" rows="10"></textarea>
    <br>      
    <div class="modal-footer">
        <input type="submit" class="btn btn-default" name="submit" value="SUBMIT" />
          
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
     </form>
        </div>
      </div>  
    </div>
  </div>
<!-- end -->

<!-- IBA BALITA -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">BALITANG PAMBANSA </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
         


 <form method="post" action="edit_section.php"  enctype="multipart/form-data">
  <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" >
        </div>
    <textarea name="nation" id="nation" cols="30" rows="10"></textarea>
    <br>      
    <div class="modal-footer">
        <input type="submit" class="btn btn-default" name="submit1" value="SUBMIT" />
          
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
     </form>
        </div>

      </div>
      
    </div>
  </div>
<!-- end -->



<!-- IBA BALITA -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">BALITANG PANDAIGDIG </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
      <form method="post" action="edit_section.php"  enctype="multipart/form-data">
      <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" >
      </div>
    <textarea name="word" id="word" cols="30" rows="10"></textarea>
    <br>      
    <div class="modal-footer">
        <input type="submit" class="btn btn-default" name="submit2" value="SUBMIT" />
          
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
     </form>
        </div>

      </div>
      
    </div>
  </div>
<!-- end -->

<!-- IBA BALITA -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">BALITANG PANGKALAKARAN </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
      <form method="post" action="edit_section.php"  enctype="multipart/form-data">
      <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" >
      </div>
    <textarea name="business" id="business" cols="30" rows="10"></textarea>
    <br>      
    <div class="modal-footer">
        <input type="submit" class="btn btn-default" name="submit3" value="SUBMIT" />
          
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
     </form>
        </div>

      </div>
      
    </div>
  </div>
<!-- end -->

<!-- IBA BALITA -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">BALITANG PAMPALAKASAN </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
      <form method="post" action="edit_section.php"  enctype="multipart/form-data">
      <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" >
      </div>
    <textarea name="sports" id="sports" cols="30" rows="10"></textarea>
    <br>      
    <div class="modal-footer">
        <input type="submit" class="btn btn-default" name="submit4" value="SUBMIT" />
          
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
     </form>
        </div>

      </div>
      
    </div>
  </div>
<!-- end -->


<!-- IBA BALITA -->
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">BALITANG SHOWBIZ </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
      <form method="post" action="edit_section.php"  enctype="multipart/form-data">
      <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" >
      </div>
    <textarea name="showbiz" id="showbiz" cols="30" rows="10"></textarea>
    <br>      
    <div class="modal-footer">
        <input type="submit" class="btn btn-default" name="submit5" value="SUBMIT" />
          
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
     </form>
        </div>

      </div>
      
    </div>
  </div>
<!-- end -->


<!-- IBA BALITA -->
  <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">BALITANG PANGKALUSUGAN </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
      <form method="post" action="edit_section.php"  enctype="multipart/form-data">
      <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" >
      </div>
    <textarea name="sports" id="sports" cols="30" rows="10"></textarea>
    <br>      
    <div class="modal-footer">
        <input type="submit" class="btn btn-default" name="submit6" value="SUBMIT" />
          
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
     </form>
        </div>

      </div>
      
    </div>
  </div>
<!-- end -->


<!-- IBA BALITA -->
  <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">AT IBA PA </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
      <form method="post" action="edit_section.php"  enctype="multipart/form-data">
      <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" >
      </div>
    <textarea name="etc" id="etc" cols="30" rows="10"></textarea>
    <br>      
    <div class="modal-footer">
        <input type="submit" class="btn btn-default" name="submit7" value="SUBMIT" />
          
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
     </form>
        </div>

      </div>
      
    </div>
  </div>
<!-- end -->


</div>
</div>
</div>
</body>
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
<!-- Loading Scripts -->
<script src="../js2/js1/main.js"></script>
<?php require'script.php' ?>
<!-- Loading Scripts -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="tinymce/tinymce.min.js"></script>
<script src="../js/tinymce_editor.js"></script>
<script type="text/javascript" src="../js/jquery.min2.js"></script>


</html>