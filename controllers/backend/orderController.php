<?php 
	include "models/backend/orderModel.php";
	class orderController extends Controller{
		use orderModel;
		public function __construct(){
			$this->authentication();
		}
		public function list_order(){
			$recordPerPage = 10;
			$total = $this->model_total();			
			$numPage = ceil($total/$recordPerPage);
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])? $_GET["p"]-1:0;
			$fromRecord = $p*$recordPerPage;			
			$data = $this->model_get($fromRecord,$recordPerPage);
			$this->renderHTML("views/backend/list_order.php",array("data"=>$data,"numPage"=>$numPage));
		}
		public function detail(){
			$recordPerPage = 10;
			$total = $this->model_detail();			
			$numPage = ceil($total/$recordPerPage);
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])? $_GET["p"]-1:0;
			$fromRecord = $p*$recordPerPage;			
			$data = $this->model_getdetail($fromRecord,$recordPerPage);
			$this->renderHTML("views/backend/detail_order.php",array("data"=>$data,"numPage"=>$numPage));
		}
		
	}
 ?>