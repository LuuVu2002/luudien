<?php 
	class homeController extends Controller{
		public function __construct(){
			$this->authentication();
		}
		public function index(){
			$this->renderHTML("views/backend/home.php");
		}
	}
 ?>