<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/backend/layout2/css/bootstrap.min.css">
</head>
<body>
	<style type="text/css">
		body{
			margin: 0px;
			background: url(assets/frontend/images/loginbackground.jpg);
			background-size: cover;
		}
		.btn{
			 background: #F5F5DC; border: 1px solid #66CC99; 
		}
		.btn:hover{
			background: #66CC99;
			color: white;
		}
		.panel-body.row{
			margin-bottom: 15px; margin-top: 5px;
		}
		.panel{
			box-shadow: 0px 4px 10px 4px white, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border: 1px solid #66CC99;
		}
		.panel-heading{
			text-align: center; font-size: 18px; background: #66CC99;
			color: white;
		}
	</style>
<div class="container" style="margin-top: 15%; margin-left: 10%; ">
	<div class="row">
		<div class="col-md-5 col-md-offset-3">
			<div class="panel">
				<div class="panel-heading" style="">LOGIN IN HERE</div>
				<div class="panel-body">
					<form method="post" action="index.php?area=backend&controller=login&action=login">
					<!-- row -->
					<div class="row" style="margin-bottom: 15px; margin-top: 5px;">
						<div class="col-md-2">User</div>
						<div class="col-md-10"><input type="text" required name="user_name" class="form-control"></div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin-bottom: 15px;">
						<div class="col-md-2">Password</div>
						<div class="col-md-10"><input type="password" required name="password" class="form-control"></div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin-bottom: 5px; margin-top: 20px;">
						<div class="col-md-2"></div>
						<div class="col-md-10"><input type="submit" class="btn" value="Login" style="margin-right: 150px;"> <input type="reset" class="btn"  value="Reset"></div>
					</div>
					<!-- end row -->
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>