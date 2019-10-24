<?php 
	//tao cac bien mac dinh
	$area="frontend";
	$controller="home";
	$action="index";
	//lay cac bien truyen tu url
	$area=isset($_GET["area"])?$_GET["area"]: $area;
	$controller=isset($_GET["controller"])?$_GET["controller"]: $controller;
	$action=isset($_GET["action"])?$_GET["action"]: $action;
	$fileController="controllers/$area/$controller"."Controller.php";
	if(file_exists($fileController)){
		include $fileController;
		$className=$controller."Controller";
		if(class_exists($className)){
			$obj=new $className();
			$obj->$action();
		}
		else{
			die("Class $className not exist");
		}
	}
 ?>