<?php
    function insert_danhmuc($tendanhmuc, $img){
        $sql="INSERT INTO `tb_danhmuc`(`tendanhmuc`, `img`) VALUES ('$tendanhmuc','$img')";
        pdo_execute($sql);
    }

    function loadAll_danhmuc(){
        $sql="SELECT * FROM `tb_danhmuc` order by id";
        $listdm=pdo_query($sql);
        return $listdm;
    }

    function delete_danhmuc($id){
        $sql="DELETE FROM `tb_danhmuc` WHERE id=".$id; 
        pdo_execute($sql);
    }

    function loadOne_danhmuc($id){
        $sql="SELECT * FROM `tb_danhmuc` WHERE id=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }

    function update_danhmuc($id,$tendanhmuc,$img){
        if($img==""){
            $sql="UPDATE `tb_danhmuc` SET `tendanhmuc`='$tendanhmuc' WHERE id=".$id;
        }else{
            $sql="UPDATE `tb_danhmuc` SET `tendanhmuc`='$tendanhmuc',`img`='$img' WHERE id=".$id;
        }
        pdo_execute($sql);
    }
?>