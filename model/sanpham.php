<?php
function insert_sanpham($tensanpham, $giagoc, $anh, $lk_danhmuc)
{
    $sql = "INSERT INTO `tb_sanpham`(`tensanpham`, `giagoc`, `anh`, `lk_danhmuc`) VALUES ('$tensanpham','$giagoc','$anh','$lk_danhmuc')";
    pdo_execute($sql);
}

function loadAll_sanpham(){
    $sql="SELECT * FROM `tb_sanpham` INNER JOIN tb_danhmuc ON tb_sanpham.lk_danhmuc=tb_danhmuc.id";
    $listsp=pdo_query($sql);
    return $listsp;
}

function delete_sanpham($id){
    $sql="DELETE FROM `tb_sanpham` WHERE id=".$id; 
    pdo_execute($sql);
}

function loadOne_sanpham($id){
    $sql="SELECT * FROM `tb_sanpham` WHERE id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}

function update_sanpham($id, $tensanpham, $giagoc, $anh, $lk_danhmuc)
{
    if($anh==""){
        $sql = "UPDATE `tb_sanpham` SET `tensanpham`='$tensanpham',`giagoc`='$giagoc',`lk_danhmuc`='$lk_danhmuc' WHERE id=".$id;
    }else{
        $sql = "UPDATE `tb_sanpham` SET `tensanpham`='$tensanpham',`giagoc`='$giagoc',`anh`='$anh',`lk_danhmuc`='$lk_danhmuc' WHERE id=".$id;
    }  
    pdo_execute($sql);
}
