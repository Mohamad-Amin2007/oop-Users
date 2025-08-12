<?php
//include("header.php");
include("DBInfo.php");
$selectf = new Student;

// sanitization (w3schools)
$isAllOk = isset($_POST["unameu"]) && !empty($_POST["unameu"]) && isset($_POST["passu"]) && !empty($_POST["passu"]);

if ($isAllOk==true) {
	$uname = $_POST['unameu'];
	$pass = $_POST['passu'];
	print($selectf->updateValue($uname,$pass,$_SESSION['id']));
	auth("index.php");
}
?>