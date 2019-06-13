<?php
require "DAO/connect.php";
$result = dienthoai();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin - Điện thoại</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />



</head>

<body>
<!-- container section start -->
<section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="index.php" class="logo">Nice <span class="lite">Admin</span></a>
        <!--logo end-->

        <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">
                <li>
                    <form class="navbar-form">
                        <input class="form-control" placeholder="Search" type="text">
                    </form>
                </li>
            </ul>
            <!--  search form end -->

    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_table"></i>
                        <span>THÔNG TIN</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="admin_KH.php">Khách hàng</a></li>
                        <li><a class="" href="admin.php">Điện thoại</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><b>Thông tin sản phẩm</b></h3>
                </div>
            </div>
            <!-- page start-->


            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h4><b>Điện thoại</b></h4>
                    </header>

                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                        <tr>
                            <th><i class=""></i> Mã máy</th>
                            <th><i class=""></i> Tên máy</th>
                            <th><i class=""></i> Mã hãng</th>
                            <th><i class=""></i> Hình ảnh</th>
                            <th><i class=""></i> Số lượng</th>
                            <th><i class=""></i> Đơn giá</th>
                            <th><i class=""></i> Action</th>
                        </tr>
                        <?php
                        foreach ($result as $item)
                        {
                        ?>
                            <tr>
                                <td><?php echo $item['Mamay']?></td>
                                <td><?php echo $item['Tenmay']?></td>
                                <td><?php echo $item['Mahang']?></td>
                                <td><?php echo $item['Hinhanh']?></td>
                                <td><?php echo $item['Soluong']?></td>
                                <td><?php echo $item['Dongia']?></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#update"><i class="icon_plus_alt2"></i></a>
                                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="#"
                                           onclick="window.location='DAO/delete_smartphone.php?Mamay=<?php echo $item['Mamay'] ?>'"
                                        ><i class="icon_close_alt2"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </section>
            </div>
            </div>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
</section>
<!-- container section end -->
<!-- javascripts -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- nicescroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<!--custome script for all page-->
<script src="js/scripts.js"></script>


</body>

</html>
