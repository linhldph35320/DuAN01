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
                include "sanpham/add.php";
                break;

            case "listsp":
                include "sanpham/list.php";
                break;

            case "xoasp":
                include "sanpham/list.php";
                break;

            case "suasp":
                include "sanpham/update.php";
                break;

            case "updatesp":
                include "sanpham/list.php";
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