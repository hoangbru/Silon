<div class="feature" align="center">
    <h1 class="head1">Cập nhật người dùng</h1>
    <div class="col_pro">
        <form action="index.php?act=updateuser" method="post">
            <label for="fullname">
                <input type="text" name="fullname" id="name" value="<?= $fullName ?>" placeholder="Họ và tên">
            </label><br>
            <label for="">
                <input type="text" name="user" id="email" value="<?= $user ?>" placeholder="Tên đăng nhập">
            </label><br>
            <label for="">
                <input type="email" name="email" id="email" value="<?= $email ?>" placeholder="Email">
            </label><br>
            <label for="">
                <input type="password" name="pass" id="email" value="<?= $pass ?>" placeholder="Mật khẩu">
            </label><br>
            <label for="">
                <input type="text" name="address" id="email" value="<?= $address ?>" placeholder="Địa chỉ">
            </label><br>
            <label for="">
                <input type="text" name="tel" id="email" value="<?= $tel ?>" placeholder="Số điện thoại">
            </label><br>
            <select class="form-select" name="role" id="email" data-choices data-choices-search-false>
                <?php foreach ($listrole as $index => $role) : ?>
                    <option name="role" value="<?= $role['id_role'] ?>"><?= $role['name'] ?></option>
                <?php endforeach ?>
            </select><br>
            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
            <input type="submit" name="capnhat" value="Lưu" class="btn-them"></br>
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