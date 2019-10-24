<?php 
	$this->layout="views/backend/layout.php";
 ?>
<div class="col-md-8 col-xs-offset-2">	
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit category</div>
		<div class="panel-body">
		<form method="post" action="<?php echo $formAction; ?>">
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Category's name</div>
				<div class="col-md-10">
					<input type="text" value="<?php echo isset($record->category_name)?$record->category_name:''; ?>" name="category_name" class="form-control" required>
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