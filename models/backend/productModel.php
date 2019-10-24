<?php 
	trait productModel{
		public function model_get($fromRecord,$recordPerPage){
			$conn = Connection::getInstance();			
			$query = $conn->prepare("select * from tbl_product order by product_id desc limit $fromRecord,$recordPerPage ");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}
		public function model_total(){
			$conn=Connection::getInstance();
			$query=$conn->prepare("select * from tbl_product order by product_id desc");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$numberRecord=$query->rowCount();
			return $numberRecord;
		}

		public function model_do_add(){
			$name = $_POST["product_name"];
			$category_id = $_POST["category_id"];
			$description = $_POST["product_description"];
			$content = $_POST["product_content"];
			$price = $_POST["saleprice"];
			$quantity = $_POST["product_quantity"];
			$hotproduct = isset($_POST["hotproduct"]) ? 1 : 0;
			$img = "";
			if($_FILES["product_img"]["name"] != ""){
				$img = time()."_".$_FILES["product_img"]["name"];
				move_uploaded_file($_FILES["product_img"]["tmp_name"], "assets/upload/news/$img");
			}
			$conn = Connection::getInstance();
			$result = $conn->prepare("insert into tbl_product set product_name=:name,category_id=:category_id,product_quantity=:quantity,product_content=:content,product_img=:img,saleprice=:price,product_description=:description,hotproduct=:hotproduct");
			$result->execute(array("name"=>$name,"category_id"=>$category_id,"quantity"=>$quantity,"content"=>$content,"img"=>$img,"price"=>$price,"description"=>$description, "hotproduct"=>$hotproduct));
		}
		public function model_edit(){
			$id = isset($_GET["product_id"]) && is_numeric($_GET["product_id"]) ? $_GET["product_id"]:0;
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from tbl_product where product_id=:id");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute(array("id"=>$id));
			$record = $query->fetch();
			return $record;
		}
		public function model_do_edit(){
			$id = isset($_GET["product_id"]) && is_numeric($_GET["product_id"]) ? $_GET["product_id"]:0;
			$name = $_POST["product_name"];
			$category_id = $_POST["category_id"];
			$description = $_POST["product_description"];
			$content = $_POST["product_content"];
			$price = $_POST["saleprice"];
			$quantity = $_POST["product_quantity"];
			$hotproduct = isset($_POST["hotproduct"]) ? 1 : 0;
			$conn = Connection::getInstance();
			$result = $conn->prepare("update tbl_product set product_name=:name,category_id=:category_id,product_quantity=:quantity,product_content=:content,saleprice=:price,product_description=:description, hotproduct=:hotproduct where product_id=:id");
			$result->execute(array("name"=>$name,"category_id"=>$category_id,"quantity"=>$quantity,"content"=>$content,"price"=>$price,"description"=>$description,"hotproduct"=>$hotproduct,"id"=>$id));

			if($_FILES["product_img"]["name"] != ""){
				$old_img = $conn->prepare("select product_img from tbl_product where product_id=:id");
				$old_img->setFetchMode(PDO::FETCH_OBJ);
				$old_img->execute(array("id"=>$id));
				$get_old_img = $old_img->fetch();
				if(isset($get_old_img->product_img)){
					unlink("assets/upload/news/".$get_old_img->product_img);
				}
				$img = time()."_".$_FILES["img"]["name"];
				move_uploaded_file($_FILES["product_img"]["tmp_name"], "assets/upload/news/$img");
				$result = $conn->prepare("update tbl_product set product_img=:img where product_id=:id");
				$result->execute(array("img"=>$img,"id"=>$id));
			}
		}
		public function model_delete(){
			$id=isset($_GET["product_id"])&&is_numeric($_GET["product_id"])?$_GET["product_id"]:0;
			$conn=Connection::getInstance();
			$query=$conn->prepare("delete from tbl_product where product_id=:id");
			$query->execute(array("id"=>$id));
		}
		public function model_getsearch($fromRecord,$recordPerPage){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			$conn = Connection::getInstance();			
			$query = $conn->prepare("select * from tbl_product where product_name like '%$key%'  order by product_id desc limit $fromRecord,$recordPerPage");
			$query->setFetchMode(PDO::FETCH_OBJ);
			$query->execute();
			$result = $query->fetchAll();
			return $result;
		}
		public function model_totalsearch(){
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