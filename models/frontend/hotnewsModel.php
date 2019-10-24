<?php 
	trait hotnewsModel{
		public function hotnews(){
			$conn=Connection::getInstance();
			$query=$conn->prepare("select * from tbl_news where hotnews=1 order by news_id desc limit 0,4");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result=$query->fetchAll();
			return $result;
		}
	}
 ?>