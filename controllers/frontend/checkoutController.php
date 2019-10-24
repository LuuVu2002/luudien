<?php 
	include "models/frontend/checkoutModel.php";
	class checkoutController extends Controller{
		use checkoutModel;
		public function index(){
			$this->renderHTML("views/frontend/checkoutView.php");
		}
		public function bill(){
			$this->model_bill();
			header("location:index.php?controller=cart");
		}
	}
 ?>