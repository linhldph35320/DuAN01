<?php
 function insert_taikhoan($email,$user,$pass){
    $sql="INSERT INTO `tb_user`(email,user,pass) VALUES ('$email','$user','$pass')";
    pdo_execute($sql);
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


function update_taikhoan($id,$user,$pass,$email,$address,$tel){
    $sql="UPDATE tb_user SET `user`='".$user."',`pass`='".$pass."',`email`='".$email."',`address`='".$address."',`tel`='".$tel."' WHERE id=".$id;
    pdo_execute($sql);
}
?>