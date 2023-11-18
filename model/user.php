<?php
function loadAll_taikhoan(){
    $sql="SELECT * FROM tb_user order by id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}
function checkuser($user, $pass) {
    $conn = pdo_get_connection();
    $stmt = $conn->prepare("SELECT * FROM tb_user WHERE user='".$user."' AND pass='".$pass."'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    if(count($kq)>0) return $kq[0]["role"];
    else return 0;
}
function delete_taikhoan( $id ) {
    $sql="DELETE FROM `tb_user` WHERE id=".$id; 
    pdo_execute($sql);
}
function loadOne_taikhoan($id){
    $sql="SELECT * FROM `tb_user` WHERE id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}

function update_taikhoan($id, $name, $address, $email, $user, $pass, $role){
    $sql="UPDATE `tb_user` SET `name`='$name',`address`='$address',`email`='$email',`user`='$user',`pass`='$pass',`role`='$role' WHERE id=".$id;
    pdo_execute($sql);
}

?>