<?php 
	include "models/frontend/hotProductModel.php";
	class hotProductController extends Controller{
		use hotProductModel;
		public function index(){
			$hotproduct=$this->hotproduct();
			$this->renderHTML("views/frontend/hotProductView.php",array("hotproduct"=>$hotproduct));
		}
	}
 ?>