<?php
require "DAO/connect.php";
//connect_db();
$result = get_all_user();

//// Lấy thông tin hiển thị lên để người dùng sửa
//$MaKH = isset($_GET['MaKH']) ? (int)$_GET['MaKH'] : '';
//if ($MaKH){
//    $user = getUserByID($MaKH);
//}
//
//// Nếu không có dữ liệu tức không tìm thấy sinh viên cần sửa
//if (!$user){
//    header("location: admin_KH.php");
//}
//
//// Nếu người dùng submit form
//if (!empty($_POST['edit-user']))
//{
//    // Lay data
//        $MaKH = $_POST['MaKH'];
//        $Tenkhachhang = $_POST['Tenkhachhang'];
//        $Taikhoan = $_POST['Taikhoan'];
//        $Matkhau = $_POST['Matkhau'];
//        $Diachi = $_POST['Diachi'];
//        $SDT = $_POST['SDT'];
//        $Level = $_POST['Level'];
//       // echo $name."_".$email;
//    EditUser($MaKH,$Tenkhachhang,$Taikhoan,$Matkhau,$Diachi,$SDT,$Level);
//        // Trở về trang danh sách
//       header("location: admin_KH.php");
//
//}
//
//disconnect_db();

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

    <title>Admin - Khách hàng</title>

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
                    <h3 class="page-header"><b>Thông tin khách hàng</b></h3>
                </div>
            </div>
            <!-- page start-->


            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h4><b>Khách hàng</b></h4>
                    </header>

                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                        <tr>
                            <th><i class=""></i> Mã Khách hàng</th>
                            <th><i class=""></i> Tên Khách hàng</th>
                            <th><i class=""></i> Tài khoản</th>
                            <th><i class=""></i> Mật khẩu</th>
                            <th><i class=""></i> Địa chỉ</th>
                            <th><i class=""></i> SDT</th>
                            <th><i class=""></i> Level</th>
                            <th><i class=""></i> Action</th>
                        </tr>
                        <?php
                        foreach ($result as $item) {
                            ?>
                            <tr>
                                <td><?php echo $item['MaKH'] ?></td>
                                <td><?php echo $item['TenKH'] ?></td>
                                <td><?php echo $item['Taikhoan'] ?></td>
                                <td><?php echo $item['Matkhau'] ?></td>
                                <td><?php echo $item['Diachi'] ?></td>
                                <td><?php echo $item['SDT'] ?></td>
                                <td><?php echo $item['Level'] ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn-group  btn btn-success" data-toggle="modal" data-target="#myModal-update">
                                            <a  href="#">
<!--                                                onclick="window.location='DAO/delete_user.php?MaKH=-->
                                            <i class="icon_check_alt2" style="color: white;"></i>
                                            </a></button>
                                        <button type="button" class="btn btn-danger">
                                            <a  href="#"
                                               onclick="window.location='DAO/delete_user.php?MaKH=<?php echo $item['MaKH'] ?>'"
                                            >
                                            <i class="icon_close_alt2" style="color: white;"></i>
                                            </a></button>
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
<!-- Them nguoi dung-->
<!-- Sua thong tin nguoi dung-->
<div id="myModal-update"  class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h3 class="modal-title" align="center">SỬA THÔNG TIN </h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="post" action="admin_KH.php?MaKH=<?php echo $user['MaKH']?>">
                    <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Họ và tên:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputName" value="<?php echo $user['Tenkhachhang']?>" required >
                            <div id="errorfullname"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAccount2" class="col-sm-3 control-label">Tài khoản:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputUser2" value="<?php echo $user['Taikhoan']?>" required >
                            <div id="errorAccount1"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword2" class="col-sm-3 control-label">Mật khẩu:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="inputPassword2" value="<?php echo $user['Matkhau']?>" required >
                            <div id="errorPassword1"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Địa chỉ:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputAddress" value="<?php echo $user['Diachi']?>" required >
                            <div id="errorAddress"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Điện thoại :</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="inputPhone" value="<?php echo $user['SDT']?>" required >
                            <div id="errorAddress"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputLevel" class="col-sm-3 control-label">Level:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputLevel" value="<?php echo $user['Level']?>" required >
                            <div id="errorLevel"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div align="center">
                            <button id="btn-register" type="submit" name="Edit-user" class="btn btn-success">Hoàn tất</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>
