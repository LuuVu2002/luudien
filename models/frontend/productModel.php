<?php 
	trait productModel{
		public $category_id = 0;
		public function model_get($fromRecord,$recordPerPage){
			$conn = Connection::getInstance();			
			$query = $conn->prepare("select * from tbl_product order by product_id desc limit $fromRecord,$recordPerPage");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}
		public function model_total(){
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from tbl_product order by product_id desc");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$numberRecord = $query->rowCount();
			return $numberRecord;
		}
		public function model_totalcate(){
			$id = isset($_GET["category_id"]) && is_numeric($_GET["category_id"]) ? $_GET["category_id"]:0;
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from tbl_product where category_id=:id order by product_id desc");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute(array("id"=>$id));
			$numberRecord = $query->rowCount();
			return $numberRecord;
		}
		public function getCategoryName(){
			$id = isset($_GET["category_id"]) && is_numeric($_GET["category_id"]) ? $_GET["category_id"]:0;
			$conn = Connection::getInstance();
			$query = $conn->prepare("select category_name from tbl_category where category_id=:id");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute(array("id"=>$id));
			$record = $query->fetch();
			return $record;
		}
		public function model_getCategory($fromRecord,$recordPerPage){
			$id = isset($_GET["category_id"]) && is_numeric($_GET["category_id"]) ? $_GET["category_id"]:0;
			$conn = Connection::getInstance();			
			$query = $conn->prepare("select * from tbl_product where category_id=:id order by product_id desc limit $fromRecord,$recordPerPage");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute(array("id"=>$id));
			$result = $query->fetchAll();
			return $result;
		}
		public function model_detail(){
			$id = isset($_GET["product_id"]) && is_numeric($_GET["product_id"]) ? $_GET["product_id"]:0;
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from tbl_product where product_id=?");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute(array($id));
			$result = $query->fetch();
			$this->category_id = $result->category_id;
			return $result;
		}
		public function model_splq(){
			
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from tbl_product where category_id=? limit 0,4 ");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute(array($this->category_id));
			$result = $query->fetchAll(); 
			return $result;
		}
	}
 ?>