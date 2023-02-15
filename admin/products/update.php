<?php
if (is_array($pro)) {
    extract($pro);
}
$imgpath = "../uploads/" . $img;
if (is_file($imgpath)) {
    $hinh = "<img src='" . $imgpath . "' width='100px' height='auto'>";
} else {
    $hinh = "no image";
}

?>
<div class="feature" align="center">
    <h1 class="head1">Cập nhật loại hàng hoá</h1>
    <div class="col_pro">
        <form action="index.php?act=updatepro" method="post" enctype="multipart/form-data">
            <label for="id_category">
                <p style="margin-bottom:0px;">Danh mục</p>
                <select name="iddm" id="img">
                    <option value="0" selected>Tất cả danh mục</option>
                    <?php
                    foreach ($listcat as $danhmuc) {
                        extract($danhmuc);
                        if ($id == $id) echo '<option value="' . $id . '" selected>' . $name . '</option>';
                        else echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </label><br>
            <label for="tensp">
                <p style="margin-bottom:0px;">Tên sản phẩm</p>
                <input type="text" name="tensp" id="email" value="<?= $name ?>" placeholder="Tên sản phẩm">
            </label><br>
            <label for="img">
                <p style="margin-bottom:0px;">Hình ảnh</p>
                <?= $hinh ?><br>
                <input type="file" name="image" id="img" placeholder="Hình ảnh">
            </label><br>
            <label for="price">
                <p style="margin-bottom:0px;">Giá sản phẩm</p>
                <input type="text" name="price" id="email" value="<?= $price ?>" placeholder="Giá">
            </label><br>
            <label for="mota">
                <p style="margin-bottom:0px;">Mô tả</p>
                <textarea name="mota" id="mota" cols="30" rows="10" placeholder="Mô tả sản phẩm"><?= $mota ?></textarea>
            </label><br>
            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $pro['id']; ?>">
            <input type="submit" name="submit" value="Lưu" class="btn-them"></br>
            <input type="reset" value="Nhập lại" class="btn-them">
            <a href="index.php?act=listpro"><input type="button" value="Danh sách" class="btn-them"></a>
            <?php
            if (isset($thongbao) && $thongbao != "") {
                echo '</br>' . $thongbao;
            }
            ?>
        </form>
    </div>
</div>