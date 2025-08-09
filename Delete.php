<?php
include("DBinfo.php");

if(isset($_GET['username']))
{
	$unameinfo = $_GET['username'];
	$delete1 = new Student;
	echo $delete1->deleteValue($unameinfo);
}

auth("index.php");


?>