<?php
 function insert_taikhoan($email,$user,$pass){
    $sql="INSERT INTO `tb_user`(email,user,pass) VALUES ('$email','$user','$pass')";
    pdo_execute($sql);
}

function checkonlyuser($user){
    $sql="SELECT * FROM tb_user WHERE user='".$user."'";
    $us=pdo_query_one($sql);
    return $us;
}


function checkuser($user,$pass){
    $sql="SELECT * FROM tb_user WHERE user='".$user."' AND pass='".$pass."'";
    $dn=pdo_query_one($sql);
    return $dn;
}

function checkemail($email){
    $sql="SELECT * FROM tb_user WHERE email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}

function search_taikhoan($tentaikhoan){
    $sql="SELECT * FROM `tb_user` WHERE user LIKE '%.$tentaikhoan.%'";
    $tktaikhoan=pdo_query($sql);
    return $tktaikhoan;
}


function update_taikhoan($id,$user,$pass,$email,$address,$tel){
    $sql="UPDATE tb_user SET `user`='".$user."',`pass`='".$pass."',`email`='".$email."',`address`='".$address."',`tel`='".$tel."' WHERE id=".$id;
    pdo_execute($sql);
}
function update_user($id,$email){
    $sql="UPDATE tb_user SET `email`='$email'";
    $sql.=" WHERE id=".$id;
   // echo $sql;
    pdo_execute($sql);
}

function update_matkhau($id,$passcu,$passmoi){
    $sql="SELECT * FROM `tb_user` WHERE id=".$id."  AND pass='".$passcu."'";
    $checkmk=pdo_query_one($sql);
    if($checkmk!=[]){
        $sql1="UPDATE `tb_user` SET `pass`='$passmoi' WHERE id=".$id;
        pdo_execute($sql1);
        echo "Đổi mật khẩu thành công!";
    }else{
        echo "Vui lòng nhập đúng mật khẩu cũ!";
    }
}
?>