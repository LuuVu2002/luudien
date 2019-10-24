<?php 
	include "models/backend/productModel.php";
	class productController extends Controller{
		use productModel;
		public function __construct(){
			$this->authentication();
		}
		public function list_product(){
			$recordPerPage = 8;
			$total = $this->model_total();			
			$numPage = ceil($total/$recordPerPage);
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])? $_GET["p"]-1:0;
			$fromRecord = $p*$recordPerPage;			
			$data = $this->model_get($fromRecord,$recordPerPage);
			$this->renderHTML("views/backend/list_product.php",array("data"=>$data,"numPage"=>$numPage));
		}
		public function add(){
			$formAction = "index.php?area=backend&controller=product&action=do_add";
			$this->renderHTML("views/backend/add_edit_product.php",array("formAction"=>$formAction));
		}
		public function do_add(){
			$this->model_do_add();
			header("location:index.php?area=backend&controller=product&action=list_product");
		}
		public function edit(){
			$id=isset($_GET["product_id"])&&is_numeric($_GET["product_id"])?$_GET["product_id"]:0;			
			$formAction="index.php?area=backend&controller=product&action=do_edit&product_id=$id";
			$record=$this->model_edit();
			$this->renderHTML("views/backend/add_edit_product.php",array("formAction"=>$formAction,"record"=>$record));
		}
		public function do_edit(){
			$id=isset($_GET["product_id"])&&is_numeric($_GET["product_id"])?$_GET["product_id"]:0;
			$this->model_do_edit();

			header("location:index.php?area=backend&controller=product&action=list_product");
		}
		public function delete(){
			$id=isset($_GET["product_id"])&&is_numeric($_GET["product_id"])?$_GET["product_id"]:0;
			$this->model_delete();
			header("location:index.php?area=backend&controller=product&action=list_product");
		}
		public function search(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			$recordPerPage = 8;
			$total = $this->model_totalsearch();			
			$numPage = ceil($total/$recordPerPage);
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])? $_GET["p"]-1:0;
			$fromRecord = $p*$recordPerPage;			
			$data = $this->model_getsearch($fromRecord,$recordPerPage);
			$this->renderHTML("views/backend/list_product.php", array("data"=>$data,"numPage"=>$numPage,"key"=>$key));
		}
	}
 ?>