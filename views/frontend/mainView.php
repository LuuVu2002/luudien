<div class="top-content">
  <h3 class="title">SẢN PHẨM MỚI</h3>
  <div class="content-top">
    <div class="row">
      <?php foreach($newproduct as $rows): ?>
      <div class='col-md-3 col-sm-4 col-xs-6 col-min-12 look dv-sanpham'>
        <div class='dv-sanpham-child'>
          <a href='index.php?controller=product&action=detail&product_id=<?php echo $rows->product_id; ?>'><img class='img-responsive' src='assets/upload/news/<?php echo $rows->product_img; ?>' alt='<?php echo $rows->product_name; ?>' ></a>
          <h4><a href='index.php?controller=product&action=detail&product_id=<?php echo $rows->product_id; ?>'><?php echo $rows->product_name; ?></a></h4>
          <div class='price-sp'>
            <?php echo $rows->saleprice; ?> <sup> đ</sup> <span class='price-goc'>40,000 <sup> đ</sup></span>
          </div>
            <a href='index.php?controller=product&action=detail&product_id=<?php echo $rows->product_id; ?>' class='btn  btn-1c btn-show'>Xem ngay</a>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
  </div>
  <div class="clearfix"> </div>
</div>

