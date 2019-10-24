<?php 
	include "models/frontend/newsModel.php";
	class newsController extends Controller{
		use newsModel;
		public function index(){
			$news=$this->news();
			$this->renderHTML("views/frontend/newsView.php",array("news"=>$news));
		}
	}
 ?>