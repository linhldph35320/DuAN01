<?php
function loadAll_donhang()
{
    $sql = "SELECT * FROM `tb_donhang` order by id";
    $listdonghang = pdo_query($sql);
    return $listdonghang;
}

function delete_donhang($id)
{
    $sql="DELETE FROM `tb_donhang_chitiet` WHERE lk_donhang=lk_donhang";
    $sql1 = "DELETE FROM `tb_donhang` WHERE id=". $id;
    pdo_execute($sql);
    pdo_execute($sql1);
}

function loadOne_donhang($id)
{
    $sql = "SELECT * FROM `tb_donhang` WHERE id=" . $id;
    $donhang = pdo_query_one($sql);
    return $donhang;
}

function viewOne_donhang($id)
{
    $sql = "SELECT tb_donhang_chitiet.id,madonhang,tensanpham,anhdaidiensp,gia,tb_donhang_chitiet.soluong,tongtien,lk_donhang FROM `tb_donhang_chitiet` INNER JOIN tb_sanpham ON tb_donhang_chitiet.lk_sanpham=tb_sanpham.id WHERE lk_donhang=" . $id;
    $onedh = pdo_query($sql);
    return $onedh;
}

function update_donhang($id, $tendaydu, $email, $sodienthoai, $diachi, $ghichu)
{
    $sql = "UPDATE  `tb_donhang` SET `tendaydu`='" . $tendaydu . "',`email`='" . $email . "',
    `sodienthoai`='" . $sodienthoai . "',`diachi`='" . $diachi . "',`ghichu`='" . $ghichu . "'
    WHERE id=" . $id;
    pdo_execute($sql);
}
