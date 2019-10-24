<h4>Tin tức</h4>
<div class="row">
  <?php foreach($news as $rows): ?>
  <div class='col-md-6 col-sm-6 content-bottom-tintuc'>
    
    <div class='dv-tintuc'>
      <div class='dv-tinleft'>
        <a href='index.php?controller=news&id=<?php echo $rows->news_id; ?>'><img class='img-responsive' src='assets/upload/news/<?php echo $rows->news_img; ?>' alt='<?php echo $rows->news_name; ?>'></a>
      </div>
      <div class='dv-tinright'>
        <div class='dv-homett'>
          <div class='tit'>
            <a href='index.php?controller=news&id=<?php echo $rows->news_id; ?>'><?php echo $rows->news_name; ?></a>
          </div>
          <?php echo $rows->news_description; ?>
        </div>
        <a href='index.php?controller=news_detail&id=<?php echo $rows->news_id; ?>' class='hvr-icon-wobble-horizontal'>Xem ngay</a>
      </div>
      <div class='clear'></div>

    </div>
    
    <div class="clearfix"> </div>
  </div> 
                  
    <?php endforeach; ?>
  
  </div>