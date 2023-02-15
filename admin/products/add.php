<div class="feature" align="center">
    <h1 class="head1">Thêm mới sản phẩm</h1>
    <div class="col_pro">
        <form action="index.php?act=addpro" method="post" enctype="multipart/form-data">
            <label for="id_category">
                <select name="iddm" id="img">
                <option value="0" selected>Chọn danh mục</option>
                    <?php
                        foreach($listcat as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
                </select>
            </label><br>
            <label for="tensp">
                <input type="text" name="tensp" id="email" placeholder="Tên sản phẩm">
            </label><br>
            <label for="img">
                <input type="file" name="image" id="img" placeholder="Hình ảnh">
            </label><br>
            <label for="price">
                <input type="text" name="price" id="email" placeholder="Giá">
            </label><br>
            <label for="mota">
                <textarea name="mota" id="mota" cols="30" rows="10" placeholder="Mô tả sản phẩm"></textarea>
            </label><br>
            <input type="submit" name="submit" value="Lưu" class="btn-them"></br>
            <input type="reset" value="Nhập lại" class="btn-them">
            <a href="index.php?act=listpro"><input type="button" value="Danh sách" class="btn-them"></a>
            <?php
            if (isset($thongbao) && $thongbao != "") {
                echo '</br>'.$thongbao;
            }
            ?>
        </form>
    </div>
</div>