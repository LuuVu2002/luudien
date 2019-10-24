<?php 
	trait orderModel{
		public function model_get($fromRecord,$recordPerPage){
			$conn = Connection::getInstance();			
			$query = $conn->prepare("select * from tbl_order order by order_id desc limit $fromRecord,$recordPerPage ");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}
		public function model_total(){
			$conn=Connection::getInstance();
			$query=$conn->prepare("select * from tbl_order order by order_id desc");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$numberRecord=$query->rowCount();
			return $numberRecord;
		}
		public function model_getdetail($fromRecord,$recordPerPage){
			$id=isset($_GET["order_id"])&&is_numeric($_GET["order_id"])?$_GET["order_id"]:0;
			$conn = Connection::getInstance();			
			$query = $conn->prepare("select * from tbl_order_detail where order_id=:id order by order_id desc limit $fromRecord,$recordPerPage ");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute(array("id"=>$id));
			$result = $query->fetchAll();
			return $result;
		}
		public function model_detail(){
			$id=isset($_GET["order_id"])&&is_numeric($_GET["order_id"])?$_GET["order_id"]:0;
			$conn=Connection::getInstance();
			$query=$conn->prepare("select * from tbl_order_detail where order_id=:id");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute(array("id"=>$id));
			$record=$query->rowCount();
			return $record;
			
		}
		
	}
?>