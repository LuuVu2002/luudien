<?php 
	include "models/frontend/cateheadModel.php";
	class cateheadController extends Controller{
		use cateheadModel;
		public function index(){
			$cate = $this->model_listCate();
			$this->renderHTML("views/frontend/cateheadView.php",array("cate"=>$cate));

		}

	}
 ?>

