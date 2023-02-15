<div class="list-cat" align="center">
    <h1 class="head1">Danh sách người dùng</h1>
    <div class="col-cat">
        <table>
            <tr>
                <th>Mã người dùng</th>
                <th>Tên đăng nhập</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Quyền</th>
                <th>Thao tác</th>
            </tr>
            <?php
            foreach ($listtaikhoan as $taikhoan) {
                extract($taikhoan);
                $getRole = getOneRole($role);
                extract($getRole);
                $updatetk = "index.php?act=getuser&id=" . $id;
                $deletetk = "index.php?act=deletetk&id=" . $id;
                echo  '<tr>
                                <td>' . $id . '</td>
                                <td>' . $user . '</td>
                                <td>' . $email . '</td>
                                <td>' . $address . '</td>
                                <td>' . $tel . '</td>
                                <td>'. $getRole['name'].'</td>
                                <td>
                                <a href= "' . $updatetk . '"><input type="button" name="" id="sua" value="Sửa"></a> 
                                <a href="' . $deletetk . '"><input type="button" name="" id="xoa" value="Xóa"></a>
                                </td>
                            </tr>';
            }
            ?>

        </table>
    </div>
    
</div>