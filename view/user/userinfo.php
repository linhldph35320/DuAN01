<div class="account_form register">
    <h2>Cập nhật tài khoản User</h2>
    <form action="index.php?act=user_infor" method="post">
        <p>
            <label>Email<span></span></label>
            <input type="email" value="<?=$_SESSION['user']['email']?>" name="email">
        </p>
        <p>
            <label>Tên đăng nhập<span></span></label>
            <input type="text" value="<?=$_SESSION['user']['user']?>" name="user" disabled>
        </p>
        <p>
            <a href="index.php?act=doimk">Đổi mật khẩu</a>
        </p>
        <div class="login_submit">
            <input type="hidden" name="id" value="<?=$_SESSION['user']['id']?>">
            <input type="submit" value="Cập nhật" name="capnhat">
            <input type="reset" value="Nhập lại">
        </div>
    </form>
    <?php
    if (isset($capnhatuser) && ($capnhatuser != "")) {
        echo $capnhatuser;
    }
    ?>
</div>