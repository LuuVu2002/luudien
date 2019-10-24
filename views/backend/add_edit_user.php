<?php 
	$this->layout="views/backend/layout.php";
 ?>
<div class="col-md-8 col-xs-offset-2">	
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit user</div>
		<div class="panel-body">
		<form method="post" action="<?php echo $formAction; ?>">
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Full name</div>
				<div class="col-md-10">
					<input type="text" value="<?php echo isset($record->fullname)?$record->fullname:'';?>" name="fullname" class="form-control" required>
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">User name</div>
				<div class="col-md-10">
					<input type="text" value="<?php echo isset($record->user_name)?$record->user_name:''; ?>" <?php if(isset($record->user_name)): ?> disabled <?php endif; ?> name="user_name" class="form-control" required>
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Password</div>
				<div class="col-md-10">
					<input type="password" name="password" class="form-control" <?php if(isset($record->user_name)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?>>
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="submit" value="Process" class="btn btn-primary">
				</div>
			</div>
			<!-- end rows -->
		</form>
		</div>
	</div>
</div>