<?php
    function loadAll_binhluan($id){
        $sql="SELECT tb_sanpham_binhluan.id, tensanpham, user, noidung, ngaybinhluan FROM `tb_sanpham_binhluan` INNER JOIN tb_sanpham ON tb_sanpham_binhluan.id_sanpham=tb_sanpham.id INNER JOIN tb_user ON tb_sanpham_binhluan.id_taikhoan=tb_user.id WHERE id_sanpham=".$id;
        $listbinhluan=pdo_query($sql);
        return $listbinhluan;
    }

    function delete_binhluan($id){
        $sql="DELETE FROM `tb_sanpham_binhluan` WHERE id=".$id;
        pdo_execute($sql);
    }
?>