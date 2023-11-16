<?php
    session_start();
    ob_start();
    include "../model/pdo.php";
    include "../model/user.php";
    if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $role=checkuser($user,$pass);
        $_SESSION['role']= $role;
        if($role== 1) header('Location:index.php');
        else header('Location:login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ADMIN</title>
    <link rel="stylesheet" href="view./style.css">
</head>
<body>
    <div class="main">
    <h2>Login</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <input type="text" name="user">
            <input type="text" name="pass">
            <input type="submit" name="dangnhap" value="Đăng Nhập">
        </form>
    </div>
</body>
</html>