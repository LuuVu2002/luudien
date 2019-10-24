<?php 
	class Controller{
		public $layout="";
		public $view="";
		//hàm xuất html ra view
		public function renderHTML($fileView,$data=NULL){
			//sd hamf extract der bien key cua array thanh ten bien
			if($data!=NULL){
				extract($data);
			}
			//doc nd cuar file $fileView vao 1 bien
			ob_start();
			include $fileView;
			$this->view=ob_get_contents();
			ob_get_clean();
			//ktra file layout co dl thi load file layout
			if(file_exists($this->layout))
				include $this->layout;
			else
				//xuat len man hinh
				echo $this->view;
		}
		//ktra dang nhap
		public function authentication(){
			if($_SESSION["user_name"]==NULL)
				header("location:index.php?area=backend&controller=login");
		}
	}
 ?>