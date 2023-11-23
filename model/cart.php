<?php
function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $thanhtien = $cart[3] * $cart[4];
        $tong = $tong + $thanhtien;
    }
    return $tong;
}

function insert_bill($ho,$ten,$tendaydu,$tinh_thanhpho,$quan_huyen,$phuong_xa,$sonha_tenduong,$sodienthoai,$email,$ghichu,$phuongthucthanhtoan,$tongtien,$ngaydathang){
    $sql="INSERT INTO `tb_donhang`(`ho`, `ten`, `tendaydu`, `tinh_thanhpho`, `quan_huyen`, `phuong_xa`, `sonha_tenduong`, `sodienthoai`, `email`, `ghichu`, `phuongthucthanhtoan`, `tongtien`,`ngaydathang`) VALUES ('$ho','$ten','$tendaydu','$tinh_thanhpho','$quan_huyen','$phuong_xa','$sonha_tenduong','$sodienthoai','$email','$ghichu','$phuongthucthanhtoan','$tongtien','$ngaydathang')";
    return pdo_execute_lastInsert_Id($sql);
}

function insert_cart($idpro,$ten,$img,$gia,$soluong,$thanhtien,$idbill){
    $sql="INSERT INTO `tb_hoadon`(`idpro`, `ten`, `img`, `gia`, `soluong`, `thanhtien`, `idbill`) VALUES ('$idpro','$ten','$img','$gia','$soluong','$thanhtien','$idbill')";
    pdo_execute($sql);
}

function loadOne_bill($id){
    $sql="SELECT * FROM `tb_donhang` WHERE id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;
}

function loadAll_cart($id_bill){
    $sql="SELECT * FROM `tb_hoadon` WHERE idbill=".$id_bill;
    $billchitiet=pdo_query($sql);
    return $billchitiet;
}
