	<div class="head_top header_admin">
		<div class="bg_top">
      <script>
      	function jsupdate(k,idclass,jscolor) {
      	    if(k==0) 		$("."+idclass).css("background-color","#"+jscolor);
      	    else if (k==1)	$("."+idclass).css("color","#"+jscolor);
	     }
      </script>
    </div>
	</div>
  
	<div class="header">
  	<div class="container">
  		<div class="header-top">			
  			<div class="logo">
  				<a href="index.php?controller=home"><img alt='Thế giới rau sạch' class='img_logo' 
            src='assets/frontend/images/14867154122765_logo.png'></a>
  			</div>
  			<div class="search-in">
  				<div class="header-grid">
  					<ul>
  						<li class="in-up" >Hotline: <a href="tel:(028) 6256 3737" class="scroll">(028) 6256 3737</a> <label>|</label></li>
  						<li class="in-up" >Email: <a href="mailto:web@pavietnam.vn" class="scroll">web@pavietnam.vn</a> </li>
  						<li class="dv-mem-login" style="display: none">
  							<div class="glo-dangky-gruop">
                  <script>
                      function jsupdate(k, idclass, jscolor) {
                          if (k == 0) $("." + idclass).css("background-color", "#" + jscolor);
                          else if (k == 1) $("." + idclass).css("color", "#" + jscolor);
                      }
                  </script>
                  <ul>
                    <li><a href='login.html' OnClick="ShowHidden('id_mem_login'); return false;"
                           class='mem memdn'>Đăng nhập</a></li>
                    <li><a href='reg.html'
                         class='mem memdk'>Đăng ký</a></li>
                    <li><i class=""></i><p style="color: red; margin-left: 20px; font-size: 18px"></p></li>

                  </ul> 
                <div id="top_menu_admin_1" class='fix1000'>
                  <div id='id_mem_login' class='trontron'>
                    <form class='nomargin' id='memberloginit' action='' method='post' name='TheFormLogin'
                          onSubmit="return Check_LoginMember('id_tentruycap','id_matkhau'); return false;">
                      <input name='module' type='hidden' value='user'/>
                      <input name='action' type='hidden' value='member_login'/>
                      <div align='center'><h2
                                  class='h2memberstop cus1'>THÀNH VIÊN ĐĂNG NHẬP</h2>
                      </div>
                      Tên truy cập<input name='tentruycap' type='text' class='box_input' id='id_tentruycap' maxlength='65'/>
                      Mật khẩu</strong>
                      <input name='matkhau' type='password' class='box_input' id='id_matkhau' value='' maxlength='65'/>
                      <input class='submitbutton' type='submit' name='dangky' id='button'
                             value='đăng nhập'/>
                      <div style="cursor:pointer;"
                           onclick="ShowHidden('id_mem_login');ShowHidden('id_mem_loss');">Quên mật khẩu?</div>
                    </form>
                  <div class="clear"></div>
                  <div class="clear"></div>
                </div>
                <div id='id_mem_loss'
             style='position:absolute; top:30px; z-index:99999; display:none; background:#ccc; width:250px; margin-left:700px; padding:10px;'
             class='trontron'>
                  <form class='nomargin' id='memberlossit' action='' method='post' name='TheFormLogin'
                  onSubmit="return Check_LossMember('email_loss'); return false;">
                    <input type='hidden' name='module' value='user'/>
                    <input type='hidden' name='action' value='member_loss'/>
                    <div align='center'><h2>QUÊN MẬT KHẨU</h2></div>

                    Xin nhập vào email của bạn:</strong>
                    <input name='email' type='text' class='box_input' id='email_loss' maxlength='65'/>
                    <input class='submitbutton' type='submit' name='dangky' id='id_quenmatkhau'
                           value='QUÊN MẬT KHẨU'/>
                    <div style="cursor:pointer;"
                         onclick="ShowHidden('id_mem_login');ShowHidden('id_mem_loss');">nhớ rồi, đăng nhập lại</div>
                  </form>
                  <div class="clear"></div>
                </div>
              </div>
            </div>						
          </li>
					<li></li>
				</ul>
			</div>
			<div class="content-cart">
        <?php 
      $number = 0;
      $number = isset($_SESSION["cart"]) ? count($_SESSION["cart"]) : 0;
     ?>
				<div class="cart">
					<a href="index.php?controller=cart" class="cart-in"> </a>
					<span><?php echo $number; ?></span>
				</div>
				<div class="search-top">
					<div class="search">
            <form method="post" action="">
					<input type="text" class="key_timkiem"  value="Nhập từ khóa tìm kiếm..." onFocus="if (this.value == 'Nhập từ khóa tìm kiếm...'){this.value='';}" onBlur="if (this.value == '') {this.value='Nhập từ khóa tìm kiếm...';}" id="key"/>
					<input type="button"  value="" onclick="return search();">
        </form>
					<script type="text/javascript">
            function search(){
            key = document.getElementById("key").value;
            location.href="index.php?controller=search&key="+key;
            return false;
            }
          </script>
				</div>
			</div>
			
			<div class="clearfix"> </div>
			</div>
		</div>	
		<div class="clearfix"> </div>
		</div>
	</div>   
  <!-- link dau -->
	<div class="header-bottom-bottom">
    <div class="container">
      <div class="top-nav menu_desktop" id="menu">
        <span class="menu"> </span>
        <ul >
          <li class=' active'><a class='' href='index.php?controller=home'><span>TRANG CHỦ</span></a></li>
          <li class=''><a class='' href='index.php?controller=intro' ><span>Giới thiệu</span></a></li>
          <li class=' '><a class='' href='index.php?controller=product' ><span>Sản Phẩm</span></a>
              <?php 
                include "controllers/frontend/cateheadController.php";
                $obj=new cateheadController();
                $obj->index();
               ?>
          </li>
          <li class=''><a  class='' href='index.php?controller=news' ><span>Tin tức</span></a></li>
          <li class=''><a class='' href='mo-hinh-xanh.html' ><span>Mô hình xanh</span></a></li>
          <li class=''><a class='' href='Tuyen-dung-355788.html' ><span>Tuyển dụng</span></a></li>
          <li class=''><a class='' href='Lien-he-355790.html' ><span>Liên hệ</span></a></li>          <!--  -->
        </ul>       
      </div>  
      <!--  -->
      <script src="assets/frontend/js/modernizr.custom.js"></script>
      <script src="assets/frontend/js/jquery.dlmenu.js"></script>
      <script>
        $(function() {
          $( '#dl-menu' ).dlmenu();
        });

        $(document).ready(function(){
          $('body').click(function(e) {
                $('#dl-menu').dlmenu('closeMenu'); 
          });
        });
      </script>

      <div class="dv-mnmb mobile menu_mobile">

        <a class="a_home" href="index.php">trang chủ</a></a>
        <div id="dl-menu" class="dl-menuwrapper">
          <button class="dl-trigger cur "></button>
          <div class="clear"></div>
            <ul class="dl-menu">
              

              <li class=' active'><a class='' href='index.php'><span>TRANG CHỦ</span></a></li><li class=''><a class='' href='Gioi-thieu-355773.html' ><span>Giới thiệu</span></a></li><li class=' '><a class='' href='index.php?controller=product' ><span>Sản Phẩm</span></a><ul class="dl-submenu  " ><li><a href='Rau-sach-355765.html'>» Rau sạch</a></li><li><a href='Rau-huu-co-355779.html'>» Rau hữu cơ</a></li><li><a href='Rau-sach-Da-Lat-355781.html'>» Rau sạch Đà Lạt</a></li><li><a href='Nam-sach-Viet-355782.html'>» Nấm sạch Việt</a></li><li><a href='Rau-an-toan-355778.html'>» Rau an toàn</a></li><li><a href='Hoa-qua-sach-355768.html'>» Hoa quả sạch</a><ul class='dl-submenu'><li><a href='Hoa-qua-nhap-khau-355774.html'>» Hoa quả nhập khẩu</a><li><a href='Hoa-qua-Viet-Nam-355775.html'>» Hoa quả Việt Nam</a><li><a href='Hoa-qua-say-kho-Da-Lat-355776.html'>» Hoa quả sấy khô Đà Lạt</a></ul></li></ul></li><li class=''><a  class='' href='index.php?controller=news' ><span>Tin tức</span></a></li><li class=''><a class='' href='mo-hinh-xanh.html' ><span>Mô hình xanh</span></a></li><li class=''><a class='' href='Tuyen-dung-355788.html' ><span>Tuyển dụng</span></a></li><li class=''><a class='' href='Lien-he-355790.html' ><span>Liên hệ</span></a></li>              <!--  -->
            </ul>
        </div>
        <div class="clear"></div>
      </div>
      <!--  -->
      <div class="clearfix"> </div>
    </div>
  </div></div>

</div>	
<!-- end header -->