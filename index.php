<?php
session_start();
include "model/pdo.php";
include "model/products.php";
include "global.php";
include "model/categories.php";
include "model/account.php";


$spnew = loadall_pro_home();
$dsdm = loadall_cat();
$dstop8 = loadall_pro_top8();


if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_pro($id);
                extract($onesp);
                $sp_cungloai = load_pro_cungloai($id, $iddm);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_pro($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/shop.php";
            break;
        case 'dangky':

            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $fullName = $_POST['fullName'];
                $email = $_POST['email'];
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $insert_account = insert_account($fullName, $email, $user, $pass);
                $thongbao = "Đăng ký thành công. Đăng nhập để sử dụng chức năng";
                header('Location: index.php?act=dangnhap');
            }
            include "view/register.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    if ($_SESSION['user']['role'] == 1) {
                        header('Location: admin/index.php');
                    } else {
                        header('Location: index.php');
                    }
                } else {
                    $thongbao = "Tài khoản không tồn tại vui lòng kiểm tra HOẶC đăng kí mới";
                }
            }
            include "view/login.php";
            break;
        case 'quenmk':
            if (isset($_POST['gui']) && ($_POST['gui'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
                } else {
                    $thongbao = "Email không tồn tại.";
                }
            }
            include "view/quenmk.php";
            break;
        case 'exit':
            session_unset();
            header('Location: index.php');
            break;

        case 'gioithieu':
            include "view/about.php";
            break;
        case 'lienhe':
            include "view/contact.php";
            break;
        case 'tintuc':
            include "view/news.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
