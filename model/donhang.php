<?php
function loadAll_donhang(){
    $sql="SELECT * FROM `tb_donhang` order by id";
    $listdonghang=pdo_query($sql);
    return $listdonghang;
    }

function delete_donhang($id){
        $sql="DELETE FROM `tb_donhang` WHERE id=".$id; 
        pdo_execute($sql);
    }

function loadOne_donhang($id){
        $sql="SELECT * FROM `tb_donhang` WHERE id=".$id;
        $donhang=pdo_query_one($sql);
        return $donhang;
    }

function update_donhang($id,$tendaydu,$email,$sodienthoai,$diachi,$ghichu){
    $sql="UPDATE  `tb_donhang` SET `tendaydu`='".$tendaydu."',`email`='".$email."',
    `sodienthoai`='".$sodienthoai."',`diachi`='".$diachi."',`ghichu`='".$ghichu."'
    WHERE id=".$id;
        pdo_execute($sql);
    }


?>