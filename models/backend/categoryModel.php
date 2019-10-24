<?php 
	trait categoryModel{
		public function model_get($fromRecord,$recordPerPage){
			$conn = Connection::getInstance();			
			$query = $conn->prepare("select * from tbl_category order by category_id desc limit $fromRecord,$recordPerPage ");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}
		public function model_total(){
			$conn=Connection::getInstance();
			$query=$conn->prepare("select * from tbl_category order by category_id desc");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$numberRecord=$query->rowCount();
			return $numberRecord;
		}
		public function model_do_add(){			
			$name=$_POST["category_name"];
			$conn=Connection::getInstance();
			$query=$conn->prepare("insert into tbl_category set category_name=:name");
			$query->execute(array("name"=>$name));		
		}
		public function model_edit(){
			$id=isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;
			$conn=Connection::getInstance();
			$query=$conn->prepare("select * from tbl_category where category_id=:id");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute(array("id"=>$id));
			$record=$query->fetch();
			return $record;
		}
		public function model_do_edit(){
			$id=isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;
			$name=$_POST["category_name"];
			$conn=Connection::getInstance();
			$query=$conn->prepare("update tbl_category set category_name=:name where category_id=:id");
			$query->execute(array("name"=>$name,"id"=>$id));
			
		}
		public function model_delete(){
			$id=isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;
			$conn=Connection::getInstance();
			$query=$conn->prepare("delete from tbl_category where category_id=:id");
			$query->execute(array("id"=>$id));
		}
	}
 ?>