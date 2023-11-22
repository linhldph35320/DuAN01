<div class="account_form register">
    <h2>Cập nhật tài khoản User</h2>
    <?php
    if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
        extract($_SESSION['user']);
    }
    ?>
    <form action="index.php?act=user_infor" method="post">
        <p>
            <label>Tên người dùng <span>*</span></label>
            <input type="text" value="<?= $name ?>" name="name">
        </p>
        <p>
            <label>Địa chỉ <span>*</span></label>
            <input type="text" value="<?= $address ?>" name="address">
        </p>
        <p>
            <label>Email<span>*</span></label>
            <input type="email" value="<?= $email ?>" name="email">
        </p>
        <p>
            <label>Tên đăng nhập<span>*</span></label>
            <input type="text" value="<?= $user ?>" name="user">
        </p>
        <p>
            <label>Mật khẩu<span>*</span></label>
            <input type="password" value="<?= $pass ?>" name="pass">
        </p>
        <div class="login_submit">
            <input type="hidden" name="id" value="<?= $id ?>">
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