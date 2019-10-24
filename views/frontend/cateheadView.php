  <!-- <h3>DANH MỤC SẢN PHẨM</h3> -->
  <ul class="dv_list_dmsp">
    <?php foreach($cate as $rows): ?>
    <li><a href='index.php?controller=product&action=category&category_id=<?php echo $rows->category_id; ?>'><?php echo $rows->category_name; ?></a><span class='SHOW_menu_left' data='index.php?controller=product&action=category&category_id=<?php echo $rows->category_id; ?>'></span></li>
  <?php endforeach; ?>
  </ul>
  
