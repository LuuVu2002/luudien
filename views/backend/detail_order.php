<?php 
	$this->layout="views/backend/layout.php";
 ?>
 <div class="col-md-8 col-xs-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">Order detail</div>
		<div class="panel-body">
		<table class="table table-bordered table-hover">
			<tr>
				<th>Product's name</th>
				<th>Saleprice</th>
				<th>Number</th>
				
			</tr>
			<?php foreach ($data as $rows): ?>
			<tr>
				<td>
					<?php 
						$conn=Connection::getInstance();
						$query=$conn->prepare("select product_name from tbl_product where product_id=:id");
						$query->setFetchMode(PDO::FETCH_OBJ);
						$result=$query->execute(array("id"=>$rows->product_id));
						$result=$query->fetch();
						echo isset($result->product_name)?$result->product_name:"";
					 ?>
				</td>
				<td><?php echo $rows->saleprice; ?></td>
				<td><?php echo $rows->number; ?></td>
				
			</tr>
		<?php endforeach; ?>
		</table>
		<style type="text/css">
				.pagination{padding:0px; margin:0px;}
			</style>
			<ul class="pagination">
				<li class="disabled"><a href="#">Trang</li>
					<?php for($i=1;$i<=$numPage;$i++): ?>
				<li><a href="index.php?area=backend&controller=order&action=detail_order&p=<?php echo $i;?>"><?php echo $i; ?></a></li>
			<?php endfor; ?>
			</ul>
		</div>
	</div>
</div>
 