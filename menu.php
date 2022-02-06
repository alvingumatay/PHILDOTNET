<?php
$dbhost = "localhost";
$dbname = "ckeditor";
$dbchar = "utf8";
$dbuser = "";
$dbpass = "";

try{
	$pdo = new PDO(
		"mysql:host=$dbhost;dbname=$dbname;charset=$dbchar", $dbuser, $dbpass,[PDO::ATTR_ERRMODE => PDO::ERR_MODE_EXCEPTION,
		    PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC]);
}
catch (Exception $ex) { exit($ex->getMessage());


$stmt = $pdo->prepare("SELECT * from `ckeditor`");
$stmt->execute();
$items = $stmt->fetchAll();
}
?>