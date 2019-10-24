<?php 
	$this->layout="views/frontend/layout_sanpham.php";
 ?>

<div class="dv-child-left">
	<?php 
		$categoryName = $this->getCategoryName();
  	 ?>
	<h3 class="title"><?php echo $categoryName->category_name; ?></h3>
	<div class="servc-grids">
		<div class="row">
			<?php foreach($data as $rows): ?>
			<div class='col-md-4 col-sm-4 col-xs-6 col-min-12 look dv-sanpham'>
			  	<div class='dv-sanpham-child'>
			        <a href='index.php?controller=product&action=detail&product_id=<?php echo $rows->product_id; ?>'><img class='img-responsive' src='assets/upload/news/<?php echo $rows->product_img; ?>' alt='<?php echo $rows->product_name; ?>' ></a>
			        <h4><a href='index.php?controller=product&action=detail&product_id=<?php echo $rows->product_id ?>'><?php echo $rows->product_name; ?></a></h4>
			        <div class='price-sp'>
						<?php echo $rows->saleprice; ?> <sup> đ</sup> <span class='price-goc'></span>
					</div>
			        <a href='index.php?controller=product&action=detail&product_id=<?php echo $rows->product_id ?>' class='btn btn-show btn-1c'>Xem ngay</a>

			  	</div>
			</div>
			<?php endforeach; ?>
			<input id="d_current_category" type="hidden" value="0"/>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>