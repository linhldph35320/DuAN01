<?php
    function insert_img($anhsanpham){
        $sql="INSERT INTO `tb_sanpham_img`(`anhsanpham`) VALUES ('$anhsanpham')";
        pdo_execute($sql);
    }

    function loadAll_img(){
        $sql="SELECT * FROM `tb_sanpham_img` ORDER BY id";
        $listimg=pdo_query($sql);
        return $listimg;
    }

    function delete_img($id){
        $sql="DELETE FROM `tb_sanpham_img` WHERE id=".$id;
        pdo_execute($sql);
    }

    function loadOne_img($id){
        $sql="SELECT * FROM `tb_sanpham_img` WHERE id=".$id;
        $img=pdo_query_one($sql);
        return $img;

    function update_img($id,$anhsanpham){
        $sql="UPDATE `tb_sanpham_img` SET `anhsanpham`='$anhsanpham' WHERE id=".$id;
        pdo_execute($sql);
    }
    }
?>