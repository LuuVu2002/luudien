<h3>TIN TỨC HOT</h3>
<div id="newsRight"> 
	<?php foreach($hotnews as $rows): ?>
	<a href='index.php?controller=news&id=<?php echo $rows->news_id; ?>' title='<?php echo $rows->news_name; ?>'> 
  		<img src='assets/upload/news/<?php echo $rows->news_img; ?>' width='230' alt='<?php echo $rows->news_name; ?>'>
  		<h4><?php echo $rows->news_name; ?></h4>
  		<div class='clear'></div>
	</a>
  	<?php endforeach; ?>
</div>
   