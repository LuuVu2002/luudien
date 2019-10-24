<?php 
	trait mainModel{
		public function newproduct(){
			$conn=Connection::getInstance();
			$query=$conn->prepare("select * from tbl_product order by product_id desc limit 0,8");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result=$query->fetchAll();
			return $result;
		}
	}
 ?>

