<div class="list-cat" align="center">
            <h1 class="head1">Danh sách loại hàng</h1>
            <div class="col-cat">
                <table>
                    <tr>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th>Thao tác</th>
                    </tr>
                    <?php
                        foreach ($listcat as $danhmuc) {
                            extract($danhmuc);
                            $suadanhmuc = "index.php?act=upcat&&id=".$id;
                            $xoadanhmuc = "index.php?act=deletecat&&id=".$id;
                            echo '<tr>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>
                                        <a href="'.$suadanhmuc.'"><input type="button" id="sua" value="Sửa"></a>
                                        <a href="'.$xoadanhmuc.'"><input type="button" id="xoa" value="Xoá"></a>
                                    </td>
                                    </tr>';
                        }
                    ?>
                    
                </table>
            </div>
            <div class="col_cat">
            <a id="add" href="index.php?act=addcat"><button id="xoa">Thêm</button></a>

            </div>
        </div>