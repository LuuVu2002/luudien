<?php 
	include "models/frontend/hotnewsModel.php";
	class hotnewsController extends Controller{
		use hotnewsModel;
		public function index(){
			$hotnews=$this->hotnews();
			$this->renderHTML("views/frontend/hotnewsView.php",array("hotnews"=>$hotnews));
		}
	}
 ?>