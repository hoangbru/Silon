<?php
include "header.php";
?>
<!-- Shop start -->
<div class="shop">

    <div style="margin: 80px 0;" class="m_popular" align="center">
        <?php
        extract($onesp);
        $img = $img_path . $img;
        ?>
        <div class="detail_pro">
            <div class="detail_pro_left">
                <div class="detail_pro_img">
                    <img src="<?=$img?>" alt="">
                </div>
            </div>
            <div class="detail_pro_content">
                <div class="content-pro">
                    <h4><?=$name?></h4>
                    <p>$ <?=$price?></p>
                </div>
                <div class="add_cart">
                    <input type="button" value="-" class="pm">
                    <input type="text" value="1" class="number">
                    <input type="button" value="+" class="pm">
                    <button>Add cart</button>
                </div>
                <hr class="hr-tag">
                <div class="info-pro">
                    <h4>Mô tả sản phẩm</h4>
                    <p><?=$mota?></p>
                </div>
            </div>
        </div>
        <div class="pro-similar">
            <?php
            foreach ($sp_cungloai as $sp_cungloai) :
                extract($sp_cungloai);
                $img = $img_path . $img;
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
            ?>
            <a href="<?= $linksp ?>">
                <div class="pro-similar-item">
                        <img src="<?= $img ?>" alt="">
                    <div class="pro-similar-content">
                        <h4><?= $name ?></h4>
                    </div>
                </div>
            </a>
            <?php endforeach ?>
            <!-- <div class="pro-similar-item">
                <div class="pro-similar-img">
                    <img src="uploads/Tee2.png" alt="">
                </div>
                <div class="pro-similar-content">
                    <h4>Name</h4>
                </div>
            </div>
            <div class="pro-similar-item">
                <div class="pro-similar-img">
                    <img src="uploads/Tee2.png" alt="">
                </div>
                <div class="pro-similar-content">
                    <h4>Name</h4>
                </div>
            </div>
            <div class="pro-similar-item">
                <div class="pro-similar-img">
                    <img src="uploads/Tee2.png" alt="">
                </div>
                <div class="pro-similar-content">
                    <h4>Name</h4>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- Shop end -->
<?php
include "footer.php";
?>