<?php 
	trait checkoutModel{
		public function model_bill(){
			$fullname=$_POST["fullname"];
			$email=$_POST["email"];
			$address=$_POST["address"];
			$phone=$_POST["phone"];
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into tbl_customer set fullname=:fullname, email=:email, address=:address,phone=:phone");
			$query->execute(array("fullname"=>$fullname,"email"=>$email,"address"=>$address,"phone"=>$phone));
			$customer_id = $conn->lastInsertId();
			$query = $conn->prepare("insert into tbl_order set customer_id=:customer_id, create_at=now()");
			$query->execute(array("customer_id"=>$customer_id));
			$order_id = $conn->lastInsertId();
			foreach($_SESSION["cart"] as $product){
				$query = $conn->prepare("insert into tbl_order_detail set order_id=:order_id, product_id=:product_id, saleprice=:price, number=:number");
				$query->execute(array("order_id"=>$order_id,"product_id"=>$product["id"],"price"=>$product["price"],"number"=>$product["number"]));
			}
			unset($_SESSION["cart"]);
		}
	}
 ?>