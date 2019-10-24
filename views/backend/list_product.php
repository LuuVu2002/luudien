<?php 
	$this->layout="views/backend/layout.php";
 ?>
 <div class="col-md-12">
 	<div style="margin-bottom:5px; float: left;">
		<a href="index.php?area=backend&controller=product&action=add" class="btn btn-primary">Add product</a>
	</div>
	<div style="text-align: right;">
		<input type="text" placeholder="Nhập tên sản phẩm" name="" id="key" style="font-style: italic;line-height: 26px;">
		<button type="button" class="btn btn-primary" onclick="return search();" >Tìm kiếm</button>
		<script type="text/javascript">
            function search(){
           var key = document.getElementById("key").value;
            location.href="index.php?area=backend&controller=product&action=search&key="+key;
            return false;
            }
          </script>
	</div>
	<div style="clear: both;"></div>
	<div class="panel panel-primary">
		<div class="panel-heading">List product</div>
		<div class="panel-body">
		<table class="table table-bordered table-hover">
			<tr>
				<th width="50px">Image</th>
				<th style="width:100px;">Title</th>
				<th style="width:100px;">Hotproduct</th>
				<th style="width:100px;">Category</th>
				<th style="width: 100px;">Quantity</th>
				<th style="width: 100px;">Saleprice</th>
				<th style="width: 100px;"></th>
			</tr>
			<?php foreach ($data as $rows): ?>
			<tr>
				<td>
					<?php if(isset($rows->product_img)&&file_exists("assets/upload/news/".$rows->product_img)): ?>
					<img src="assets/upload/news/<?php echo $rows->product_img; ?>" style="width: 100px;">
				<?php endif; ?> 
				
				</td>
				<td><?php echo $rows->product_name; ?></td>
				<td><?php echo $rows->hotproduct; ?></td>
				<td>
					<?php 
						$conn=Connection::getInstance();
						$query=$conn->prepare("select category_name from tbl_category where category_id=:cate_id");
						$query->setFetchMode(PDO::FETCH_OBJ);
						$result=$query->execute(array("cate_id"=>$rows->category_id));
						$result=$query->fetch();
						echo isset($result->category_name)?$result->category_name:"";
					 ?>
				</td>
				<td><?php echo $rows->product_quantity; ?></td>
				<td><?php echo $rows->saleprice; ?></td>
				<td style="text-align: center;">
					<a href="index.php?area=backend&controller=product&action=edit&product_id=<?php echo $rows->product_id; ?>">Edit</a>&nbsp;
					<a href="index.php?area=backend&controller=product&action=delete&product_id=<?php echo $rows->product_id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
		<style type="text/css">
				.pagination{padding:0px; margin:0px;}
			</style>
			<ul class="pagination">
				<li class="disabled"><a href="#">Trang</li>
					<?php for($i=1;$i<=$numPage;$i++): ?>
				<li><a href="index.php?area=backend&controller=product&action=list_product&p=<?php echo $i;?>"><?php echo $i; ?></a></li>
			<?php endfor; ?>
			</ul>
		</div>
	</div>
</div>
 