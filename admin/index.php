<?php
include "../model/pdo.php";
include "../model/categories.php";
include "../model/products.php";
include "../model/account.php";
include "../model/binhluan.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'addcat':
            //Check nguoi dung co click vo nut submit ko
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $tenloai = $_POST['tenloai'];
                insert_cat($tenloai);
                $thongbao = "Add Succesfull";
            }
            include "categories/add.php";
            break;
        case 'listcat':
            $listcat = loadall_cat();
            include "categories/list.php";
            break;
        case 'deletecat':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_cat($_GET['id']);
            }

            $listcat = loadall_cat();
            include "categories/list.php";
            break;
        case 'upcat':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $cat = loadone_cat($_GET['id']);
            }
            include "categories/update.php";
            break;
        case 'updatecat':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_cat($id, $tenloai);
                $thongbao = "Update Succesfully";
            }
            $listcat = loadall_cat();
            include "categories/list.php";
            break;
        case 'addpro':
            //Check nguoi dung co click vo nut submit ko
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $image = $_FILES['image']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);

                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_pro($tensp, $price, $image, $mota, $iddm);
                $thongbao = "Add Succesfull";
            }
            $listcat = loadall_cat();
            include "products/add.php";
            break;
        case 'listpro':
            if (isset($_POST['search']) && ($_POST['search'])) {
                $keyword = $_POST['keyword'];
                $iddm = $_POST['iddm'];
            } else {
                $keyword = "";
                $iddm = 0;
            }
            $listcat = loadall_cat();
            $listpro = loadall_pro($keyword, $iddm);
            include "products/list.php";
            break;
        case 'deletepro':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_pro($_GET['id']);
            }

            $listpro = loadall_pro();
            include "products/list.php";
            break;
        case 'uppro':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $pro = loadone_pro($_GET['id']);
            }
            $listcat = loadall_cat();
            include "products/update.php";
            break;
        case 'updatepro':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $image = $_FILES['image']['name'];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);

                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

                update_pro($id, $iddm, $tensp, $price, $mota, $image);
                $thongbao = "Update Succesfull";
            }
            $listcat = loadall_cat();
            $listpro = loadall_pro();
            include "products/list.php";
            break;
        case 'listuser':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'getuser':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $oneUser = loadOne_user($_GET['id']);
                if (is_array($oneUser)) {
                    extract($oneUser);
                }
            }
            $listrole = getAllRole();
            include "./taikhoan/update.php";
            break;
        case 'updateuser':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST["id"];
                $fullname = $_POST["fullname"];
                $user = $_POST["user"];
                $pass = $_POST["pass"];
                $email = $_POST["email"];
                $address = $_POST["address"];
                $tel = $_POST["tel"];
                $role = $_POST["role"];
                update_taikhoan($id,$fullname,$user,$pass,$email,$address,$tel,$role);

            }
            $listrole = getAllRole();
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'deletetk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'comment':
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'deletebl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;



        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
