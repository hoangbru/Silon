<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silon - Login</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/index.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7e155ef984.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container_login">
        <div class="logo">
            <a href="index.php"><img src="assets/images/logo.png" alt=""></a>
        </div>
        <div class="bodylogin">
            <section class="banner1" style="background-color: #ff5353;">
                <div class="container-fluid">
                    <div class="form_login">
                        <form action="index.php?act=dangnhap" method="post">
                            <h3 style="margin-top: 0;">Đăng nhập</h3>
                            <div class="form_group">
                                <label for="username"></label>
                                <input type="text" name="user" id="username" placeholder="Tên đăng nhập">
                            </div>
                            <div class="form_group">
                                <label for="password"></label>
                                <input type="password" name="pass" id="password" placeholder="Mật khẩu">
                            </div>
                            <input type="submit" id="submit" name="dangnhap" value="Đăng nhập">
                            <p><a href="">Quên mật khẩu</a></p>
                            <p>Bạn chưa có tài khoản? <a href="index.php?act=dangky">Đăng kí</a>&nbsp;ngay</p>
                        </form>
                    </div>
                    <div class="ban-img">
                        <img src="assets/images/banner2.png" alt="">
                    </div>
                </div>
            </section>
        </div>
        <!-- Footer start -->
        <footer>
            <div class="fot" align="center">
                <div class="fot_col">
                    <div class="cont" style="margin-left: 20px;">
                        <h4 class="widget-title">Silon</h4>
                        <div style="margin-top: 20px;">
                            <p><a href="">Who we are</a></p>
                            <p><a href="">Work with us</a></p>
                            <p><a href="">Become a supplier</a></p>
                            <p><a href="">Investor relations</a></p>
                            <p><a href="">Our devices</a></p>
                            <p><a href="">Affiliate program</a></p>
                        </div>
                    </div>
                    <div class="cont" style="margin-left: 85px;">
                        <h4 class="widget-title">Useful Links</h4>
                        <div style="margin-top: 20px;">
                            <p><a href="">Who we are</a></p>
                            <p><a href="">Work with us</a></p>
                            <p><a href="">Become a supplier</a></p>
                            <p><a href="">Investor relations</a></p>
                            <p><a href="">Our devices</a></p>
                            <p><a href="">Affiliate program</a></p>
                        </div>
                    </div>
                    <div class="cont" style="margin-left: 85px;">
                        <h4 class="widget-title">Online Shopping</h4>
                        <div style="margin-top: 20px;">
                            <p><a href="">Who we are</a></p>
                            <p><a href="">Work with us</a></p>
                            <p><a href="">Become a supplier</a></p>
                            <p><a href="">Investor relations</a></p>
                            <p><a href="">Our devices</a></p>
                            <p><a href="">Affiliate program</a></p>
                        </div>
                    </div>
                    <div class="cont" style="margin-left: 85px;width: 250px;">
                        <div style="margin-top: 20px;">
                            <h4 class="widget-title">app on mobile</h4>
                            <div class="btn_app">
                                <div id="btn1">
                                    <a href="">
                                        <i class="fab fa-android"></i>
                                        <div class="text">
                                            <p>get it on</p>
                                            <p id="a">Google play</p>
                                        </div>
                                    </a>
                                </div>
                                <div id="btn2">
                                    <a href="">
                                        <i class="fab fa-apple"></i>
                                        <div class="text">
                                            <p>get it on</p>
                                            <p id="b">App Store</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="social_network">
                                <h4 class="widget-title">theo dõi ngay</h4>
                                <div class="icons_col">
                                    <div class="sn_icon"><a href=""><i class="fab fa-facebook-f"></i></a></div>
                                    <div class="sn_icon"><a href=""><i class="fab fa-twitter"></i></a></div>
                                    <div class="sn_icon"><a href=""><i class="fab fa-pinterest-p"></i></a></div>
                                    <div class="sn_icon"><a href=""><i class="fab fa-instagram"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear: both;"></div>
            <div>
                <p class="copyright">Copyright by 2022</p>
            </div>
        </footer>
        <!-- Footer end -->
    </div>
</body>

</html>