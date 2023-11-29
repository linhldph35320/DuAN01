<?php
session_start();
ob_start();
//tức là khi ngta dô trang admin và session khởi động lên thì kiểm tra giá trị role trong session liền nếu tồn tại và bằng 1 thì sẽ cho chạy tiếp các giá trị bên trong , còn không sẽ chạy ngược lại trang login
if (isset($_SESSION["role"]) && ($_SESSION["role"] == 1)) {
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/donhang.php";
    include "../model/binhluan.php";
    include "header.php";
    include "../model/user.php";
    // include 'path/to/your/file.php';

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
            case "dskh":
                $listtaikhoan = loadAll_taikhoan();
                include "taikhoan/list.php";
                break;

            case "viewtk":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $list1tk = viewOne_taikhoan($_GET['id']);
                }
                include "taikhoan/list_one.php";
                break;

            case "xoatk":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_taikhoan($_GET['id']);
                }
                $listtaikhoan = loadAll_taikhoan();
                include "taikhoan/list.php";
                break;
                ///////////////////
            case "list":
                $listdm = loadAll_danhmuc();
                include "danhmuc/list.php";
                break;
                ///////////////
            case "suatk":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $dm = loadOne_taikhoan($_GET['id']);
                }
                include "taikhoan/update.php";
                break;

            case "updatetk":
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $role = $_POST['role'];

                    update_taikhoan($id, $name, $address, $email, $user, $pass, $role);
                    $thongbao = "Sửa danh mục thành công";
                }
                $listtaikhoan = loadAll_taikhoan();
                include "taikhoan/list.php";
                break;
                ///////////////////////////////////////////////////////////////////////////////////////////////
            case "addsp":
                if (isset($_POST['addsp']) && ($_POST['addsp'])) {
                    $tensanpham = $_POST['tensanpham'];
                    $giagoc = $_POST['giagoc'];
                    $giagiam = $_POST['giagiam'];
                    $anhsanpham = $_FILES['anhsanpham']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["anhsanpham"]["name"]);
                    if (move_uploaded_file($_FILES["anhsanpham"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    $anhmota = $_FILES['anhmota']['name'];
                    $total = count($_FILES['anhmota']['name']);
                    // Loop through each file
                    for ($i = 0; $i < $total; $i++) {

                        //Get the temp file path
                        $tmpFilePath = $_FILES['anhmota']['tmp_name'][$i];

                        //Make sure we have a file path
                        if ($tmpFilePath != "") {
                            //Setup our new file path
                            $newFilePath = "../uploads/" . $_FILES['anhmota']['name'][$i];

                            //Upload the file into the temp dir
                            if (move_uploaded_file($tmpFilePath, $newFilePath)) {

                                //Handle other code here

                            }
                        }
                    }
                    $mota = $_POST['mota'];
                    // $tenmau=$_POST['tenmau'];
                    // $anhmausac = $_FILES['anhmausac']['name'];
                    // $target_dir = "../uploads/";
                    // $linkanhmausac = $target_dir . basename($_FILES["anhmausac"]["name"]);
                    // foreach ($linkanhmausac as $linkams) {
                    //     if (move_uploaded_file($_FILES["anhmausac"]["tmp_name"], $linkams)) {
                    //         // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    //     } else {
                    //         // echo "Sorry, there was an error uploading your file.";
                    //     }
                    // }
                    $soluong = $_POST['soluong'];
                    $lk_danhmuc = $_POST['lk_danhmuc'];
                    insert_sanpham($tensanpham, $giagoc, $giagiam, $anhsanpham, $mota, $soluong, $lk_danhmuc, $anhmota);
                    $thongbao = "Thêm sản phẩm thành công";
                }
                $listdm = loadAll_danhmuc();
                include "sanpham/add.php";
                break;

            case "listsp":
                $listsp = loadAll_sanpham();
                include "sanpham/list.php";
                break;

            case "viewsp":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $listspct = viewOne_sanpham_chitiet($_GET['id']);
                    $listimg = viewOne_sanpham_img($_GET['id']);
                    $listbinhluan = loadAll_binhluan($_GET['id']);
                }
                include "sanpham/list_one.php";
                include "sanpham/list_one_img.php";
                include "sanpham/binhluan.php";
                break;

            case "xoabl":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_binhluan($_GET['id']);
                }
                $listsp = loadAll_sanpham();
                include "sanpham/list.php";
                break;

            case "xoasp":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_sanpham_chitiet($_GET['id']);
                    delete_sanpham_anh($_GET['id']);
                }
                $listsp = loadAll_sanpham();
                include "sanpham/list.php";
                break;

            case "suasp":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sanpham = loadOne_sanpham_chitiet($_GET['id']);
                }
                $listdm = loadAll_danhmuc();
                include "sanpham/update.php";
                break;

            case "xoaimg":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_sanpham_img($_GET['id']);
                }
                $listsp = loadAll_sanpham();
                include "sanpham/list.php";
                break;

            case "suaimg":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $img = loadOne_img_chitiet($_GET['id']);
                }
                include "sanpham/update_one_img.php";
                break;

            case "updateimg":
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $id = $_POST['id'];
                    $anhsanpham = $_FILES['anhsanpham']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["anhsanpham"]["name"]);
                    if (move_uploaded_file($_FILES["anhsanpham"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    update_img($anhsanpham,$id);
                }
                $listsp = loadAll_sanpham();
                include "sanpham/list.php";
                break;

            case "updatesp":
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $id = $_POST['id'];
                    $tensanpham = $_POST['tensanpham'];
                    $giagoc = $_POST['giagoc'];
                    $giagiam = $_POST['giagiam'];
                    $anhsanpham = $_FILES['anhsanpham']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["anhsanpham"]["name"]);
                    if (move_uploaded_file($_FILES["anhsanpham"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    $mota = $_POST['mota'];
                    // $tenmau=$_POST['tenmau'];
                    // $anhmausac = $_FILES['anhmausac']['name'];
                    // $target_dir = "../uploads/";
                    // $linkanhmausac = $target_dir . basename($_FILES["anhmausac"]["name"]);
                    // foreach ($linkanhmausac as $linkams) {
                    //     if (move_uploaded_file($_FILES["anhmausac"]["tmp_name"], $linkams)) {
                    //         // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    //     } else {
                    //         // echo "Sorry, there was an error uploading your file.";
                    //     }
                    // }
                    $soluong = $_POST['soluong'];
                    $lk_danhmuc = $_POST['lk_danhmuc'];
                    update_sanpham($id, $tensanpham, $giagoc, $giagiam, $anhsanpham, $mota, $soluong, $lk_danhmuc);
                    $thongbao = "Sửa sản phẩm thành công";
                }
                $listsp = loadAll_sanpham();
                include "sanpham/list.php";
                break;

            case "listbill":
                $listdonghang = loadAll_donhang();
                include "donhang/list-bill.php";
                break;

            case "viewdonhang":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $onedh = viewOne_donhang($_GET['id']);
                }
                include "donhang/list-one-bill.php";
                break;

            case "xoadonhang":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_donhang($_GET['id']);
                }
                $listdonghang = loadAll_donhang();
                include "donhang/list-bill.php";
                break;

            case "suadonhang":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $donhang = loadOne_donhang($_GET['id']);
                }
                include "donhang/update.php";
                break;

            case "updatedh":
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $id = $_POST['id'];
                    // $lk_user = $_POST['lk_user'];
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
                    update_donhang($id, $ho,$ten,$tendaydu,$tinh_thanhpho,$quan_huyen,$phuong_xa,$sonha_tenduong,$email, $sodienthoai,$ghichu);
                    $thongbao = "Sửa danh mục thành công";
                }
                $listdonghang = loadAll_donhang();
                include "donhang/list-bill.php";
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
