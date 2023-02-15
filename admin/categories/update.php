<?php
if (is_array($cat)) {
    extract($cat);
}
?>
<div class="feature" align="center">
    <h1 class="head1">Cập nhật loại hàng hoá</h1>
    <div class="col_pro">
        <form action="index.php?act=updatecat" method="post">
            <label for="maloai">
                <input type="text" name="maloai" id="name" value="<?php if (isset($id) && ($id != "")) echo $id; ?>" disabled placeholder="Mã loại">
            </label><br>
            <label for="tenloai">
                <input type="text" name="tenloai" id="email" value="<?php if (isset($name) && ($name != "")) echo $name; ?>" placeholder="Tên loại">
            </label><br>
            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
            <input type="submit" name="submit" value="Lưu" class="btn-them"></br>
            <input type="reset" value="Nhập lại" class="btn-them">
            <a href="index.php?act=listcat"><input type="button" value="Danh sách" class="btn-them"></a>
            <?php
            if (isset($thongbao) && $thongbao != "") {
                echo '</br>' . $thongbao;
            }
            ?>
        </form>
    </div>
</div>