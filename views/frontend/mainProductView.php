<?php 
	$this->layout="views/frontend/layout_sanpham.php";
 ?>

<div class="dv-child-left">
	<h3 class="title">Sản Phẩm</h3>
	<div class="servc-grids">
		<div class="row">
			<?php foreach($data as $rows): ?>
			<div class='col-md-4 col-sm-4 col-xs-6 col-min-12 look dv-sanpham'>
			  	<div class='dv-sanpham-child'>
			        <a href='index.php?controller=product&action=detail&product_id=<?php echo $rows->product_id ?>'><img class='img-responsive' src='assets/upload/news/<?php echo $rows->product_img; ?>' alt='<?php echo $rows->product_name; ?>' ></a>
			        <h4><a href='index.php?controller=product&action=detail&product_id=<?php echo $rows->product_id ?>'><?php echo $rows->product_name; ?></a></h4>
			        <div class='price-sp'>
						<?php echo $rows->saleprice; ?> <sup> đ</sup> <span class='price-goc'></span>
					</div>
			        <a href='index.php?controller=product&action=detail&product_id=<?php echo $rows->product_id ?>' class='btn btn-show btn-1c'>Xem ngay</a>

			  	</div>
			</div>
			<?php endforeach; ?>
			<div class="clearfix"> </div>
			
		  <input id="d_current_category" type="hidden" value="0"/>
			<!-- paging -->
                  <style type="text/css">
				.pagination{padding:0px; margin:0px;}
			</style>
			<ul class="pagination">
				<li class="disabled"><a href="#">Trang</li>
					<?php for($i=1;$i<=$numPage;$i++): ?>
				<li><a href="index.php?controller=product&p=<?php echo $i;?>"><?php echo $i; ?></a></li>
			<?php endfor; ?>
			</ul>
                <!-- end paging --> 
		</div>
		
	</div>
</div>