<?php 
include "models/frontend/productModel.php";
	class productController extends Controller{
		use productModel;
	public function index(){
			$id = isset($_GET["product_id"]) && is_numeric($_GET["product_id"]) ? $_GET["product_id"]:0;
			$recordPerPage = 15;
			$total = $this->model_total();			
			$numPage = ceil($total/$recordPerPage);
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])? $_GET["p"]-1:0;
			$fromRecord = $p*$recordPerPage;			
			$data = $this->model_get($fromRecord,$recordPerPage);
			$this->renderHTML("views/frontend/mainProductView.php", array("data"=>$data,"numPage"=>$numPage,"product_id"=>$id));
		}

		public function category(){
			$id = isset($_GET["category_id"]) && is_numeric($_GET["category_id"]) ? $_GET["category_id"]:0;
			$recordPerPage = 15;
			$total = $this->model_totalcate();			
			$numPage = ceil($total/$recordPerPage);
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])? $_GET["p"]-1:0;
			$fromRecord = $p*$recordPerPage;			
			$data = $this->model_getCategory($fromRecord,$recordPerPage);
			$this->renderHTML("views/frontend/productCategoryView.php", array("data"=>$data,"numPage"=>$numPage,"id"=>$id));
		}		
		public function detail(){
			$record = $this->model_detail();
			$splq=$this->model_splq();
			$this->renderHTML("views/frontend/productDetailView.php",array("record"=>$record,"splq"=>$splq));
			
		}
	}
 ?> 