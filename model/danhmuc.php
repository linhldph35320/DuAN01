<?php
    function insert_danhmuc($tendm, $img){
        $sql="INSERT INTO `danhmuc`(`tendm`, `img`) VALUES ('$tendm','$img')";
        pdo_execute($sql);
    }

    function loadAll_danhmuc(){
        $sql="SELECT * FROM `danhmuc` order by id";
        $listdm=pdo_query($sql);
        return $listdm;
    }

    function delete_danhmuc($id){
        $sql="DELETE FROM `danhmuc` WHERE id=".$id; 
        pdo_execute($sql);
    }

    function loadOne_danhmuc($id){
        $sql="SELECT * FROM `danhmuc` WHERE id=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }

    function update_danhmuc($id,$tendm,$img){
        if($img==""){
            $sql="UPDATE `danhmuc` SET `tendm`='$tendm' WHERE id=".$id;
        }else{
            $sql="UPDATE `danhmuc` SET `tendm`='$tendm',`img`='$img' WHERE id=".$id;
        }
        pdo_execute($sql);
    }
?>