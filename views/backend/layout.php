<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="assets/backend/layout2/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/backend/layout2/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/backend/layout2/css/sb-admin.css" rel="stylesheet">
    <script type="text/javascript" src="assets/backend/ckeditor/ckeditor.js"></script>
    <style type="text/css">
      .logo{
      height: 210px;
      border: 1px solid white;
      border-radius: 100%;
      width: 210px;
      background: white;
      position: relative;
      margin-left: 20px;
    }
    .logo img{
      padding-top: 50px;
      width: 100%;
    }
    .block{
      position: absolute;
      opacity: 0;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;

    }
    .logo_content{
      position: absolute;
      font-size: 25px;
      padding: 10px 20px;
      color: white;
      font-style: italic;
      background: #707070;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
    }
    .logo:hover .block{
      opacity: 1;
    }
    .logo:hover img{
      opacity: 0.5;
    }
    #side-menu.nav li a{
    color: black !important;
}
    </style>
</head>

<body>
    <div id="wrapper" style="background: #98D0B9;">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0; background: #98D0B9;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-default navbar-static-side" style="background: #98D0B9;" role="navigation" >
                <div class="sidebar-collapse">
                  <div class="logo">
                    <img src="assets/frontend/images/14867154122765_logo.png" style="">
                    <div class="block">
                      <div class="logo_content">ADMIN</div>
                    </div>
                  </div>
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php?area=backend&controller=home"><i class="fa fa-dashboard fa-fw"></i> Trang chủ</a>
                        </li>                        
                        <li>
                            <a href="index.php?area=backend&controller=category&action=list_category"><i class="fa fa-table fa-fw"></i> Danh mục sản phẩm</a>
                        </li>
                        <li>
                            <a href="index.php?area=backend&controller=product&action=list_product"><i class="fa fa-edit fa-fw"></i> Danh sách sản phẩm</a>
                        </li>
                        <li>
                            <a href="index.php?area=backend&controller=customer&action=list_customer"><i class="fa fa-edit fa-fw"></i> Danh sách khách hàng</a>
                        </li>
                        <li>
                            <a href="index.php?area=backend&controller=order&action=list_order"><i class="fa fa-edit fa-fw"></i> Danh sách đơn hàng</a>
                        </li>
                        <li>
                            <a href="index.php?area=backend&controller=news&action=list_news"><i class="fa fa-edit fa-fw"></i> Danh sách tin tức</a>
                        </li>
                        <li>
                            <a href="index.php?area=backend&controller=user&action=list_user"><i class="fa fa-edit fa-fw"></i> User</a>
                        </li>
                        <li>
                            <a href="index.php?area=backend&controller=logout"><i class="fa fa-edit fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper" style="padding-top: 20px;">
            <div class="row">
                <div class="col-lg-12">
                    <!-- content here -->
                    <?php 
                        //hien thi view o day
                        echo $this->view;
                     ?>
                    <!-- end content -->
                </div>
            </div>
        </div>

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/backend/layout2/js/jquery-1.10.2.js"></script>
    <script src="assets/backend/layout2/js/bootstrap.min.js"></script>
    <script src="assets/backend/layout2/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Blank -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="assets/backend/layout2/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Blank - Use for reference -->

</body>

</html>
