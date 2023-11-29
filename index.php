<?php
session_start();
ob_start();

include("model/pdo.php");
include("model/sanpham.php");
include("model/taikhoan.php");
include("model/danhmuc.php");
include("model/binhluan.php");
include("model/cart.php");
$listdm = loadAll_danhmuc();
$spnew = loadAll_sanpham_home();
$sptop5 = loaddAll_sanpham_top5();
$spdanhmuc = loaddAll_sanpham_danhmuc_laptop();
$spdt = loaddAll_sanpham_danhmuc_dienthoai();
$lx = loadAll_sanpham_luotxem();
$lb = loadAll_sanpham_luotban();

include("view/header.php");
if (!isset($_SESSION['mycart']))
    $_SESSION['mycart'] = [];

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "shop":
            include("view/viewshop/homeshop.php");
            break;

            // case "timkiem":
            //     if(isset($_GET['timkiem']) && ($_GET['timkiem'])){
            //         $lk_danhmuc=$_GET['lk_danhmuc'];
            //         $tim=$_GET['tim'];
            //         $listtk=find_sanpham($lk_danhmuc, $tim);
            //     }
            //     include("view/viewshop/shoptk.php");
            // break;

        case "viewspdm":
            if (isset($_GET['id']) && ($_GET['id'])) {
                $listspdm = loadAll_sanpham_danhmuc($_GET['id']);
            }
            include("view/viewshop/danhmucshop.php");
            break;

        case "chitietsanpham":
            if (isset($_GET['id']) && ($_GET['id'])) {
                $listspct = viewOne_sanpham_chitiet($_GET['id']);
                $listimg = viewOne_sanpham_img($_GET['id']);
                $listbinhluansp = loadAll_binhluan_sanpham($_GET['id']);
                $listspdm = loadAll_sanpham_danhmuc($_GET['id']);
            }
            if (isset($_GET['lk_danhmuc']) && ($_GET['lk_danhmuc'])) {
                $listspdm = loadAll_sanpham_danhmuc($_GET['lk_danhmuc']);
            }
            include("view/sanphamchitiet.php");
            break;

        case "binhluan":
            if ($_SESSION['user'] == []) {
                include "taikhoan/login.php";
            } else {
                if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
                    $noidung = $_POST['noidung'];
                    $iduser = $_POST['iduser'];
                    $idpro = $_POST['idpro'];
                    $ten = $_POST['ten'];
                    $email = $_POST['email'];
                    $ngaybinhluan = date('h:i:sa d/m/Y');
                    insert_binhluan($noidung, $iduser, $idpro, $ten, $email, $ngaybinhluan);
                    header("Location:" . $_SERVER['HTTP_REFERER']);
                }
            }
            break;

        case "addtocart":
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $tensanpham = $_POST['tensanpham'];
                $anhdaidiensp = $_POST['anhdaidiensp'];
                $giagiam = $_POST['giagiam'];
                $soluong = 1;
                $ttien = $soluong * $giagiam;
                $spadd = [$id, $tensanpham, $anhdaidiensp, $giagiam, $soluong, $ttien];
                array_push($_SESSION['mycart'], $spadd);
            }
            include "view/cart/giohang.php";
            break;

        case "viewcart":
            include "view/cart/giohang.php";
            break;

        case "delcart":
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('Location:index.php?act=viewcart');
            break;

        case "bill";
            if ($_SESSION['mycart'] == []) {
                header("Location:index.php");
            } else {
                include "view/cart/bill.php";
            }
            break;

        case "billconfirm":
            if (isset($_POST['dathang']) && ($_POST['dathang'])) {
                if (isset($_SESSION['user']))
                    $iduser = $_SESSION['user']['id'];
                else
                    $id = 0;
                $ho = $_POST['ho'];
                $ten = $_POST['ten'];
                $tendaydu = $_POST['tendaydu'];
                $tinh_thanhpho = $_POST['tinh_thanhpho'];
                $quan_huyen = $_POST['quan_huyen'];
                $phuong_xa = $_POST['phuong_xa'];
                $sonha_tenduong = $_POST['sonha_tenduong'];
                $sodienthoai = $_POST['sodienthoai'];
                $email = $_POST['email'];
                $ghichu = $_POST['ghichu'];
                $phuongthucthanhtoan = $_POST['phuongthucthanhtoan'];
                $tongtien = tongdonhang();
                $ngaydathang = date('h:i:sa d/m/Y');
                $id_bill = insert_bill($iduser, $ho, $ten, $tendaydu, $tinh_thanhpho, $quan_huyen, $phuong_xa, $sonha_tenduong, $sodienthoai, $email, $ghichu, $phuongthucthanhtoan, $tongtien, $ngaydathang);
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'], $cart[0], $cart[1], $cart[2], $cart[3], $cart[4], $cart[5], $id_bill);
                }
                $_SESSION['mycart'] = [];
            }
            $bill = loadOne_bill($id_bill);
            $billchitiet = loadAll_cart($id_bill);
            include "view/cart/billconfirm.php";
            break;

        case "dangkydangnhap":
            include "taikhoan/login.php";
            break;

        case "dangky":
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $dangKi = "Đã đăng kí thành công";
            }
            include "taikhoan/login.php";
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('Location:index.php');
                } else {
                    $dangNhap = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng kí!";
                }
            }
            include "taikhoan/login.php";
            break;

        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'] > 0)) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $quenMk = "Mật khẩu của bạn là: " . $checkemail['pass'];
                } else {
                    $quenMk = "Email này không tồn tại";
                }
            }
            include "taikhoan/quenmk.php";
            break;

        case "user_infor":
            $user = $_SESSION['user'];
            if (isset($user)) {
                include("view/user/userinfo.php");
            } else {
                header('Location:index.php');
            }
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name = $_POST['name'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                update_user($id, $name, $address, $email, $user, $pass);
                $capnhatuser = "Cập Nhật Thành Công !";
                $_SESSION['user'] = checkuser($user, $pass);
                header('Location:index.php?act=account');
            }
            break;

        case 'logout':
            $_SESSION['user'] = [];
            header('Location:index.php');
            break;

        case 'account':
            include "view/myaccount.php";
            break;

        default:
            include("view/home.php");
            break;
    }
} else {
    include("view/home.php");
}
include("view/footer.php");
