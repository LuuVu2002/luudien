<?php 
	include "models/backend/newsModel.php";
	class newsController extends Controller{
		use newsModel;
		public function __construct(){
			$this->authentication();
		}
		public function list_news(){
			$recordPerPage = 8;
			$total = $this->model_total();			
			$numPage = ceil($total/$recordPerPage);
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])? $_GET["p"]-1:0;
			$fromRecord = $p*$recordPerPage;			
			$data = $this->model_get($fromRecord,$recordPerPage);
			$this->renderHTML("views/backend/list_news.php",array("data"=>$data,"numPage"=>$numPage));
		}
		public function add(){
			$formAction = "index.php?area=backend&controller=news&action=do_add";
			$this->renderHTML("views/backend/add_edit_news.php",array("formAction"=>$formAction));
		}
		public function do_add(){
			$this->model_do_add();
			header("location:index.php?area=backend&controller=news&action=list_news");
		}
		public function edit(){
			$id=isset($_GET["news_id"])&&is_numeric($_GET["news_id"])?$_GET["news_id"]:0;			
			$formAction="index.php?area=backend&controller=news&action=do_edit&news_id=$id";
			$record=$this->model_edit();
			$this->renderHTML("views/backend/add_edit_news.php",array("formAction"=>$formAction,"record"=>$record));
		}
		public function do_edit(){
			$id=isset($_GET["news_id"])&&is_numeric($_GET["news_id"])?$_GET["news_id"]:0;
			$this->model_do_edit();
			header("location:index.php?area=backend&controller=news&action=list_news");
		}
		public function delete(){
			$id=isset($_GET["news_id"])&&is_numeric($_GET["news_id"])?$_GET["news_id"]:0;
			$this->model_delete();
			header("location:index.php?area=backend&controller=news&action=list_news");
		}
	}
 ?>