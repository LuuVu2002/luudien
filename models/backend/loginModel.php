<?php 
	trait loginModel{
		public function model_login(){
			$name=$_POST["user_name"];
			$pass=$_POST["password"];
			//$password=md5($password);
			$conn=Connection::getInstance();
			$query=$conn->prepare("select user_name from tbl_user where user_name=:name and password=:pass");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute(array("name"=>$name,"pass"=>$pass));
			$result=$query->fetch();
			return $result;
		}
	}
 ?>