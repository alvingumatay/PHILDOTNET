<?php	

	
if(ISSET($_POST['edit_editor'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$conn = new mysqli("localhost","root","","ckeditor") or die(mysqli_error());
			$conn->query("UPDATE `news_editor` SET `username` = '$username', `password` = '$password', `firstname` = '$firstname',  `lastname` = '$lastname' WHERE `admin_id` ") or die(mysqli_error());
			header("location: edit_editor.php");
		}