<!DOCTYPE html>
<html>
<head>
	<title></title>

    <link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.min.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css2/jquery.dataTables.css" />
   
		<link href="../font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet"> 
		<link rel = "stylesheet" type = "text/css" href = "../css/customize.css"/>
    
</head>
<body>
<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
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
</html>