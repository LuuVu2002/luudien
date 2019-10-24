<?php 
	include "models/backend/loginModel.php";
	class loginController extends Controller
	{
		use loginModel;
		public function index(){
			$this->renderHTML("views/backend/login.php");
		}
		public function login(){
			$data=$this->model_login();
			if(isset($data->user_name)){
				$_SESSION["user_name"]=$data->user_name;
			}
			header("location:index.php?area=backend");
		}
	}
 ?>