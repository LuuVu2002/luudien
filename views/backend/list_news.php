<?php 
	$this->layout="views/backend/layout.php";
 ?>
 <div class="col-md-12">
 	<div style="margin-bottom:5px;">
		<a href="index.php?area=backend&controller=news&action=add" class="btn btn-primary">Add news</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">List news</div>
		<div class="panel-body">
		<table class="table table-bordered table-hover">
			<tr>
				<th width="50px">Image</th>
				<th style="width:100px;">Title</th>
				<th style="width:100px;">Hotnews</th>
				<th style="width:100px;">Description</th>
				<th style="width: 100px;"></th>
			</tr>
			<?php foreach ($data as $rows): ?>
			<tr>
				<td>
					<?php if(isset($rows->news_img)&&file_exists("assets/upload/news/".$rows->news_img)): ?>
					<img src="assets/upload/news/<?php echo $rows->news_img; ?>" style="width: 100px;">
				<?php endif; ?> 
				
				</td>
				<td><?php echo $rows->news_name; ?></td>
				<td><?php echo $rows->hotnews; ?></td>
				<td><?php echo $rows->news_description; ?></td>
				<td style="text-align: center;">
					<a href="index.php?area=backend&controller=news&action=edit&news_id=<?php echo $rows->news_id; ?>">Edit</a>&nbsp;
					<a href="index.php?area=backend&controller=news&action=delete&news_id=<?php echo $rows->news_id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
				<li><a href="index.php?area=backend&controller=news&action=list_news&p=<?php echo $i;?>"><?php echo $i; ?></a></li>
			<?php endfor; ?>
			</ul>
		</div>
	</div>
</div>
 