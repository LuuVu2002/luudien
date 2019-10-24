<?php 
	trait hotProductModel{
		public function hotproduct(){
			$conn=Connection::getInstance();
			$query=$conn->prepare("select * from tbl_product where hotproduct=1 order by product_id desc limit 0,3");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result=$query->fetchAll();
			return $result;
		}
	}
 ?>