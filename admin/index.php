<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "header.php";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act){
            case 'adddm':
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $tendm=$_POST['tendm'];
                    $img=$_FILES['img']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir.basename($_FILES["img"]["name"]);
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                    insert_danhmuc($tendm,$img);
                    $thongbao="Thêm danh mục thành công";
                }
                include "danhmuc/add.php";
            break;

            case "listdm":
                $listdm=loadAll_danhmuc();
                include "danhmuc/list.php";
            break;

            case "xoadm":
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdm=loadAll_danhmuc();
                include "danhmuc/list.php";
            break;

            case "suadm":
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $dm=loadOne_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
            break;

            case "updatedm":
                if(isset($_POST['update']) && ($_POST['update'])){
                    $tendm=$_POST['tendm'];
                    $id=$_POST['id'];
                    $img=$_FILES['img']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir.basename($_FILES["img"]["name"]);
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                    update_danhmuc($id,$tendm,$img);
                    $thongbao="Sửa danh mục thành công";
                }
                $listdm=loadAll_danhmuc();
                include "danhmuc/list.php";
            break;

            case "addsp":
                if(isset($_POST['addsp']) && ($_POST['addsp'])){
                    $tensp=$_POST['tensp'];
                    $iddm=$_POST['iddm'];
                    $oldprice=$_POST['oldprice'];
                    $newprice=$_POST['newprice'];
                    $imgtrc=$_FILES['imgtrc']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir.basename($_FILES["imgtrc"]["name"]);
                    if (move_uploaded_file($_FILES["imgtrc"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    $imgsau=$_FILES['imgsau']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir.basename($_FILES["imgsau"]["name"]);
                    if (move_uploaded_file($_FILES["imgsau"]["tmp_name"], $target_file)) {
                          // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    }else {
                          // echo "Sorry, there was an error uploading your file.";
                    }
                    $mota=$_POST['mota'];
                    $color1=$_POST['color1'];
                    $color2=$_POST['color2'];
                    $color3=$_POST['color3'];
                    $color4=$_POST['color4'];
                    insert_sanpham($tensp,$newprice,$oldprice,$imgtrc,$imgsau,$mota,$color1,$color2,$color3,$color4,$iddm);
                    $thongbao="Thêm sản phẩm thành công";
                }
                $listdm=loadAll_danhmuc();
                include "sanpham/add.php";
            break;

            case "listsp":
                $listsp=loadAll_sanpham();
                include "sanpham/list.php";
            break;

            case "xoasp":
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                $listsp=loadAll_sanpham();
                include "sanpham/list.php";
            break;

            case "suasp":
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $sp=loadOne_sanpham($_GET['id']);
                }
                $listdm=loadAll_danhmuc();
                include "sanpham/update.php";
            break;

            case "updatesp":
                if(isset($_POST['updatesp']) && ($_POST['updatesp'])){
                    $tensp=$_POST['tensp'];
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $oldprice=$_POST['oldprice'];
                    $newprice=$_POST['newprice'];
                    $imgtrc=$_FILES['imgtrc']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir.basename($_FILES["imgtrc"]["name"]);
                    if (move_uploaded_file($_FILES["imgtrc"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    $imgsau=$_FILES['imgsau']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir.basename($_FILES["imgsau"]["name"]);
                    if (move_uploaded_file($_FILES["imgsau"]["tmp_name"], $target_file)) {
                          // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    }else {
                          // echo "Sorry, there was an error uploading your file.";
                    }
                    $mota=$_POST['mota'];
                    $color1=$_POST['color1'];
                    $color2=$_POST['color2'];
                    $color3=$_POST['color3'];
                    $color4=$_POST['color4'];
                    update_sanpham($id,$tensp,$newprice,$oldprice,$imgtrc,$imgsau,$mota,$color1,$color2,$color3,$color4,$iddm);
                    $thongbao="Sửa sản phẩm thành công";
                }
                include "sanpham/update.php";
            break;

            case 'listuser':
                include "user-list.php";
            break;

            case 'userupdate':
                include "user_update.php";

            break;

            case 'listcomment':
                include "list-comment.php";
            break;

            case 'listbill':
                include "list-bill.php";
            break;
            
            default:
                include "admin-dashboard.php";
            break;
        }
    }
    include "footer.php";
