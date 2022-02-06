<style type="text/css">
.sidebar ul li a{
	list-style: none;
}	
</style>
<input type="checkbox" id="check">
   <label for="check">
   	<i class="fa fa-bars" id="btn"></i>
    <i class="fa fa-times" id="cancel"></i>
   </label>	
   <?php
       $conn = new mysqli("localhost","root","","ckeditor") or die(mysqli_error());
     $ckeditors = $conn->query("SELECT * FROM `ckeditor` WHERE `id`") or die(mysqli_error());
      
    ?>
    <div class="sidebar">
  
  <header><a href="index.php" style="color: white">Top News</a></header>
   	<ul>

  <?php foreach ($ckeditors as $ckeditor) {?>
   		<li style="list-style:none;"><a href="details.php?id=<?php echo $ckeditor['id'];?>">
       
      
        <?php echo $ckeditor['title'];?>
     
      </a></li>
   		 <?php }?>
   	</ul>
     
   </div>


