<?php 
	//load file template
	$this->layout = "views/backend/layout2.php";
 ?>
<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit product</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $formAction; ?>" enctype= "multipart/form-data">			
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Tiêu đề</div>
				<div class="col-md-10">
					<input type="text" name="product_name" class="form-control" value="<?php echo isset($record->product_name)?$record->product_name:""; ?>">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Giá</div>
				<div class="col-md-10">
					<input type="text" min="0" name="saleprice" class="form-control" value="<?php echo isset($record->saleprice)?$record->saleprice:""; ?>">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Thuộc danh mục</div>
				<div class="col-md-10">
					<select name="category_id">
						<?php 
							$conn = Connection::getInstance();
							$query = $conn->prepare("select * from tbl_category order by category_id desc");
							$query->setFetchMode(PDO::FETCH_OBJ);
							$query->execute();
							$category = $query->fetchAll();
						 ?>
						 <?php foreach($category as $rows): ?>
						<option <?php if(isset($record->category_id)&&$record->category_id==$rows->category_id): ?> selected <?php endif; ?> value="<?php echo $rows->category_id; ?>"><?php echo isset($rows->category_name)?$rows->category_name:""; ?></option>		
						<?php endforeach; ?>			
					</select>
				</div>
			</div>
			<!-- end row -->
			
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Giới thiệu</div>
				<div class="col-md-10">
					<textarea name="product_description" class="form-control" style="height:250px;">		<?php echo isset($record->product_description)?$record->product_description:""; ?>		
					</textarea>
				<script type="text/javascript">
					CKEDITOR.replace("product_description");
				</script>	
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Chi tiết</div>
				<div class="col-md-10">
					<textarea name="product_content" class="form-control" style="height:300px;">
						<?php echo isset($record->product_content)?$record->product_content:""; ?>
					</textarea>
					<script type="text/javascript">
					CKEDITOR.replace("product_content");
				</script>
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Số lượng</div>
				<div class="col-md-10">
					<input type="number" min="0" name="product_quantity" class="form-control" value="<?php echo isset($record->product_quantity)?$record->product_quantity:""; ?>">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Ảnh</div>
				<div class="col-md-10">
					<input type="file" name="product_img">
				</div>
			</div>
			<!-- end row -->	
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="checkbox" <?php if(isset($record->hotproduct)&&$record->hotproduct==1): ?> checked <?php endif; ?> name="hotproduct" id="c_hotproduct"> <label for="c_hotproduct">Sản phẩm bán chạy</label>
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