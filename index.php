<?php
session_start();
ob_start();
include("model/pdo.php");
// include("model/sanpham.php");
include("model/taikhoan.php");
include("view/header.php");


if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

        case "dangky":
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $dangKi = "Đã đăng kí thành công";
            }
            include "taikhoan/login.php";
            break;
            
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user =$_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user,$pass);
                if(is_array($checkuser)) {
                    $_SESSION['user']=$checkuser;
                    
                    header('Location:index.php');
                } else {
                    $dangNhap = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng kí!";
                }
            }
            include "taikhoan/login.php";
            break;

            
         

                case 'quenmk':
                    if (isset($_POST['guiemail']) && ($_POST['guiemail'] > 0)) {
                        $email = $_POST['email'];
                        $checkemail = checkemail($email);
                        if (is_array($checkemail)) {
                            $quenMk = "Mật khẩu của bạn là: " . $checkemail['pass'];
                        } else {
                            $quenMk = "Email này không tồn tại";
                        }
                    }
                    include "taikhoan/quenmk.php";
                    break;

 }
}


include("view/footer.php");


?>