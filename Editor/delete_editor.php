<?php
	$conn = new mysqli("localhost","root","","ckeditor") or die(mysqli_error());
	$conn->query("DELETE FROM `news_editor` WHERE `admin_id` = '$_GET[id]'") or die(mysqli_error());
	header("location:account_setting.php");
