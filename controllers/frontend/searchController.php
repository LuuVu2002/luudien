<?php 
	include "models/frontend/searchModel.php";
	class searchController extends Controller{
		use searchModel;		
		public function index(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			$recordPerPage = 8;
			$total = $this->model_total();			
			$numPage = ceil($total/$recordPerPage);
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])? $_GET["p"]-1:0;
			$fromRecord = $p*$recordPerPage;			
			$data = $this->model_get($fromRecord,$recordPerPage);
			$this->renderHTML("views/frontend/searchView.php", array("data"=>$data,"numPage"=>$numPage,"key"=>$key));
		}
	}
 ?>