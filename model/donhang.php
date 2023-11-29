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

function update_donhang($id, $ho,$ten,$tendaydu,$tinh_thanhpho,$quan_huyen,$phuong_xa,$sonha_tenduong,$email, $sodienthoai,$ghichu)
{
    $sql = "UPDATE `tb_donhang` SET `ho`='$ho',`ten`='$ten',`tendaydu`='$tendaydu',`tinh_thanhpho`='$tinh_thanhpho',`quan_huyen`='$quan_huyen',`phuong_xa`='$phuong_xa',`sonha_tenduong`='$sonha_tenduong',`sodienthoai`='$sodienthoai',`email`='$email',`ghichu`='$ghichu' WHERE id=" . $id;
    pdo_execute($sql);
}
