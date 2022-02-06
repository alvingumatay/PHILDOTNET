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
			  
			<div class="col-md-16 col-md-offset-2 post-div mx-auto">  
			 	<?php 
              include('./includes/db.php');
              if(isset($_GET['page'])){
              	$page = $_GET['page'];
              }
              else{
              	 $page = "1";
              }
              $num_per_page = 01;
              $start_form = ($page-1)*01;
              $result=$mysqli->query("select * from ckeditor limit $start_form,$num_per_page");
              while($row=$result->fetch_assoc()){

			?>
			<div class="post">
           
				    <h3>
						<a href="details.php?id=<?php echo $row['id']; ?>"><?php echo $row['title'];?></a>
					</h3>
					       <?php  echo $row['editor'];?>

                          <p>
                          	<a type="button" class="btn btn-primary"  target="_blank" href="details.php?id=<?php echo $row['id'];?>">Read More</a>
                          </p>     


                                                      
				</div>
				<?php } ?>
				
		  </center>
&nbsp;&nbsp;&nbsp;&nbsp;
              <center>
    <?php
          $pr_query = "select * from ckeditor";
          $pr_result = mysqli_query($mysqli, $pr_query);
          $total_record = mysqli_num_rows($pr_result);
          $total_page = ceil($total_record/$num_per_page);
          if($page>1)
          {
            echo "<a href='index.php?page=".($page-1)."' class='btn btn-primary'>Previous</a>";
          }
          for($i=1;$i<$total_page;$i++){
           echo "<a href='index.php?page=".$i."' class='btn btn-primary'>$i</a>";
          }
           if($i>$page)
          {
            echo "<a href='index.php?page=".($page+1)."' class='btn btn-primary'>Next</a>";
          }
      ?>
		     	</div>
		         </div> 
	
            	</div>                   
<?php include"./includes/footer.php"?>		
</body>
<script type="text/javascript" src="js/script.js"></script>
<script src="js3/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="js3/bootstrap.min.js"></script>
<!-- CKEditor -->
<script type="text/javascript">
  tinymce.init({
  selector: 'textarea',  // change this value according to your HTML
  plugins: 'pagebreak',
  menubar: 'insert',
  toolbar: 'pagebreak',
  pagebreak_split_block: true;
});
</script>
</html>
