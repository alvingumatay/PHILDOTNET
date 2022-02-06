<?php require_once("DB.php") ?>
<?php
          $conn = new mysqli("localhost","root","","ckeditor") or die(mysqli_error());
          $query = $conn->query("SELECT * FROM `ckeditor` WHERE `id` ") or die(mysqli_error());
          while($fetch = $query->fetch_array()){
          ?>  
            <h3>
            <a href="details.php?id=<?php echo $fetch['id'] ?>"><?php echo $fetch['title']; ?></a>
          </h3>
                 <?php  echo $fetch['editor']; ?>
                     <?php
            }
            $conn->close();
          ?>