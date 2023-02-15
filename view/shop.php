<?php
include "header.php";
?>
<!-- Shop start -->
<div class="shop">
    <div class="dropdown">
        <p><a href="index.php?act=sanpham">Shop<i class="fas fa-chevron-down"></i></a></p>
        <div class="dropdown-content">
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkcat = "index.php?act=sanpham&iddm=" . $id;
                echo '<a href="' . $linkcat . '">' . $name . '</a>';
            }
            ?>
        </div>
    </div>

    <div style="margin: 50px 0;" class="m_popular" align="center">
        <h1 class="head1">Products</h1>
        <div class="col_pro">
            <div class="box-pro">
            <?php
            foreach ($dssp as $sp) :
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $images = $img_path . $img;
            ?>
                <div class="pro2">
                    <div class="img_pro">
                        <a href="<?= $linksp ?>"><img src="<?= $images ?>" alt=""></a>
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
            <?php
            endforeach
            ?>
            </div>
            
        </div>

    </div>
</div>
<!-- Shop end -->
<?php
include "footer.php";
?>