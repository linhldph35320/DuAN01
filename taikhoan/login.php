
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
                        <h2>Đăng nhập</h2>
                        <form action="index.php?act=dangnhap" method="post">
                            <p>
                                <label>Tên đăng nhập <span>*</span></label>
                                <input type="text" name="user">
                            </p>
                            <p>
                                <label>Mật khẩu <span>*</span></label>
                                <input type="password" name="pass">
                            </p>
                            <div class="login_submit">
                                
                                <a href="index.php?act=quenmk">Quên mật khẩu</a>
                                <label for="remember">
                                    <input id="remember" type="checkbox">
                                    Nhớ tài khoản
                                </label>
                       
                                <input type="submit" value="Đăng nhập" name="dangnhap">
                               <input type="reset" value="Nhập lại">
                            </div>

                        </form>
                    </div>
                    


                </div>
  
                <div class="col-lg-6 col-md-6">


                    <div class="account_form register">
                        <h2>Đăng ký</h2>
                        <form action="index.php?act=dangky" method="post">
                            <p>
                                <label>Email <span>*</span></label>
                                <input type="email" name="email"> 
                            </p>
                            <p>
                                <label>tên đăng nhập <span>*</span></label>
                                <input type="text" name="user"> 
                            </p>
                            <p>
                                <label>Mật khẩu <span>*</span></label>
                                <input type="password" name="pass">
                            </p>
                            <div class="login_submit">
                            <input type="submit" value="Đăng kí" name="dangky">
                             <input type="reset" value="Nhập lại">
                            </div>
                        </form>
                    </div>

     </div>
                <!--register area end-->
            </div>
        </div>
    </div>
   



