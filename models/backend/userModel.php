<?php 
	trait userModel{
		public function model_get($fromRecord,$recordPerPage){
			$conn = Connection::getInstance();			
			$query = $conn->prepare("select * from tbl_user order by user_id desc limit $fromRecord,$recordPerPage ");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}
		public function model_total(){
			$conn=Connection::getInstance();
			$query=$conn->prepare("select * from tbl_user order by user_id desc");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$numberRecord=$query->rowCount();
			return $numberRecord;
		}
		public function model_do_add(){
			$fullname=$_POST["fullname"];
			$name=$_POST["user_name"];
			$pass=$_POST["password"];
			$conn=Connection::getInstance();
			$query=$conn->prepare("insert into tbl_user set fullname=:fullname, user_name=:name, password=:pass");
			$query->execute(array("fullname"=>$fullname, "name"=>$name,"pass"=>$pass));		
		}
		public function model_edit(){
			$id=isset($_GET["user_id"])&&is_numeric($_GET["user_id"])?$_GET["user_id"]:0;
			$conn=Connection::getInstance();
			$query=$conn->prepare("select * from tbl_user where user_id=:id");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute(array("id"=>$id));
			$record=$query->fetch();
			return $record;
		}
		public function model_do_edit(){
			$id=isset($_GET["user_id"])&&is_numeric($_GET["user_id"])?$_GET["user_id"]:0;
			$fullname=$_POST["fullname"];
			$name=$_POST["user_name"];
			$pass=$_POST["password"];
			$conn=Connection::getInstance();
			$query=$conn->prepare("update tbl_user set fullname=:fullname where user_id=:id");
			$query->execute(array("fullname"=>$fullname,"id"=>$id));
			if($pass!=""){
				$pass=md5($pass);
				$query=$conn->prepare("update tbl_user set password=:pass where user_id=:id");
			$query->execute(array("pass"=>$pass,"id"=>$id));
			}
		}
		public function model_delete(){
			$id=isset($_GET["user_id"])&&is_numeric($_GET["user_id"])?$_GET["user_id"]:0;
			$conn=Connection::getInstance();
			$query=$conn->prepare("delete from tbl_user where user_id=:id");
			$query->execute(array("id"=>$id));
		}
	}
 ?>