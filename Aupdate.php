<?php
include("DBinfo.php");
$selectf = new Student;
if((isset($_POST['unameu'])&& !empty($_POST['unameu'])) &&
  (isset($_POST['passu'])&& !empty($_POST['passu']))){
	$uname = $_POST['unameu'];
	$pass = $_POST['passu'];
	print($selectf->updateValue($uname,$pass,$_SESSION['id']));
	auth("index.php");
}
?>