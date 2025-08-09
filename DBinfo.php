<?php
session_start();
class DBinfo{
	static public $sql;
    static function connect(){
       self::$sql=mysqli_connect("localhost","root","","testtoday");
	   if(self::$sql->connect_error){
		print "خطا در اتصال";
	   }
	   return self::$sql;
    }
}
class Student {
	private $username;
	private $password;
	public function setUname ($uname){
		return $this->username = $uname;
	}
	public function setPass ($pass){
		return $this->password = $pass;
	}
	public function insertValue (){
		$query="INSERT INTO `users` (`username`, `password`) VALUES ('$this->username', '$this->password')";
		$result = mysqli_query(DBinfo::connect(),$query);
		if($result == true)
		{
			return("انجام شد");
		}
		else
		{
			return("انجام نشد");
		}
	}
	public function deleteValue ($unamekey){
		$query_delete = "DELETE FROM `users` WHERE `username`='$unamekey'";
		$result_delete = mysqli_query(DBinfo::connect(),$query_delete);
		if($result_delete == true)
		{
			return("انجام شد");
		}
		else
		{
			return("انجام نشد");
		}
	}
	public function selectValue (){
		$query_selall = "SELECT * FROM `users`";
		$result_selall = mysqli_query(DBinfo::connect(),$query_selall);
		while($row = mysqli_fetch_array($result_selall)){
			echo("<a href='Delete.php?username=".$row['username']."'>حذف کاربر</a>");
			echo(" - ");
			echo("<a href='Update.php?username=".$row['username']."'>تغییراطلاعات کاربر</a>");
			echo(" ");
			echo($row['username']);
			echo(" ");
			echo($row['password']);
			echo("<br>");
		}
	}
	public function selectValueU($id){
		$query_selu = "SELECT * FROM `users` WHERE `username` = '$id'";
		$result_selu = mysqli_query(DBinfo::connect(),$query_selu);
		return mysqli_fetch_array($result_selu);
		
	}
	public function updateValue($unameu,$passu,$id){
		$query_update = "UPDATE `users` SET `username`='$unameu',`password`='$passu' WHERE `username`='$id'";
		$result_update = mysqli_query(DBinfo::connect(),$query_update);
		if($result_update == true){
			return("انجام شد");
		}
		else{
			return("انجام نشد");
		}
	}
}
function auth ($auth1){
	header("Location: http://localhost/testtoday/$auth1");
	exit();
}
/*$user1 = new Student;
$user1->setUname("mohamad");
$user1->setPass("1001");
echo $user1->insertValue();*/

/*$delete1 = new Student;
echo $delete1->deleteValue("reza");*/



?>
