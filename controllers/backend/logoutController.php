<?php 
	class logoutController{
		public function index(){
			unset($_SESSION["user_name"]);
			header("location:index.php?area=backend");
		}
	}
 ?>