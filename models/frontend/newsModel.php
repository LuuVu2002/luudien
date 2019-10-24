<?php 
	trait newsModel{
		public function news(){
			$conn=Connection::getInstance();
			$query=$conn->prepare("select * from tbl_news order by news_id desc limit 0,4");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result=$query->fetchAll();
			return $result;
		}
	}
 ?>