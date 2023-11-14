<?php
    function insert_sanpham($tensp,$newprice,$oldprice,$imgtrc,$imgsau,$mota,$color1,$color2,$color3,$color4,$iddm){
        $sql="INSERT INTO `sanpham`(`tensp`, `newprice`, `oldprice`, `imgtrc`, `imgsau`, `mota`, `color1`, `color2`, `color3`, `color4`, `iddm`) VALUES ('$tensp','$newprice','$oldprice','$imgtrc','$imgsau','$mota','$color1','$color2','$color3','$color4','$iddm')";
        pdo_execute($sql);
    }

    function loadAll_sanpham(){
        $sql="SELECT * FROM `sanpham` order by id";
        $listsp=pdo_query($sql);
        return $listsp;
    }

    function delete_sanpham($id){
        $sql="DELETE FROM `sanpham` WHERE id=".$id; 
        pdo_execute($sql);
    }

    function loadOne_sanpham($id){
        $sql="SELECT * FROM `sanpham` WHERE id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function update_sanpham($id,$tensp,$newprice,$oldprice,$imgtrc,$imgsau,$mota,$color1,$color2,$color3,$color4,$iddm){
        // if($img==""){
        //     $sql="UPDATE `danhmuc` SET `tendm`='$tendm' WHERE id=".$id;
        // }else{
        //     $sql="UPDATE `danhmuc` SET `tendm`='$tendm',`img`='$img' WHERE id=".$id;
        // }
        // pdo_execute($sql);
        if($imgtrc=="" && $imgsau==""){
            $sql="UPDATE `sanpham` SET `tensp`='$tensp',`newprice`='$newprice',`oldprice`='$oldprice',`mota`='$mota',`color1`='$color1',`color2`='$color2',`color3`='$color3',`color4`='$color4',`iddm`='$iddm' WHERE id=".$id;
        }else if($imgtrc==""){
            $sql="UPDATE `sanpham` SET `tensp`='$tensp',`newprice`='$newprice',`oldprice`='$oldprice',`imgsau`='$imgsau',`mota`='$mota',`color1`='$color1',`color2`='$color2',`color3`='$color3',`color4`='$color4',`iddm`='$iddm' WHERE id=".$id;
        }else if($imgsau==""){
            $sql="UPDATE `sanpham` SET `tensp`='$tensp',`newprice`='$newprice',`oldprice`='$oldprice',`imgtrc`='$imgtrc',`mota`='$mota',`color1`='$color1',`color2`='$color2',`color3`='$color3',`color4`='$color4',`iddm`='$iddm' WHERE id=".$id;
        }else{
            $sql="UPDATE `sanpham` SET `tensp`='$tensp',`newprice`='$newprice',`oldprice`='$oldprice',`imgtrc`='$imgtrc',`imgsau`='$imgsau',`mota`='$mota',`color1`='$color1',`color2`='$color2',`color3`='$color3',`color4`='$color4',`iddm`='$iddm' WHERE id=".$id;
        }
        pdo_execute($sql);
    }
?>