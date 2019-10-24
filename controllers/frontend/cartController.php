<?php 
	include "models/frontend/cartModel.php";
	class cartController extends Controller{
		use cartModel;
		public function __construct(){
			if(!isset($_SESSION["cart"]))
				$_SESSION["cart"] = array();
		}
		public function add(){
			$id = isset($_GET["product_id"]) && is_numeric($_GET["product_id"]) ? $_GET["product_id"]:0;
			$sl = isset($_GET["sl"]) && is_numeric($_GET["sl"]) ? $_GET["sl"]:1;
			$this->cart_add($id,$sl);
			header("location:index.php?controller=cart");
		}
		public function index(){
			$this->renderHTML("views/frontend/cartView.php");
		}
		public function delete(){
			$id = isset($_GET["product_id"]) && is_numeric($_GET["product_id"]) ? $_GET["product_id"]:0;
			$this->cart_delete($id);
			header("location:index.php?controller=cart");
		}
		public function destroy(){
			$this->cart_destroy();
			header("location:index.php?controller=cart");
		}
		public function update(){
			foreach($_SESSION["cart"] as $product){
				$quantity = "product_".$product["id"];
				$number = $_POST[$quantity];
				$this->cart_update($product["id"], $number);
			}
			header("location:index.php?controller=cart");
		}

	}
 ?>