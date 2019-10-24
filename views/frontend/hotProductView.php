<h3>SẢN PHẨM BÁN CHẠY</h3>
<div class="marqueew">
	<?php foreach($hotproduct as $rows): ?>
  <div class='dv-spleft'>
  	
    <a href='index.php?controller=product&action=detail&product_id=<?php echo $rows->product_id; ?>'><img class='img-responsive' src='assets/upload/news/<?php echo $rows->product_img; ?>' alt='<?php echo $rows->product_name; ?>'  /></a>
    <h4><a href='index.php?controller=product&action=detail&product_id=<?php echo $rows->product_id; ?>'><?php echo $rows->product_name; ?></a></h4>
    <div class='price-left'>
        <span class='item_price'><?php echo $rows->saleprice; ?><sup>đ</sup></span>
    </div>
    <div class='dv-nd'>Chuy&ecirc;n cung cấp n&ocirc;ng sản khu vực trong v&agrave; ngo&agrave;i nước</div>
    <div class='clearfix'> </div>
</div>
<?php endforeach; ?>
</div>
