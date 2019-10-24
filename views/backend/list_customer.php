<?php 
	$this->layout="views/backend/layout.php";
 ?>
 <div class="col-md-8 col-xs-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">List customers</div>
		<div class="panel-body">
		<table class="table table-bordered table-hover">
			<tr>
				<th>Customer's name</th>
				<th>Email</th>
				<th>Address</th>
				<th>Phone</th>
			</tr>
			<?php foreach ($data as $rows): ?>
			<tr>
				<td><?php echo $rows->fullname; ?></td>
				<td><?php echo $rows->email; ?></td>
				<td><?php echo $rows->address; ?></td>
				<td><?php echo $rows->phone; ?></td>
			</tr>
		<?php endforeach; ?>
		</table>
		<style type="text/css">
				.pagination{padding:0px; margin:0px;}
			</style>
			<ul class="pagination">
				<li class="disabled"><a href="#">Trang</li>
					<?php for($i=1;$i<=$numPage;$i++): ?>
				<li><a href="index.php?area=backend&controller=customer&action=list_customer&p=<?php echo $i;?>"><?php echo $i; ?></a></li>
			<?php endfor; ?>
			</ul>
		</div>
	</div>
</div>
 