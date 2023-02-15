<?php
include "header.php"
?>

<!-- banner1 start-->
<section class="banner1" style="background-image: url(assets/images/bg-1.jpg)">
    <div class="container-fluid">
        <div class="banner-content">
            <span class="tagline">cùng chiêm ngưỡng</span>
            <h1>Bộ sưu tập<br>mùa hè</h1>
            <button class="btn-default">Shop now</button>
        </div>
        <div class="ban-img">
            <img src="assets/images/banner1.png" width="100%" height="auto" alt="">
        </div>
    </div>
</section>
<!-- banner1 end -->

<!-- Feature Products start -->
<div style="margin: 50px 0;" class="m_popular" align="center">
    <h1 class="head1">Sản phẩm mới</h1>
    <div class="col_pro">
        <div class="box-pro-popular">
            <?php
            foreach ($spnew as $sp) :
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $images = $img_path . $img;
            ?>
                <div class="pro2">
                    <div class="img_pro">
                        <a href="<?= $linksp ?>"><img src="<?= $images ?>" width="100%" height="auto" alt=""></a>
                    </div>
                    <div class="content_pro">
                        <a href="<?= $linksp ?>">
                            <p><?= $name ?></p>
                        </a>
                        <div class="rating">
                            <a><i class="fa-solid fa-star"></i></a>
                            <a><i class="fa-solid fa-star"></i></a>
                            <a><i class="fa-solid fa-star"></i></a>
                            <a><i class="fa-solid fa-star"></i></a>
                            <a><i class="fa-solid fa-star"></i></a>
                        </div>
                        <div class="price">$<?= $price ?></div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</div>
<!-- Feature Products end -->

<!-- banner2 start-->
<section class="banner2" style="background-color: #e9e1d8;">
    <div class="container-fluid">
        <div class="banner-content">
            <h1>50% OFF</h1>
            <h4>tất cả các sản phẩm</h4>
            <button class="btn-default">Shop now</button>
        </div>
        <div class="ban-img">
            <img src="assets/images/banner2.png" width="100%" height="auto" alt="">
        </div>
    </div>
</section>
<!-- banner2 end -->

<!-- icon box start -->
<div style="margin: 60px 0;" align="center">
    <div class="col_pro">
        <div class="box">
            <img src="assets/images/icons/1.png" alt="">
            <h5>Đảm bảo hoàn tiền</h5>
        </div>
        <div class="box">
            <img src="assets/images/icons/2.png" alt="">
            <h5>Giao hàng miễn phí</h5>
        </div>
        <div class="box">
            <img src="assets/images/icons/3.png" alt="">
            <h5>hỗ trợ 24h/24h</h5>
        </div>
        <div class="box">
            <img src="assets/images/icons/4.png" alt="">
            <h5>Thanh toán an toàn</h5>
        </div>

    </div>

</div>
<!-- icon box end -->

<!-- Trending Products start -->
<div style="margin: 50px 0;" class="m_popular" align="center">
    <h1 class="head1">Sản phẩm thịnh hành</h1>
    <div class="col_pro">
        <div class="box-pro-popular">
            <?php
            foreach ($dstop8 as $sp) :
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $images = $img_path . $img;
            ?>
                <div class="pro2">
                    <div class="img_pro">
                        <a href="<?= $linksp ?>"><img src="<?= $images ?>" width="100%" height="auto" alt=""></a>
                    </div>
                    <div class="content_pro">
                        <a href="<?= $linksp ?>">
                            <p><?= $name ?></p>
                        </a>
                        <div class="rating">
                            <a><i class="fa-solid fa-star"></i></a>
                            <a><i class="fa-solid fa-star"></i></a>
                            <a><i class="fa-solid fa-star"></i></a>
                            <a><i class="fa-solid fa-star"></i></a>
                            <a><i class="fa-solid fa-star"></i></a>
                        </div>
                        <div class="price">$<?= $price ?></div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</div>
<!-- Trending Products end -->

<!-- Silon Journal start -->
<div class="feature" align="center">
    <h1 class="head1">Tạp chí Silon</h1>
    <div class="col_pro">
        <div class="pro">
            <div class="img_pro">
                <a href=""><img src="assets/images/post/post1.jpg" width="100%" height="auto" alt=""></a>
            </div>
            <div class="content_post">
                <div class="time">
                    <a href="">
                        <div style="float: left;margin: 5px;width: 13px;height:6px;background-color:#ff5353;border-radius: 2px;">
                        </div>01/05/2022
                    </a>
                </div>
                <div style="clear: both;"></div>
                <a href="">
                    <h3>2hand là gì? Cùng tìm hiểu chi tiết</h3>
                </a>
                <hr style="color: #e1e1e1;">
                <div class="sub_content">
                    <a href=""><i class="fa-solid fa-cube"></i>Fashion</a>
                    <a style="margin-left: 30px;" href=""><i class="fa-solid fa-comments"></i>25 Bình luận</a>
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>
        <div class="pro">
            <div class="img_pro">
                <a href=""><img src="assets/images/post/post2.jpg" width="100%" height="auto" alt=""></a>
            </div>
            <div class="content_post">
                <div class="time">
                    <a href="">
                        <div style="float: left;margin: 5px;width: 13px;height:6px;background-color:#ff5353;border-radius: 2px;">
                        </div>31/07/2022
                    </a>
                </div>
                <div style="clear: both;"></div>
                <a href="">
                    <h3>Mặc đồ 2hand bảo vệ môi trường ?</h3>
                </a>
                <hr style="color: #e1e1e1;">
                <div class="sub_content">
                    <a href=""><i class="fa-solid fa-cube"></i>Fashion</a>
                    <a style="margin-left: 30px;" href=""><i class="fa-solid fa-comments"></i>17 Bình luận</a>
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>
        <div class="pro">
            <div class="img_pro">
                <a href=""><img src="assets/images/post/post3.jpg" width="100%" height="auto" alt=""></a>
            </div>
            <div class="content_post">
                <div class="time">
                    <a href="">
                        <div style="float: left;margin: 5px;width: 13px;height:6px;background-color:#ff5353;border-radius: 2px;">
                        </div>25/07/2022
                    </a>
                </div>
                <div style="clear: both;"></div>
                <a href="">
                    <h3>10+ shop 2hand uy tín ở Hà Nội</h3>
                </a>
                <hr style="color: #e1e1e1;">
                <div class="sub_content">
                    <a href=""><i class="fa-solid fa-cube"></i>Fashion</a>
                    <a style="margin-left: 30px;" href=""><i class="fa-solid fa-comments"></i>62 Bình luận</a>
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>

</div>
<!-- Silon Journal end -->

<!-- Follow us start -->
<div style="margin: 60px 0;" align="center">
    <h1 class="head1">Theo dõi chúng tôi</h1>
    <div class="col_pro">
        <div class="img_fl">
            <a href=""><img src="assets/images/ig/ig1.jpg" alt="">
                <div class="overlay">
                    <div class="icon_ig">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="img_fl">
            <a href=""><img src="assets/images/ig/ig2.jpg" alt="">
                <div class="overlay">
                    <div class="icon_ig">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="img_fl">
            <a href=""><img src="assets/images/ig/ig3.jpg" alt="">
                <div class="overlay">
                    <div class="icon_ig">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="img_fl">
            <a href=""><img src="assets/images/ig/ig4.jpg" alt="">
                <div class="overlay">
                    <div class="icon_ig">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>

</div>
<!-- Follow us end -->
<?php
include 'footer.php'
?>