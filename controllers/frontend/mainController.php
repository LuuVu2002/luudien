<?php 
	include "models/frontend/mainModel.php";
	class mainController extends Controller{
		use mainModel;
		public function index(){
			$newproduct=$this->newproduct();
			$this->renderHTML("views/frontend/mainView.php",array("newproduct"=>$newproduct));
		}
	}
 ?>