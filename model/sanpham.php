<?php
function insert_sanpham($tensanpham, $giagoc, $giagiam, $anhsanpham, $mota, $soluong, $lk_danhmuc, $anhmota)
{
    $con = mysqli_connect("localhost", "root", "", "du_an_1");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    mysqli_query($con, "INSERT INTO `tb_sanpham`(`tensanpham`, `giagoc`, `giagiam`, `anhdaidiensp`, `mota`,`soluong`, `lk_danhmuc`) VALUES ('$tensanpham','$giagoc','$giagiam','$anhsanpham','$mota','$soluong','$lk_danhmuc')");

    // Print auto-generated id
    $id_pro = mysqli_insert_id($con);
    foreach ($anhmota as $anhmt) {
        mysqli_query($con, "INSERT INTO `tb_sanpham_img`(`id_sanpham`, `anhsanpham`) VALUES ('$id_pro','$anhmt')");
    }

    // foreach ($anhmausac as $anhms) {
    //     mysqli_query($con,"INSERT INTO `tb_sanpham_mausac`(`id_sanpham`, `mau`) VALUES ('$id_pro','$anhms')");
    // }
}
function loadAll_sanpham_sp()
{
    $sql = "SELECT * FROM tb_sanpham ";
    $listsp = pdo_query($sql);
    return $listsp;
}

function loadAll_sanpham_home()
{
    $sql = "SELECT * FROM tb_sanpham WHERE 1 ORDER BY ID  DESC LIMIT 0, 8";
    $listsp = pdo_query($sql);
    return $listsp;
}

function loadAll_sanpham()
{
    $sql = "SELECT tb_sanpham.id, tensanpham, tendanhmuc, giagoc, giagiam, anhdaidiensp, mota, soluong FROM `tb_sanpham` INNER JOIN tb_danhmuc ON tb_sanpham.lk_danhmuc=tb_danhmuc.id ORDER BY tb_sanpham.id";
    $listsp = pdo_query($sql);
    return $listsp;
}

function loaddAll_sanpham_top5()
{
    $sql = "SELECT * FROM `tb_sanpham` WHERE giagiam>0 ORDER BY giagiam DESC LIMIT 0,5";
    $sptop5 = pdo_query($sql);
    return $sptop5;
}

function loaddAll_sanpham_danhmuc_laptop()
{
    $sql = "SELECT * FROM `tb_sanpham` WHERE lk_danhmuc=11";
    $spdanhmuc = pdo_query($sql);
    return $spdanhmuc;
}

function loaddAll_sanpham_danhmuc_dienthoai()
{
    $sql = "SELECT * FROM `tb_sanpham` WHERE lk_danhmuc>=6 && lk_danhmuc<=10";
    $spdt = pdo_query($sql);
    return $spdt;
}


function viewOne_sanpham_chitiet($id)
{
    $sql1 = "UPDATE `tb_sanpham` SET `luotxem`=luotxem+1 WHERE id=" . $id;
    pdo_execute($sql1);
    $sql = "SELECT tb_sanpham.id, tensanpham, tendanhmuc, giagoc, giagiam, anhdaidiensp, mota, soluong FROM `tb_sanpham` INNER JOIN tb_danhmuc ON tb_sanpham.lk_danhmuc=tb_danhmuc.id WHERE tb_sanpham.id=" . $id;
    $listspct = pdo_query($sql);
    return $listspct;
}

function loadAll_sanpham_danhmuc($id)
{
    $sql = "SELECT * FROM `tb_sanpham` WHERE lk_danhmuc=" . $id;
    $listspdm = pdo_query($sql);
    return $listspdm;
}

function loadAll_sanpham_luotxem()
{
    $sql = "SELECT * FROM `tb_sanpham` ORDER BY luotxem DESC LIMIT 0,5";
    $lx=pdo_query($sql);
    return $lx;
}

function loadAll_sanpham_luotban(){
    $sql="SELECT * FROM `tb_sanpham` ORDER BY soluongban DESC LIMIT 0,5";
    $lb=pdo_query($sql);
    return $lb;
}

// function find_sanpham($lk_danhmuc, $tim)
// {
//     $sql = "SELECT * FROM `tb_sanpham` WHERE (tensanpham LIKE '".$tim."%' AND lk_danhmuc=".$lk_danhmuc.") OR (tensanpham LIKE '".$tim."%') OR (lk_danhmuc=".$lk_danhmuc.")";
//     $listtk = pdo_query($sql);
//     return $listtk;
// }
function viewOne_sanpham_img($id)
{
    $sql = "SELECT anhsanpham FROM `tb_sanpham_img` WHERE id_sanpham=" . $id;
    $listimg = pdo_query($sql);
    return $listimg;
}

function delete_sanpham_chitiet($id)
{
    $sql = "DELETE FROM `tb_sanpham` WHERE id=" . $id;
    pdo_execute($sql);
}

function delete_sanpham_img($id)
{
    $sql = "DELETE FROM `tb_sanpham_img` WHERE id_sanpham=" . $id;
    pdo_execute($sql);
}

function loadOne_sanpham_chitiet($id)
{
    $sql = "SELECT * FROM `tb_sanpham` WHERE id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_sanpham($id, $tensanpham, $giagoc, $giagiam, $anhsanpham, $mota, $soluong, $lk_danhmuc, $anhmota)
{
    $con = mysqli_connect("localhost", "root", "", "du_an_1");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    if ($anhsanpham != "") {
        mysqli_query($con, "UPDATE `tb_sanpham` SET `tensanpham`='$tensanpham',`giagoc`='$giagoc',`giagiam`='$giagiam',`anhdaidiensp`='$anhsanpham',`mota`='$mota',`soluong`='$soluong',`lk_danhmuc`='$lk_danhmuc' WHERE id=" . $id);
    } else {
        mysqli_query($con, "UPDATE `tb_sanpham` SET `tensanpham`='" . $tensanpham . "',`giagoc`=" . $giagoc . ",`giagiam`=" . $giagiam . ",`mota`='" . $mota . "',`soluong`=" . $soluong . ",`lk_danhmuc`=" . $lk_danhmuc . " WHERE id=" . $id);
    }

    // Print auto-generated id
    foreach ($anhmota as $anhmt) {
        if ($anhmt != "") {
            mysqli_query($con, "UPDATE `tb_sanpham_img` SET `id_sanpham`=$id,`anhsanpham`='$anhmt' WHERE id_sanpham=" . $id);
        } else {
            mysqli_query($con, "UPDATE `tb_sanpham_img` SET `id_sanpham`=$id WHERE id_sanpham=" . $id);
        }
    }

    // foreach ($anhmausac as $anhms) {
    //     mysqli_query($con,"INSERT INTO `tb_sanpham_mausac`(`id_sanpham`, `mau`) VALUES ('$id_pro','$anhms')");
    // }
}
