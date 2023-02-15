<div class="list-cat" align="center">
    <h1 class="head1">Danh sách sản phẩm</h1>
    <div class="col-cat">
        <form style="margin-bottom: 20px;" action="index.php?act=listpro" method="post">
            <input type="text" name="keyword" class="search-category" placeholder="Nhập tên sản phẩm">
            <select name="iddm" class="search-category">
                <option value="0" selected>Tất cả danh mục</option>
                <?php
                foreach ($listcat as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="' . $id . '">' . $name . '</option>';
                }
                ?>
            </select>
            <input type="submit" name="search" value="Tìm kiếm" id="search-category" class="btn-them">
        </form>
        <table>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Lượt xem</th>
                <th>Hình ảnh</th>
                <th>Thao tác</th>
            </tr>
            <?php
            foreach ($listpro as $sanpham) {
                extract($sanpham);
                $suasanpham = "index.php?act=uppro&&id=" . $id;
                $xoasanpham = "index.php?act=deletepro&&id=" . $id;
                $imgpath = "../uploads/" . $img;
                if (is_file($imgpath)) {
                    $hinh = "<img src='" . $imgpath . "' width='100px' height='auto'>";
                } else {
                    $hinh = "no image";
                }
                echo '<tr>
                                    <td>' . $id . '</td>
                                    <td>' . $name . '</td>
                                    <td>$ ' . $price . '</td>
                                    <td>' . $view . '</td>
                                    <td>' . $hinh . '</td>
                                    <td>
                                        <a href="' . $suasanpham . '"><input type="button" id="sua" value="Sửa"></a>
                                        <a href="' . $xoasanpham . '"><input type="button" id="xoa" value="Xoá"></a>
                                    </td>
                                    </tr>';
            }
            ?>

        </table>
    </div>
    <div class="col_cat">
    <a id="add" href="index.php?act=addpro"><button id="xoa">Thêm</button></a>

    </div>
</div>