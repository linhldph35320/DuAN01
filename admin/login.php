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
        else{
            $txt_erro="Username hoặc Password không tồn tại !";
        } //header('Location:login.php');
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ADMIN</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li>My account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- customer login start -->

    <div class="customer_login mt-60">
        <div class="container">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">


                    <div class="account_form">
                        <h2>login</h2>
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                            <p>
                                <label>Username or email <span>*</span></label>
                                <input type="text" name="user" required>
                            </p>
                            <p>
                                <label>Passwords <span>*</span></label required>
                                <input type="password" name="pass">
                            </p>
                            <?php
                                if(isset($txt_erro)&&($txt_erro!=="")){
                                    echo "<font color='red'>".$txt_erro."</font>";
                                }
                            ?>
                            <br><br>
                            <div class="button">
                                <input type="submit" name="dangnhap" value="Đăng Nhập">
                            </div>       
                        </form>
                    </div>


                </div>
                <!--login area start-->

               
            </div>
        </div>
    </div>
   





</body>
</html>