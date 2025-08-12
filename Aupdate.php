<?php
//include("header.php");
include("DBInfo.php");
$selectf = new Student;

// sanitization (w3schools)
$isAllOk = trim($_POST["unameu"]) && strip($_POST["passu"]);

if ($isAllOk) {
	$uname = $_POST['unameu'];
	$pass = $_POST['passu'];
	print($selectf->updateValue($uname,$pass,$_SESSION['id']));
	auth("index.php");
}
?>