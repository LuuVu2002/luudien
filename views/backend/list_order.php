<?php 
	$this->layout="views/backend/layout.php";
 ?>
 <div class="col-md-8 col-xs-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">List orders</div>
		<div class="panel-body">
		<table class="table table-bordered table-hover">
			<tr>
				<th>Customer's name</th>
				<th>Create at</th>
				<th>Status</th>
				<th></th>
			</tr>
			<?php foreach ($data as $rows): ?>
			<tr>
				<td>
					<?php 
						$conn=Connection::getInstance();
						$query=$conn->prepare("select fullname from tbl_customer where customer_id=:id");
						$query->setFetchMode(PDO::FETCH_OBJ);
						$result=$query->execute(array("id"=>$rows->customer_id));
						$result=$query->fetch();
						echo isset($result->fullname)?$result->fullname:"";
					 ?>
				</td>
				<td><?php echo $rows->create_at; ?></td>
				<td><?php echo $rows->status; ?></td>
				<td><a href="index.php?area=backend&controller=order&action=detail&order_id=<?php echo $rows->order_id; ?>">Details</a></td>
			</tr>
		<?php endforeach; ?>
		</table>
		<style type="text/css">
				.pagination{padding:0px; margin:0px;}
			</style>
			<ul class="pagination">
				<li class="disabled"><a href="#">Trang</li>
					<?php for($i=1;$i<=$numPage;$i++): ?>
				<li><a href="index.php?area=backend&controller=order&action=list_order&p=<?php echo $i;?>"><?php echo $i; ?></a></li>
			<?php endfor; ?>
			</ul>
		</div>
	</div>
</div>
 