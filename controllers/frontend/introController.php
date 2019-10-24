<?php 
	class introController extends Controller{
		public function index(){
			$this->renderHTML("views/frontend/introView.php");
		}
	}
 ?>