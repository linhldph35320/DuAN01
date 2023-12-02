<?php
    function insert_binhluan($noidung,$id_user,$id_pro,$ten,$email,$ngaybinhluan){
        $sql="INSERT INTO `tb_binhluan`(`noidung`,`id_user`,`id_pro`, `ten`, `email`, `ngaybinhluan`) VALUES ('$noidung','$id_user','$id_pro','$ten','$email','$ngaybinhluan')";
        pdo_execute($sql);
    }
    function loadAll_binhluan($id){
        $sql="SELECT * FROM `tb_binhluan` WHERE id_pro=".$id;
        $listbinhluan=pdo_query($sql);
        return $listbinhluan;
    }

    function loadAll_binhluan_sanpham($idpro){
        $sql="SELECT * FROM `tb_binhluan` WHERE id_pro=".$idpro;
        $listbinhluansp=pdo_query($sql);
        return $listbinhluansp;
    } 
    function delete_binhluan($id){
        $sql="DELETE FROM `tb_binhluan` WHERE id=".$id;
        pdo_execute($sql);
    }
?>