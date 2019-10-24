<?php 
	include "models/backend/customerModel.php";
	class customerController extends Controller{
		use customerModel;
		public function __construct(){
			$this->authentication();
		}
		public function list_customer(){
			$recordPerPage = 10;
			$total = $this->model_total();			
			$numPage = ceil($total/$recordPerPage);
			$p = isset($_GET["p"])&&is_numeric($_GET["p"])? $_GET["p"]-1:0;
			$fromRecord = $p*$recordPerPage;			
			$data = $this->model_get($fromRecord,$recordPerPage);
			$this->renderHTML("views/backend/list_customer.php",array("data"=>$data,"numPage"=>$numPage));
		}
		
	}
 ?>