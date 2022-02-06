<?php

$mysqli = mysqli_connect("localhost","root","","ckeditor");
if (!$mysqli){
	die("Connection error: " . mysqli_connect_error());
}

?>