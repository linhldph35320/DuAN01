<?php
        function insert_color($tenmau, $mau){
            $sql="INSERT INTO `tb_sanpham_mausac`(`tenmau`, `mamau`) VALUES ('$tenmau','$mau')";
            pdo_execute($sql);
        }

        function loadAll_color(){
            $sql="SELECT * FROM `tb_sanpham_mausac` order by id";
            $listcolor=pdo_query($sql);
            return $listcolor;
        }

        function delete_color($id){
            $sql="DELETE FROM `tb_sanpham_mausac` WHERE id=".$id; 
            pdo_execute($sql);
        }

        function loadOne_color($id){
            $sql="SELECT * FROM `tb_sanpham_mausac` WHERE id=".$id;
            $color=pdo_query_one($sql);
            return $color;
        }

        function update_color($id,$tenmau,$mau){
            $sql="UPDATE `tb_sanpham_mausac` SET `tenmau`='$tenmau',`mamau`='$mau' WHERE id=".$id;
            pdo_execute($sql);
        }
?>