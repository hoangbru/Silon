<div class="feature" align="center">
    <h1 class="head1">Thêm mới loại hàng hoá</h1>
    <div class="col_pro">
        <form action="index.php?act=addcat" method="post">
            <label for="tenloai">
                <input type="text" name="tenloai" id="email" placeholder="Tên loại">
            </label><br>
            <input type="submit" name="submit" value="Lưu" class="btn-them"></br>
            <input type="reset" value="Nhập lại" class="btn-them">
            <a href="index.php?act=listcat"><input type="button" value="Danh sách" class="btn-them"></a>
            <?php
            if (isset($thongbao) && $thongbao != "") {
                echo '</br>'.$thongbao;
            }
            ?>
        </form>
    </div>
</div>

