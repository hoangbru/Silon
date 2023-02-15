<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silon</title>
    <link rel="shortcut icon" type="image/png" href="assets/images/silon-logo.png" />
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css?v=1">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7e155ef984.js" crossorigin="anonymous"></script>
    
</head>

<body>
    <div class="container">
        <!-- Header start -->
        <header>
            <div class="phone">
                <span>PHONE: (+84) 33 941 0975</span>
                <span style="margin: 20px;border-left: 1px solid #bab7b6;padding-left: 8px;">EMAIL:
                    silonvn@gmail.com</span>
            </div>
            <div class="language">
            <?php
                if (isset($_SESSION['user']) ) {
                    extract($_SESSION['user']);
                ?>
                    <a style="margin: 0 5px;padding:0 5px 0 0;border-right:1px solid #000;"><?= $user ?></a>
                    <a class="log" href="index.php?act=exit">Đăng xuất</a>
                <?php
                }
                else{
                    echo '<a class="btn-danger" href="index.php?act=dangnhap">Đăng nhập</a>';
                }
                ?>
            </div>
        </header>
        <!-- Header end -->

        <!-- navbar start-->
        <nav>
            <div class="logo">
                <a href="index.php"><img src="assets/images/logo.png" alt=""></a>
            </div>
            <div>
                <ul class="menu">
                    <li><a href="index.php">trang chủ</a></li>
                    <li><a href="index.php?act=gioithieu">về chúng tôi</a></li>
                    <li><a href="index.php?act=sanpham">shop</a></li>
                    <li><a href="index.php?act=tintuc">news</a></li>
                    <li><a href="index.php?act=lienhe">liên hệ</a></li>
                </ul>
            </div>
            <div class="search">
                <a href=""><i id="1" class="fas fa-search"></i></a>
                <a href=""><i id="2" class="fas fa-shopping-cart"></i></a>
                <a href=""><i id="3" class="fas fa-heart"></i></a>
            </div>
        </nav>
        <!-- navbar end -->