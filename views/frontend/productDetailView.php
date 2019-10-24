<?php 
$this->layout="views/frontend/layout_sanpham.php";
?>

<div class="dv-child-left">
  <h3 class="title"><?php echo $record->product_name; ?></h3>
  <div class="content-top">
    <div class=" detai_sanpham">						
      <div class="breadcrumb"><a href='san-pham.html' class='linky'><span>Product</span></a><span class=''>&raquo;</span><a href='Rau-sach-Da-Lat-355781.html' class='linky'><span>Rau sạch Đà Lạt</span></a></div>	
  		<a href='JavaScript:ajax_action(2659190,1);' class='butthree' style='margin-left:10px;'><img src='assets/frontend/images/love_icon.png' align='absmiddle' width='15' height='15'>Thích</a>
  		<a href='JavaScript:ajax_action(2659190,2);' class='butthree' style='margin-left:70px;'><img src='assets/frontend/images/needle_icon.png' align='absmiddle' width='15' height='15'> Muốn</a>
      <div class="main_content_top main_content_top_cus1">
        <script type="text/javascript" src="assets/frontend/js/jquery.simple-gallery.min.js"></script>
        <script type="text/javascript" src="assets/frontend/js/jquery.simple-lens.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/frontend/css/jquery.simple-lens.css">
        <link rel="stylesheet" type="text/css" href="assets/frontend/css/jquery.simple-gallery.css">
        <script>
            $(document).ready(function(){
                $('#demo-1 .simpleLens-thumbnails-container img').simpleGallery({
                    loading_image: 'demo/assets/frontend/images/loading.gif',
                    show_event: 'click'
                });

            $('#demo-1 .simpleLens-big-image').simpleLens({
                loading_image: 'demo/assets/frontend/images/loading.gif'
            });
            });
        </script>
        <div class="simpleLens-gallery-container main_col_left main_col_left_cus1" id="demo-1">
          <div class="simpleLens-container">
            <div class="simpleLens-big-image-container">
              <a class="simpleLens-lens-image" data-lens-image="assets/upload/news/<?php echo $record->product_img; ?>">
                <img alt='Bông Atisô' class="simpleLens-big-image" src="assets/upload/news/<?php echo $record->product_img; ?>"/>
              </a>
            </div>
          </div>

          <div class="simpleLens-thumbnails-container body_thumb_content body_thumb_content_cus1">
            <a href='JavaScript:void(0);' class='simpleLens-thumbnail-wrapper'
                 data-lens-image='assets/upload/news/<?php echo $record->product_img; ?>'
                 data-big-image='assets/upload/news/<?php echo $record->product_img; ?>'>
                  <img class='border_images' src='assets/upload/news/<?php echo $record->product_img; ?>' width='50'>
            </a>
  
            <a href='JavaScript:void(0);' class='simpleLens-thumbnail-wrapper'
               data-lens-image='assets/upload/news/<?php echo $record->product_img; ?>'
               data-big-image='assets/upload/news/<?php echo $record->product_img; ?>'>
                <img src="assets/upload/news/<?php echo $record->product_img; ?>" alt='<?php echo $record->product_name; ?>' class='assets/upload/news/<?php echo $record->product_img; ?>' width='50'>
            </a>
              
            <a href='JavaScript:void(0);' class='simpleLens-thumbnail-wrapper'
               data-lens-image='assets/upload/news/<?php echo $record->product_img; ?>'
               data-big-image='assets/upload/news/<?php echo $record->product_img; ?>'>
                <img alt='<?php echo $record->product_name; ?>' class='border_images' src='assets/upload/news/<?php echo $record->product_img; ?>' width='50'>
            </a>
          </div>
        </div>

        <div class="main_col_right main_col_right_cus1">
          <div style='padding:8px;' class='text_color'>
            <div class='comment_nho'><span id='love_2659190'>0</span> yêu thích</div>
            <div class='comment_nho'><span id='want_2659190'>0</span> muốn mua</div>
          </div>        
          <div class="clear"></div>
          <h1 class="main_right_title"><?php echo $record->product_name; ?></h1>                                                         
          <div class="clear"></div>
          <div class="line_top_1 line_top_cus1"></div>
          <div class="global_ghichu_1 global_ghichu_2">
            <ul>
            	<li>D&ograve;ng sản phẩm: <?php echo $record->product_name; ?></li>
            	<li>Số lượng sản phẩm trong kho: <?php echo number_format($record->product_quantity); ?></li>
            </ul>

            <ul>
            	<li><?php echo $record->product_description; ?></li>
            </ul>
          </div>
          <div class="clear"></div>
          <div class='gia_thanhtien gia_thanhtien_cus1'><span class='glo-tgiagoc' style='display:none'>Giá bán</span><?php echo number_format($record->saleprice); ?> VND </div>    <div class="product_details_cart">
            <div class="product-quantity">
              <div class="numbers-row">
                <div class="buttontext left" onclick="ADD_num_quantity('-')">-</div>
                <input class="intext left" type="text" name="quantity" value="1" id="input-quantity">
                <div class="buttontext left" onclick="ADD_num_quantity('+')">+</div>
                <!--update by 5k 26-7-2016-->
                <div class="left icon_body icon_body_sosanh_cus1"><a href='JavaScript:ajax_action(2659190,2);'><i class="fa fa-retweet"></i></a></div>
                <div class="left icon_body icon_body_love_cus1"><a href='JavaScript:ajax_action(2659190,1);'><i class="fa fa-heart-o"></i></a></div>
                <!--end update by 5k 26-7-2016--> <div class="left icon_body icon_body_love_cus1"><a href='datafiles/4448/upload/assets/frontend/images/rau/01-17-800x800.jpg' class='lightbox'><i class="fa fa-search-plus"></i></a></div>
              </div>
            </div>
            <div class="product-bottom">
              <button onclick="location.href='index.php?controller=cart&action=add&product_id=<?php echo $record->product_id; ?>&sl='+$('#input-quantity').val();" type="button" id="button-cart" class="button btn-cart shopng-btn">Thêm vào giỏ</button>                </div>
      				<script type="text/javascript">
      					function ADD_num_quantity(loai)
      						{
      							var num = $("#input-quantity").val();
      							if(isNaN(num))
      								{
      									num = 1;
      								}
      							if(loai 		== '-' && num > 1) num--;
      							else if(loai 	== '+' && num < 100000) num++;
      							$("#input-quantity").val(num);
      						}
      				</script>

            <div class="right social_network_right">
                <ul class="social_links">
                  <li class="skype">
                    <script>
                    (function(r, d, s) {
                        r.loadSkypeWebSdkAsync = r.loadSkypeWebSdkAsync || function(p) {
                            var js, sjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(p.id)) { return; }
                            js = d.createElement(s);
                            js.id = p.id;
                            js.src = p.scriptToLoad;
                            js.onload = p.callback
                            sjs.parentNode.insertBefore(js, sjs);
                        };
                      var p = {
                          scriptToLoad: "//swx.cdn.skype.com/shared/v/latest/skypewebsdk.js",
                          id: "skype_web_sdk"
                      };
                      r.loadSkypeWebSdkAsync(p);
                  })(window, document, "script");
                  </script>
                    <div class="skype-share" data-href="https://webnongnghiep.web30s.vn/bong-atiso" data-lang="vi" data-style="square"></div>
                  </li>
                  <li class="zalo">
                    <div class="zalo-share-button" data-href="https://webnongnghiep.web30s.vn/bong-atiso" data-oaid="579745863508352884" data-layout="2" data-color="blue" data-customize=false></div>
                  <script src="../sp.zalo.me/plugins/sdk.html"></script>
                  </li>
                  <li class="twitter">
                      <script>window.twttr = (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0],
                      t = window.twttr || {};
                    if (d.getElementById(id)) return t;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "../platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                    t._e = [];
                    t.ready = function(f) {
                      t._e.push(f);
                    };
                    return t;
                  }(document, "script", "twitter-wjs"));</script>
                  <a class="twitter-share-button" href="https://twitter.com/intent/tweet?url=https://webnongnghiep.web30s.vn/bong-atiso"></a>
                  </li>
                  <li class="facebook">
                      <script>
                  if (!document.getElementById('fb-root')) {
                      document.writeln('<div id="fb-root" style="display: inline-block;"></div>');
                      (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;//vi_VN //en_US
                        js.src = "../connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=164566120964750&autoLogAppEvents=1";
                        fjs.parentNode.insertBefore(js, fjs);
                      }(document, 'script', 'facebook-jssdk'));
                  }
                  </script><div class="fb-share-button" data-layout="button" data-href="https://webnongnghiep.web30s.vn/bong-atiso"></div>
                  </li>
                </ul>                
              </div>
            </div>
          </div>
          <div class='clear'></div>
        </div>

        <div class="main_content_body main_content_body_cus1">
        	<div class='microformat'>
            <?php echo $record->product_content; ?>

            <div class='clear'></div>
          
            <div class='clear cao20'></div>
            <div class='dv-fbbox-like'>
            <div class='fb-like' id='fb-like' data-href='https://webnongnghiep.web30s.vn/bong-atiso' data-layout='standard' data-action='like' data-size='small' data-show-faces='true' data-share='true'></div>
            <div class='fb-comments' data-width='100%' data-href='https://webnongnghiep.web30s.vn/bong-atiso' data-numposts='5'></div>
          </div>
        </div>    
        <script>
            var div_fb_like = document.getElementById('fb-like');
            if (div_fb_like) {
                div_fb_like.setAttribute('data-width', div_fb_like.parentNode.offsetWidth);
            }
        </script>

        <div class="clear"></div>
      </div>
      <div class="clearfix"> </div>
          </div>
          <div class="clearfix"> </div>
          <div id="title_page">
            <h3 class="title">Sản phẩm liên quan</h3>
          </div> 
          <div class="clearfix"> </div>
          <div id="noidung_load">
            <div id="placeSlide_main">
              <div id="placeSlide_page">
                <div class="row">
                <ul>
                 
                  <?php foreach($splq as $rows): ?>
                  <div class='col-md-4 col-sm-4 col-xs-6 col-min-12 look dv-sanpham'>
                    <div class='dv-sanpham-child'>
                      <a href='index.php?controller=product&action=detail&product_id=<?php echo $rows->product_id; ?>'><img class='img-responsive' src='assets/upload/news/<?php echo $rows->product_img; ?>' alt='<?php echo $rows->product_name; ?>' ></a>
                      <h4><a href='index.php?controller=product&action=detail&product_id=<?php echo $rows->product_id; ?>'><?php echo $rows->product_name; ?></a></h4>
                      <div class='price-sp'><?php echo $rows->saleprice; ?><sup> đ</sup> <span class='price-goc'></span>
                      </div>
                      <a href='xa-lach-mo.html' class='btn btn-show btn-1c'>Xem ngay</a>
                    </div>
                  </div>
                  <?php endforeach; ?>
                </ul>
                </div>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
          <div class="clear"></div>
          <!--  -->
                    <input id="d_current_category" type="hidden" value="54598"/>
        <div class="clearfix"> </div>
      </div>
      <div class="clearfix"> </div>
    </div>
 

