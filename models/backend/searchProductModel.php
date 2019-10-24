<?php 
	trait searchModel{
		public function model_get($fromRecord,$recordPerPage){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			$conn = Connection::getInstance();			
			$query = $conn->prepare("select * from tbl_product where product_name like '%$key%'  order by product_id desc limit $fromRecord,$recordPerPage");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}
		public function model_total(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from tbl_product where product_name like '%$key%' order by product_id desc");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$numberRecord = $query->rowCount();
			return $numberRecord;
		}		
	}
	
 ?>