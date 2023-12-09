<?php
function insert_sanpham($tensanpham, $giagoc, $giagiam, $anhsanpham, $mota, $soluong, $lk_danhmuc, $anhmota)
{
    $sql="INSERT INTO `tb_sanpham`(`tensanpham`, `giagoc`, `giagiam`, `anhdaidiensp`, `mota`,`soluong`, `lk_danhmuc`) VALUES ('$tensanpham','$giagoc','$giagiam','$anhsanpham','$mota','$soluong','$lk_danhmuc')";
    $id_pro=pdo_execute_lastInsert_Id($sql);
    foreach ($anhmota as $anhmt) {
        $sql1="INSERT INTO `tb_sanpham_img`(`id_sanpham`, `anhsanpham`) VALUES ('$id_pro','$anhmt')";
        pdo_execute($sql1);
    }
}
function loadAll_sanpham_sp()
{
    $sql = "SELECT * FROM tb_sanpham ";
    $listsp = pdo_query($sql);
    return $listsp;
}

function loadAll_sanpham_home()
{
    $sql = "SELECT * FROM tb_sanpham WHERE 1 ORDER BY ID  DESC ";
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

function find_sanpham($tim)
{
    $sql = "SELECT * FROM `tb_sanpham` WHERE tensanpham LIKE '".$tim."%'";
    $listtk = pdo_query($sql);
    return $listtk;
}
function viewOne_sanpham_img($id)
{
    $sql = "SELECT idimg,anhsanpham FROM `tb_sanpham_img` WHERE id_sanpham=" . $id;
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
    $sql = "DELETE FROM `tb_sanpham_img` WHERE idimg=" . $id;
    pdo_execute($sql);
}

function delete_sanpham_anh($id)
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

function loadOne_img_chitiet($id)
{
    $sql = "SELECT * FROM `tb_sanpham_img` WHERE idimg=" . $id;
    $img = pdo_query_one($sql);
    return $img;
}


function update_img($anhsanpham,$id){
    if ($anhsanpham != "") {
        $sql="UPDATE `tb_sanpham_img` SET `anhsanpham`='$anhsanpham' WHERE idimg=" . $id;
        pdo_execute($sql);
    }
}

function search_sanpham($tensanpham){
    $sql="SELECT tb_sanpham.id, tensanpham, tendanhmuc, giagoc, giagiam, anhdaidiensp, mota, soluong FROM `tb_sanpham` INNER JOIN tb_danhmuc ON tb_sanpham.lk_danhmuc=tb_danhmuc.id WHERE tensanpham LIKE '%".$tensanpham."%'";
    $tksanpham=pdo_query($sql);
    return $tksanpham;
}

function update_sanpham($id, $tensanpham, $giagoc, $giagiam, $anhsanpham, $mota, $soluong, $lk_danhmuc)
{
    if ($anhsanpham != "") {
        $sql="UPDATE `tb_sanpham` SET `tensanpham`='$tensanpham',`giagoc`='$giagoc',`giagiam`='$giagiam',`anhdaidiensp`='$anhsanpham',`mota`='$mota',`soluong`='$soluong',`lk_danhmuc`='$lk_danhmuc' WHERE id=" . $id;
        pdo_execute($sql);
    } else {
        $sql="UPDATE `tb_sanpham` SET `tensanpham`='" . $tensanpham . "',`giagoc`=" . $giagoc . ",`giagiam`=" . $giagiam . ",`mota`='" . $mota . "',`soluong`=" . $soluong . ",`lk_danhmuc`=" . $lk_danhmuc . " WHERE id=" . $id;
        pdo_execute($sql);
    }
}

function thongke_sanpham_luotban(){
    $sql="SELECT * FROM `tb_sanpham` ORDER BY soluongban DESC LIMIT 0,3";
    $thongke=pdo_query($sql);
    return $thongke;
}

