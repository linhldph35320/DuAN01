<div class="account_form register">
    <h2>Đổi mật khẩu</h2>
    <?php
    if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
        extract($_SESSION['user']);
    }
    ?>
    <form action="index.php?act=user_pass" method="post">
        <p>
            <label>Mật khẩu cũ<span></span></label>
            <input type="password" name="passcu" required>
        </p>
        <p>
            <label>Mật khẩu mới<span></span></label>
            <input type="password" name="passmoi" required>
        </p>
        <div class="login_submit">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="submit" value="Đổi mật khẩu" name="doimk">
            <input type="reset" value="Nhập lại">
            <button onclick="location.replace('index.php?act=account');">back</button>
        </div>
    </form>
    <?php
    if (isset($capnhatuser) && ($capnhatuser != "")) {
        echo $capnhatuser;
    }
    ?>
</div>