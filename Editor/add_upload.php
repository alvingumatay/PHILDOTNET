<?php
	if(ISSET($_POST['submit'])){
	    $title = $_POST['title'];
		$editor = $_POST['editor'];
		$conn = new mysqli("localhost","root","","ckeditor") or die(mysqli_error());
	    $conn->query("INSERT INTO `ckeditor` VALUES(Null,'$title','$editor')") or die(mysqli_error());
			
			 echo "<script>alert('successfully inserted!')</script>";
			 
		}

	 if(ISSET($_POST['submit1'])){
	    $title = $_POST['title'];
		$nation = $_POST['nation'];
		$conn = new mysqli("localhost","root","","ckeditor") or die(mysqli_error());
	    $conn->query("INSERT INTO `pambansa` VALUES(Null,'$title','$nation')") or die(mysqli_error());
			echo "<script>alert('successfully inserted!')</script>";
			
		}	

		if(ISSET($_POST['submit2'])){
	    $title = $_POST['title'];
		$word = $_POST['word'];
		$conn = new mysqli("localhost","root","","ckeditor") or die(mysqli_error());
	    $conn->query("INSERT INTO `pandaigdig` VALUES(Null,'$title','$word')") or die(mysqli_error());
			echo "<script>alert('successfully inserted!')</script>";
			
		}	
	   
	    if(ISSET($_POST['submit3'])){
	    $title = $_POST['title'];
		$business = $_POST['business'];
		$conn = new mysqli("localhost","root","","ckeditor") or die(mysqli_error());
	    $conn->query("INSERT INTO `pangkalakaran` VALUES(Null,'$title','$business')") or die(mysqli_error());
			echo "<script>alert('successfully inserted!')</script>";
			
		}	
	   
	    if(ISSET($_POST['submit4'])){
	    $title = $_POST['title'];
		$sports = $_POST['sports'];
		$conn = new mysqli("localhost","root","","ckeditor") or die(mysqli_error());
	    $conn->query("INSERT INTO `pampalakasan` VALUES(Null,'$title','sports')") or die(mysqli_error());
			echo "<script>alert('successfully inserted!')</script>";
			
		}

		if(ISSET($_POST['submit5'])){
	    $title = $_POST['title'];
		$showbiz = $_POST['showbiz'];
		$conn = new mysqli("localhost","root","","ckeditor") or die(mysqli_error());
	    $conn->query("INSERT INTO `showbiz` VALUES(Null,'$title','showbiz')") or die(mysqli_error());
			echo "<script>alert('successfully inserted!')</script>";
			
		}	
	   
	    if(ISSET($_POST['submit6'])){
	    $title = $_POST['title'];
		$lifestyle = $_POST['lifestyle'];
		$conn = new mysqli("localhost","root","","ckeditor") or die(mysqli_error());
	    $conn->query("INSERT INTO `pangkalusugan` VALUES(Null,'$title','lifestyle')") or die(mysqli_error());
			echo "<script>alert('successfully inserted!')</script>";
			
		}	
		if(ISSET($_POST['submit7'])){
	    $title = $_POST['title'];
		$etc = $_POST['etc'];
		$conn = new mysqli("localhost","root","","ckeditor") or die(mysqli_error());
	    $conn->query("INSERT INTO `atibapa` VALUES(Null,'$title','etc')") or die(mysqli_error());
			echo "<script>alert('successfully inserted!')</script>";
			
		}	
	
	


	


	