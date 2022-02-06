<?php
		if(ISSET($_POST['save_editor'])){
		$username = $_POST['username']; 
		$password = $_POST['password']; 
		$firstname = $_POST['firstname']; 
		$lastname = $_POST['lastname']; 
		$conn = new mysqli("localhost","root","","ckeditor");
		$q1 = $conn->query("SELECT * FROM `news_editor` WHERE `username` = '$username'") or die(mysqli_error());
		$f1 = $q1->fetch_array();
		$c1 = $q1->num_rows;
			if($c1 > 0){
				echo "<script>alert('Username already taken')</script>";
			}else{
				$conn->query("INSERT INTO `news_editor` VALUES(NULL, '$username', '$password', '$firstname',  '$lastname')") or die(mysqli_error());
				header("location:account_setting.php");
			}				
		}
		
