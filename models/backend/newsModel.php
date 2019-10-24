<?php 
	trait newsModel{
		public function model_get($fromRecord,$recordPerPage){
			$conn = Connection::getInstance();			
			$query = $conn->prepare("select * from tbl_news order by news_id desc limit $fromRecord,$recordPerPage ");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}
		public function model_total(){
			$conn=Connection::getInstance();
			$query=$conn->prepare("select * from tbl_news order by news_id desc");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$numberRecord=$query->rowCount();
			return $numberRecord;
		}

		public function model_do_add(){
			$name = $_POST["news_name"];
			$description = $_POST["news_description"];
			$content = $_POST["news_content"];
			$hotnews = isset($_POST["hotnews"]) ? 1 : 0;
			$img = "";
			if($_FILES["news_img"]["name"] != ""){
				$img = time()."_".$_FILES["news_img"]["name"];
				move_uploaded_file($_FILES["news_img"]["tmp_name"], "assets/upload/news/$img");
			}
			$conn = Connection::getInstance();
			$result = $conn->prepare("insert into tbl_news set news_name=:name,news_content=:content,news_img=:img,news_description=:description,hotnews=:hotnews");
			$result->execute(array("name"=>$name,"content"=>$content,"img"=>$img,"description"=>$description, "hotnews"=>$hotnews));
		}
		public function model_edit(){
			$id = isset($_GET["news_id"]) && is_numeric($_GET["news_id"]) ? $_GET["news_id"]:0;
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from tbl_news where news_id=:id");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute(array("id"=>$id));
			$record = $query->fetch();
			return $record;
		}
		public function model_do_edit(){
			$id = isset($_GET["news_id"]) && is_numeric($_GET["news_id"]) ? $_GET["news_id"]:0;
			$name = $_POST["news_name"];
			$description = $_POST["news_description"];
			$content = $_POST["news_content"];
			$hotnews = isset($_POST["hotnews"]) ? 1 : 0;
			$conn = Connection::getInstance();
			$result = $conn->prepare("update tbl_news set news_name=:name,news_content=:content,news_description=:description, hotnews=:hotnews where news_id=:id");
			$result->execute(array("name"=>$name,"content"=>$content,"description"=>$description,"hotnews"=>$hotnews,"id"=>$id));

			if($_FILES["news_img"]["name"] != ""){
				$old_img = $conn->prepare("select news_img from tbl_news where news_id=:id");
				$old_img->setFetchMode(PDO::FETCH_OBJ);
				$old_img->execute(array("id"=>$id));
				$get_old_img = $old_img->fetch();
				if(isset($get_old_img->news_img)){
					unlink("assets/upload/news/".$get_old_img->news_img);
				}
				$img = time()."_".$_FILES["img"]["name"];
				move_uploaded_file($_FILES["news_img"]["tmp_name"], "assets/upload/news/$img");
				$result = $conn->prepare("update tbl_news set news_img=:img where news_id=:id");
				$result->execute(array("img"=>$img,"id"=>$id));
			}
		}
		public function model_delete(){
			$id=isset($_GET["news_id"])&&is_numeric($_GET["news_id"])?$_GET["news_id"]:0;
			$conn=Connection::getInstance();
			$query=$conn->prepare("delete from tbl_news where news_id=:id");
			$query->execute(array("id"=>$id));
		}
	}
 ?>