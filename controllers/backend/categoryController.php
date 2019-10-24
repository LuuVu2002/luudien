<?php 
	include "models/backend/categoryModel.php";
	class categoryController extends Controller{
		use categoryModel;
		public function __construct(){
			$this->authentication();
		}
		public function list_category(){
			$recordPerPage = 4;
			$total = $this->model_total();			
			$numPage = ceil($total/$recordPerPage);
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])? $_GET["p"]-1:0;
			$fromRecord = $p*$recordPerPage;			
			$data = $this->model_get($fromRecord,$recordPerPage);
			$this->renderHTML("views/backend/list_category.php",array("data"=>$data,"numPage"=>$numPage));
		}
		public function add(){
			$formAction="index.php?area=backend&controller=category&action=do_add";
			$this->renderHTML("views/backend/add_edit_category.php",array("formAction"=>$formAction));
		}
		public function do_add(){
			$this->model_do_add();
			header("location:index.php?area=backend&controller=category&action=list_category");
		}
		public function edit(){
			$id=isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;			
			$formAction="index.php?area=backend&controller=category&action=do_edit&category_id=$id";
			$record=$this->model_edit();
			$this->renderHTML("views/backend/add_edit_category.php",array("formAction"=>$formAction,"record"=>$record));
		}
		public function do_edit(){
			$id=isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;
			$this->model_do_edit();
			header("location:index.php?area=backend&controller=category&action=list_category");
		}
		public function delete(){
			$id=isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;
			$this->model_delete();
			header("location:index.php?area=backend&controller=category&action=list_category");
		}
	}
 ?>