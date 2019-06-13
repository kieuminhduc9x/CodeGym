<?php
session_start();
require "DAO/connect.php";
$resultIP = Iphone();
$resultXMI = Xiaomi();
$resultHOT = SmartphoneHot();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Public/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="Public/CSS/index.css">
    <script src="Public/bootstrap-3.3.7-dist/js/jquery-3.2.1.js"></script>
    <script src="Public/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script src="Public/JS.js"></script>
    <title>Smartphone</title>
</head>

<body>
<!--Header-->
<div class="row navigation">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <h1><img src="images/logo.png" style="margin-top: -75px; margin-left: 100px;" alt=""></h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse"  id="bs-example-navbar-collapse-1">
                <form class="navbar-form navbar-left" role="search" action="" method="">
                    <div class="form-group">
                        <input type="text" class="form-control search-book" placeholder="Tìm kiếm sản phẩm">
                    </div>
                    <button type="submit" class="btn btn-danger">Tìm kiếm</button>
                </form>
                <ul class="nav navbar-nav">
                    <li style="margin-top: 10px; margin-right: 20px;"><button type="button" class="btn-group  btn btn-danger" data-toggle="modal" data-target="#myModal-login">Đăng nhập</button></li>
                    <li style="margin-top: 10px; margin-right: 20px;"><button type="button" class="btn-group  btn btn-success" data-toggle="modal" data-target="#myModal-register">Đăng ký</button></li>
                    <li><a href="#" style="color: white">
                            Liên hệ
                        </a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<!--body-->
<div class="container bodyshop" style=" height: auto;">
    <!--Carousell-->
    <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/slide1.png" alt="Los Angeles">
                </div>

                <div class="item">
                    <img src="images/slide2.png" alt="Chicago">
                </div>

                <div class="item">
                    <img src="images/slide3.png" alt="New York">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--Sản Phẩm Thịnh Hành-->
    <div class="hot-products">
        <h2 class="title"><b>Sản Phẩm Thịnh Hành</b></h2>
        <div class="row">
            <?php
                foreach ($resultHOT as $itemHOT) {
                    ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="products">
                            <div class="offer">- %15</div>
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="<?php echo $itemHOT['Hinhanh']?>" alt="Product Name">
                                </a>
                            </div>
                            <div class="productname"><?php echo $itemHOT['Tenmay']?></div>
                            <h4 class="price"><?php echo $itemHOT['Dongia']?>đ</h4>
                            <div class="button_group">
                                <button class="btn btn-warning hover" type="button">Add To Cart</button>
                                <button class="btn btn-danger" type="button">
                                    <i class="glyphicon glyphicon-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
            <div class="col-md-3 col-sm-6">
                <div class="products">
                    <div class="offer">- %25</div>
                    <div class="thumbnail">
                        <a href="#">
                            <img src="images/redmi-k20-pro-small.jpg" alt="Product Name">
                        </a>
                    </div>
                    <div class="productname">redmi K20 pro</div>
                    <h4 class="price">11.850.000 đ</h4>
                    <div class="button_group">
                        <button class="btn btn-warning hover" type="button">Add To Cart</button>
                        <button class="btn btn-danger" type="button">
                            <i class="glyphicon glyphicon-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="products">
                    <div class="offer">- %20</div>
                    <div class="thumbnail">
                        <a href="#">
                            <img src="images/samsung-galaxy-a8s-black-11111-small.jpg" alt="Product Name">
                        </a>
                    </div>
                    <div class="productname">Samsung Galaxy A8s</div>
                    <h4 class="price">8.750.000 đ</h4>
                    <div class="button_group">
                        <button class="btn btn-warning hover" type="button">Add To Cart</button>
                        <button class="btn btn-danger" type="button">
                            <i class="glyphicon glyphicon-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="products">
                    <div class="offer">- %13</div>
                    <div class="thumbnail">
                        <a href="#">
                            <img src="images/xiaomi-black-shark-2-blackkk-small.jpg" alt="Product Name">
                        </a>
                    </div>
                    <div class="productname">Xiaomi Black Shark 2</div>
                    <h4 class="price">12.500.000 đ</h4>
                    <div class="button_group">
                        <button class="btn btn-warning hover" type="button">Add To Cart</button>
                        <button class="btn btn-danger" type="button">
                            <i class="glyphicon glyphicon-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="products">
                    <div class="offer">- %13</div>
                    <div class="thumbnail">
                        <a href="#">
                            <img src="images/samsung/samsung-galaxy-s10-plus-black.jpg" alt="Product Name">
                        </a>
                    </div>
                    <div class="productname">Samsung S10 Plus</div>
                    <h4 class="price">19.750.000 đ</h4>
                    <div class="button_group">
                        <button class="btn btn-warning hover" type="button">Add To Cart</button>
                        <button class="btn btn-danger" type="button">
                            <i class="glyphicon glyphicon-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="products">
                    <div class="offer">- %13</div>
                    <div class="thumbnail">
                        <a href="#">
                            <img src="images/xiaomi/xiaomi-mi-9-se-2.jpg" alt="Product Name">
                        </a>
                    </div>
                    <div class="productname">Xiaomi Mi 9 SE</div>
                    <h4 class="price">11.650.000 đ</h4>
                    <div class="button_group">
                        <button class="btn btn-warning hover" type="button">Add To Cart</button>
                        <button class="btn btn-danger" type="button">
                            <i class="glyphicon glyphicon-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="products">
                    <div class="offer">- %13</div>
                    <div class="thumbnail">
                        <a href="#">
                            <img src="images/iphone/iphone%20XR.jpg" alt="Product Name">
                        </a>
                    </div>
                    <div class="productname">Iphone XR</div>
                    <h4 class="price">17.000.000 đ</h4>
                    <div class="button_group">
                        <button class="btn btn-warning hover" type="button">Add To Cart</button>
                        <button class="btn btn-danger" type="button">
                            <i class="glyphicon glyphicon-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="products">
                    <div class="offer">- %13</div>
                    <div class="thumbnail">
                        <a href="#">
                            <img src="images/samsung/Samsung-Galaxy-Note-9-Xách-tay.jpg" alt="Product Name">
                        </a>
                    </div>
                    <div class="productname">Samsung note 9 </div>
                    <h4 class="price">18.490.000  đ</h4>
                    <div class="button_group">
                        <button class="btn btn-warning hover" type="button">Add To Cart</button>
                        <button class="btn btn-danger" type="button">
                            <i class="glyphicon glyphicon-heart"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
<!-- Iphone-->
    <div class="hot-products">
        <h2 class="title"><b>Iphone : </b></h2>
        <div class="row">
            <?php
                foreach ($resultIP as $itemIP){
            ?>
            <div class="col-md-3 col-sm-6">
                <div class="products">
                    <div class="offer">- %13</div>
                    <div class="thumbnail">
                        <a href="#">
                            <img src="<?php echo $itemIP['Hinhanh']?>" alt="Product Name">
                        </a>
                    </div>
                    <div class="productname"><?php echo $itemIP['Tenmay'];?></div>
                    <h4 class="price"><?php echo $itemIP['Dongia']?></h4>
                    <div class="button_group">
                        <button class="btn btn-warning hover" type="button">Add To Cart</button>
                        <button class="btn btn-danger" type="button">
                            <i class="glyphicon glyphicon-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
<!--    Xiaomi-->
    <div class="hot-products">
        <h2 class="title"><b>Xiaomi : </b></h2>
        <div class="row">
            <?php
            foreach ($resultXMI as $itemXMI){
            ?>
            <div class="col-md-3 col-sm-6">
                <div class="products">
                    <div class="offer">- %21</div>
                    <div class="thumbnail">
                        <a href="#">
                            <img src="<?php echo $itemXMI['Hinhanh']?>" alt="Product Name">
                        </a>
                    </div>
                    <div class="productname"><?php echo $itemXMI['Tenmay']?></div>
                    <h4 class="price"><?php echo $itemXMI['Dongia']?>đ</h4>
                    <div class="button_group">
                        <button class="btn btn-warning hover" type="button">Add To Cart</button>
                        <button class="btn btn-danger" type="button">
                            <i class="glyphicon glyphicon-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
                <?php
            }
            ?>

        </div>
    </div>

</div>
<!-- footer -->
<div class="footer" style="height: auto;">
    <div class="footer-info">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-logo">
                        <a href="#">
                            <img src="images/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4 class="title">
                        <span style="vertical-align: inherit;">Thông tin</span>
                        <span style="vertical-align: inherit;"> liên lạc</span>
                    </h4>
                    <p>
                        <span style="vertical-align: inherit; color: #0b0b0b;">Số 08, Nguyễn Trãi, Hà Nội, Việt Nam</span>
                    </p>
                    <p>
                        <span style="vertical-align: inherit;color: #0b0b0b;">Gọi cho chúng tôi: (084) 1900 1008</span>
                    </p>
                    <p>
                        <span style="vertical-align: inherit;color: #0b0b0b;">Email: michael@leebros.us</span>
                    </p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4 class="title"><font style="vertical-align: inherit;"><strong><font style="vertical-align: inherit;">Hỗ trợ</font></strong><strong><font style="vertical-align: inherit;"> khách hàng</font></strong></h4>
                    <ul class="support">
                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;color: #0b0b0b;">Câu hỏi thường gặp</font></font></a></li>
                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;color: #0b0b0b;">Phương thức thanh toán</font></font></a></li>
                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;color: #0b0b0b;">Mẹo đặt phòng</font></font></a></li>
                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;color: #0b0b0b;">Thông tin</font></font></a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="title" >
                        <span style="vertical-align: inherit;">Nhận bản </span>
                        <span style="vertical-align: inherit;">tin</span>
                        <span style="vertical-align: inherit;"> của chúng tôi</span>
                    </h4>
                    <p>
                        <span style="vertical-align: inherit;color: black;">Đăng ký ngay để nhận tin sớm nhất</span></p>
                    <form class="newsletter">
                        <input type="text" name="" placeholder="Type your email....">
                        <span style="vertical-align: inherit;"><input type="submit" value="Đăng ký" class="button"></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        <span style="vertical-align: inherit;">Bản quyền © 2012. Được thiết kế bởi </span>
                        <a href="#">
                            <span style="vertical-align: inherit;">Media_LTPs2</span>
                        </a>
                        <span style="vertical-align: inherit;"> . </span>
                        <span style="vertical-align: inherit;">Tất cả các quyền</span>
                    </p>
                </div>
                <div class="col-md-6">
                    <ul class="social-icon">
                        <li><a href="#" class="google">
                                <i class="fab fa-google-plus-square fa-3x"></i>
                            </a></li>
                        <li><a href="#" class="facebook">
                                <i class="fab fa-facebook fa-3x"></i>
                            </a></li>
                        <li><a href="#" class="twitter">
                                <i class="fab fa-twitter-square fa-3x"></i>
                            </a></li>
                        <li><a href="#" class="youtube">
                                <i class="fab fa-youtube-square fa-3x"></i>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal - Login -->
<div id="myModal-login"  class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h3 class="modal-title" align="center">ĐĂNG NHẬP</h3>
            </div>
            <div class="modal-body">
                <form action="#" method="post" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputAccount1" class="col-sm-3 control-label">Tài khoản:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="user" id="InputUser" placeholder="Nhập tài khoản...">
                            <div id="errorAccount"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-sm-3 control-label">Mật khẩu:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="pass" id="InputPassword" placeholder="Nhập mật khẩu...">
                            <div id="errorPassword"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div align="center">
                            <button id="btn-login-click" name="Login" type="button" class="btn btn-primary">Đăng Nhập</button>
                            <span id="resultLogin"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <p>Bạn chưa có tài khoản? <a href="#" data-toggle="modal" data-target="#myModal-register" data-dismiss="modal">Đăng ký tại đây</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- mymodal-regester -->
<div id="myModal-register"  class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h3 class="modal-title" align="center">ĐĂNG KÝ</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="post" action="">
                    <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Họ và tên:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputName" placeholder="Nhập họ và tên...">
                            <div id="errorfullname"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAccount2" class="col-sm-3 control-label">Tài khoản:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputUser2" placeholder="Nhập tài khoản...">
                            <div id="errorAccount1"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword2" class="col-sm-3 control-label">Mật khẩu:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="inputPassword2" placeholder="Nhập mật khẩu...">
                            <div id="errorPassword1"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPhone" class="col-sm-3 control-label">Điện thoại:</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="inputPhone" placeholder="Nhập SĐT...">
                            <div id="errorPhone"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress" class="col-sm-3 control-label">Địa chỉ :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputAddress" placeholder="Nhập địa chỉ...">
                            <div id="errorAddress"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputLevel" class="col-sm-3 control-label">Level:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputLevel" placeholder="Nhập địa chỉ..." value="2">
                            <div id="errorLevel"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div align="center">
                            <button id="btn-register" type="button" class="btn btn-success">Đăng Ký</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    alert('Chào mừng bạn đến với MobileCity');
    $('#btn-login-click').click(function() {
        //khai báo các biến
        var taikhoan = $("#InputUser").val(); //lấy giá trị input tài khoản
        var matkhau = $("#InputPassword").val(); //lấy giá trị input mật khẩu

        //kiem tra xem da nhap tai khoan chua
        if (taikhoan == '') {
            alert('Vui lòng nhập tài khoản');
            return false;
        }

        //kiem tra xem da nhap mat khau chua
        else if (matkhau == '') {
            alert('Vui lòng nhập mật khẩu');
            return false;
        }
        else if(taikhoan == 'admin' && matkhau == 'admin' ) {
            window.location = "admin_KH.php";
            alert('Đăng nhập vào trang Admin thành công !!!');
        }
        else{
            $.ajax({
                url : 'DAO/process_dangnhap.php',
                type : 'POST',
                data : {
                    taikhoan : taikhoan,
                    matkhau : matkhau
                },
                success : function (data) {
                    alert('Đăng nhập thành công !!!');
                    window.location.replace('index.php');

                },
                error :  function (err) {
                    alert(err);
                }
            })

        }
    });
    $('#btn-register').click(function () {
        //khai báo biến và lấy giá trị từ ô input
        var tenkhachhang = $('#inputName').val();
        var taikhoan = $('#inputUser2').val();
        var matkhau = $('#inputPassword2').val();
        var diachi = $('#inputAddress').val();
        var sdt = $('#inputPhone').val();
        var level = $('#inputLevel').val();

        //kiểm tra thông tin nhập có rỗng hay không nếu rỗng thi khong thực hiện ajax
        if(tenkhachhang !='' && taikhoan !='' && matkhau!='' && diachi !='' && sdt !='' && level !=''){
            $.ajax({
                url : 'DAO/process_dangki.php',
                type : 'POST',
                data : {
                    tenkhachhang : tenkhachhang,
                    taikhoan : taikhoan,
                    matkhau : matkhau,
                    diachi : diachi,
                    sdt : sdt ,
                    level : level,
                },
                success : function (data) {
                    alert('Đăng kí thành công !!!');
                    window.location.replace('index.php');
                },
                error :  function (err) {
                    alert(err);
                }
            })
        }
    }) ;
</script>
</html>
