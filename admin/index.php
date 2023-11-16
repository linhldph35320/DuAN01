<?php
session_start();
ob_start();
//tức là khi ngta dô trang admin và session khởi động lên thì kiểm tra giá trị role trong session liền nếu tồn tại và bằng 1 thì sẽ cho chạy tiếp các giá trị bên trong , còn không sẽ chạy ngược lại trang login
if (isset($_SESSION["role"]) && ($_SESSION["role"] == 1)) {
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/color.php";
    include "../model/img.php";
    include "header.php";
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tendanhmuc = $_POST['tendm'];
                    $img = $_FILES['img']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    insert_danhmuc($tendanhmuc, $img);
                    $thongbao = "Thêm danh mục thành công";
                }
                include "danhmuc/add.php";
                break;

            case "listdm":
                $listdm = loadAll_danhmuc();
                include "danhmuc/list.php";
                break;

            case "xoadm":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_danhmuc($_GET['id']);
                }
                $listdm = loadAll_danhmuc();
                include "danhmuc/list.php";
                break;

            case "suadm":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $dm = loadOne_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;

            case "updatedm":
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $tendanhmuc = $_POST['tendm'];
                    $id = $_POST['id'];
                    $img = $_FILES['img']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    update_danhmuc($id, $tendanhmuc, $img);
                    $thongbao = "Sửa danh mục thành công";
                }
                $listdm = loadAll_danhmuc();
                include "danhmuc/list.php";
                break;

            case "addsp":
                if (isset($_POST['addsp']) && ($_POST['addsp'])) {
                    $tensanpham = $_POST['tensanpham'];
                    $lk_danhmuc = $_POST['lk_danhmuc'];
                    $giagoc = $_POST['giagoc'];
                    $anh = $_FILES['anh']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                    if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    insert_sanpham($tensanpham, $giagoc, $anh, $lk_danhmuc);
                    $thongbao = "Thêm sản phẩm thành công";
                }
                $listdm = loadAll_danhmuc();
                include "sanpham/add.php";
                break;

            case "listsp":
                $listsp = loadAll_sanpham();
                include "sanpham/list.php";
                break;

            case "xoasp":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_sanpham($_GET['id']);
                }
                $listsp = loadAll_sanpham();
                include "sanpham/list.php";
                break;

            case "suasp":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sp = loadOne_sanpham($_GET['id']);
                }
                $listdm = loadAll_danhmuc();
                include "sanpham/update.php";
                break;

            case "updatesp":
                if (isset($_POST['updatesp']) && ($_POST['updatesp'])) {
                    $tensanpham = $_POST['tensanpham'];
                    $id = $_POST['id'];
                    $lk_danhmuc = $_POST['lk_danhmuc'];
                    $giagoc = $_POST['giagoc'];
                    $anh = $_FILES['anh']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["anh"]["name"]);
                    if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    update_sanpham($id, $tensanpham, $giagoc, $anh, $lk_danhmuc);
                    $thongbao = "Sửa sản phẩm thành công";
                }
                $listsp = loadAll_sanpham();
                include "sanpham/list.php";
                break;

            case "listspct":
                include "sanpham/sanphamchitiet.php";
                break;

            case 'addcolor':
                if (isset($_POST['themmau']) && ($_POST['themmau'])) {
                    $tenmau = $_POST['tenmau'];
                    $mau = $_POST['mamau'];
                    insert_color($tenmau, $mau);
                    $thongbao = "Thêm màu thành công";
                }
                include "sanpham/addcolor.php";
                break;

            case "listcolor":
                $listcolor = loadAll_color();
                include "sanpham/list_color.php";
                break;

            case "xoacolor":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_color($_GET['id']);
                }
                $listcolor = loadAll_color();
                include "sanpham/list_color.php";
                break;

            case "suacolor":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $color = loadOne_color($_GET['id']);
                }
                include "sanpham/update_color.php";
                break;

            case "updatecolor":
                if (isset($_POST['updatecolor']) && ($_POST['updatecolor'])) {
                    $tenmau = $_POST['tenmau'];
                    $id = $_POST['id'];
                    $mau = $_POST['mamau'];
                    update_color($id, $tenmau, $mau);
                    $thongbao = "Sửa màu thành công";
                }
                $listcolor = loadAll_color();
                include "sanpham/list_color.php";
                break;

            case "addimg":
                if (isset($_POST['addimg']) && ($_POST['addimg'])) {
                    $anhsanpham = $_FILES['anhsanpham']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["anhsanpham"]["name"]);
                    if (move_uploaded_file($_FILES["anhsanpham"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    insert_img($anhsanpham);
                    $thongbao = "Thêm ảnh thành công";
                }
                include "sanpham/add_img.php";
                break;

            case "listimg":
                $listimg = loadAll_img();
                include "sanpham/list_image.php";
                break;

            case "xoaimg":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_img($_GET['id']);
                }
                $listimg = loadAll_img();
                include "sanpham/list_image.php";
                break;

            case "suaimg":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $img = loadOne_img($_GET['id']);
                }
                include "sanpham/update_img.php";
                break;

            case "updateimg":
                if (isset($_POST['updateimg']) && ($_POST['updateimg'])) {
                    $anhsanpham = $_FILES['anhsanpham']['name'];
                    $id = $_POST['id'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["anhsanpham"]["name"]);
                    if (move_uploaded_file($_FILES["anhsanpham"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    update_img($id, $anhsanpham);
                    $thongbao = "Thêm ảnh thành công";
                }
                $listimg = loadAll_img();
                include "sanpham/list_image.php";
                break;

            case "addbt":
                $listsp = loadAll_sanpham();
                $listcolor = loadAll_color();
                $listimg = loadAll_img();
                include "sanpham/add_bienthe.php";
                break;
            case "thoat":
                if (isset($_SESSION['role']))
                    unset($_SESSION['role']);
                header("Location:login.php");
        }
    }
    include "footer.php";
} else {
    header("Location:login.php");
}
?>