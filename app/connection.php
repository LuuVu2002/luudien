<?php 
	class Connection{
		//hàm kết nối cơ sở dl
		public static function getInstance(){
			//khai báo biến toàn cục
			global $hostname;
			global $database;
			global $user;
			global $password;
			$conn=new PDO("mysql:host=$hostname;dbname=$database","$user","$password");
			//set charset
			$conn->exec("set names 'utf8'");
			//trả về kết nối để lấy dl từ các hàm khác
			return $conn;
		}
	}
 ?>