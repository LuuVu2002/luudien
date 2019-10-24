<?php 
	trait customerModel{
		public function model_get($fromRecord,$recordPerPage){
			$conn = Connection::getInstance();			
			$query = $conn->prepare("select * from tbl_customer order by customer_id desc limit $fromRecord,$recordPerPage ");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}
		public function model_total(){
			$conn=Connection::getInstance();
			$query=$conn->prepare("select * from tbl_customer order by customer_id desc");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$numberRecord=$query->rowCount();
			return $numberRecord;
		}
	}
?>