<?php 
	//load file template
	$this->layout = "views/backend/layout2.php";
 ?>
<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit news</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $formAction; ?>" enctype= "multipart/form-data">	<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Tiêu đề</div>
				<div class="col-md-10">
					<input type="text" name="news_name" class="form-control" value="<?php echo isset($record->news_name)?$record->news_name:""; ?>">
				</div>
			</div>
			<!-- end row -->
			
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Giới thiệu</div>
				<div class="col-md-10">
					<textarea name="news_description" class="form-control" style="height:250px;">		<?php echo isset($record->news_description)?$record->news_description:""; ?>		
					</textarea>
				<script type="text/javascript">
					CKEDITOR.replace("news_description");
				</script>	
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Chi tiết</div>
				<div class="col-md-10">
					<textarea name="news_content" class="form-control" style="height:300px;">
						<?php echo isset($record->news_content)?$record->news_content:""; ?>
					</textarea>
					<script type="text/javascript">
					CKEDITOR.replace("news_content");
				</script>
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Ảnh</div>
				<div class="col-md-10">
					<input type="file" name="news_img">
				</div>
			</div>
			<!-- end row -->	
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="checkbox" <?php if(isset($record->hotnews)&&$record->hotnews==1): ?> checked <?php endif; ?> name="hotnews" id="c_hotnews"> <label for="c_hotnews">Tin hot</label>
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="submit" class="btn btn-primary" value="Process">
				</div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
</div>