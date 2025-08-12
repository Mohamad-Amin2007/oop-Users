<?php
//include("header.php");
?>
<table width="100%" height="100px" border="1px">
	<tr>
		<td>
			<?php
			if(!empty($_POST['uname'])&& !empty($_POST['pass'])){
			include("DBInfo.php");
			$uname = $_POST['uname'];
			$pass = $_POST['pass'];
			$user1 = new Student;
			$user1->setUname($uname);
			$user1->setPass($pass);
			echo $user1->insertValue();
			auth("index.php");
			}
			?>
		</td>
	</tr>
	<tr>
		<td>
			<form action="insert.php"method="post">
			Username<input type="text" name="uname">
			Password<input type="text" name="pass">
			<input type="submit" value="ایجاد">
			</form>
		</td>
	</tr>
	
</table>