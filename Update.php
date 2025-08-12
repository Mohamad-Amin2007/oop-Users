<?php
//include("header.php");
include("DBInfo.php");
$update1 = new Student;
if(!empty($_GET['username'])){
	$id = $_GET['username'];
	$_SESSION['id']=$_GET['username'];
	$row1 = $update1->selectValueU($id);
	//echo($row1['username']);
}
?>
<form action="Aupdate.php" method="post">
نام کاربری:<input type="text" name="unameu" <?php echo "value=".$row1['username']."" ?> ><br>
رمز عبور:<input type="text" name="passu" <?php echo "value=".$row1['password']."" ?>><br>
<input type="submit" value="تغییر اطلاعات">
</form>


