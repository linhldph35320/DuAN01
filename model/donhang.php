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
    $sql = "SELECT * FROM `tb_hoadon` WHERE idbill=" . $id;
    $onedh = pdo_query($sql);
    return $onedh;
}

function search_donhang($tendonhang){
    $sql="SELECT * FROM `tb_donhang` WHERE tendaydu LIKE '%".$tendonhang."%'";
    $tkdonhang=pdo_query($sql);
    return $tkdonhang;
}

function loadAll_donhang_id($id){
    $sql="SELECT * FROM `tb_donhang` WHERE iduser=".$id;
    $listdh=pdo_query($sql);
    return $listdh;
}

function update_donhang($id, $ho,$ten,$tendaydu,$tinh_thanhpho,$quan_huyen,$phuong_xa,$sonha_tenduong,$email, $sodienthoai,$ghichu,$tinhtrangdonhang)
{
    $sql = "UPDATE `tb_donhang` SET `ho`='$ho',`ten`='$ten',`tendaydu`='$tendaydu',`tinh_thanhpho`='$tinh_thanhpho',`quan_huyen`='$quan_huyen',`phuong_xa`='$phuong_xa',`sonha_tenduong`='$sonha_tenduong',`sodienthoai`='$sodienthoai',`email`='$email',`ghichu`='$ghichu',`tinhtrangdonhang`='$tinhtrangdonhang' WHERE id=" . $id;
    pdo_execute($sql);
}

function loadAll_donhang_iduser($id){
    $sql="SELECT * FROM `tb_donhang` WHERE iduser=".$id;
    $listdh=pdo_query($sql);
    return $listdh;
}

function loadAll_donhang_iddh($id){
    $sql="SELECT * FROM `tb_donhang` WHERE id=".$id;
    $listdh=pdo_query_one($sql);
    return $listdh;
}

function loadAll_donhang_hoadon($id){
    $sql="SELECT * FROM `tb_hoadon` WHERE idbill=".$id;
    $listhd=pdo_query($sql);
    return $listhd;
}

function delete_dh($id){
    $sql="DELETE FROM `tb_donhang` WHERE id=".$id;
    $sql1="DELETE FROM `tb_hoadon` WHERE idbill=".$id;
    pdo_execute($sql);
    pdo_execute($sql1);
}
