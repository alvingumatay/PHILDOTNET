<?php

$db = mysqli_connect("localhost","root","","ckeditor");  // database connection

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>