<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Update User</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <form action="index.php?act=updatetk" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Tên tài khoản:</label>
                                <input type="text" class="form-control" name="name" value="<?php if (isset($name) && ($name != ""))
                                    echo $name ?>">
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ:</label>
                                <input type="text" class="form-control" name="address" value="<?php if (isset($address) && ($address != ""))
                                echo $address ?>">
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" name="email" value="<?php if (isset($email) && ($email != ""))
                                echo $email ?>">
                            </div>
                            <div class="form-group">
                                <label>User:</label>
                                <input type="text" class="form-control" name="user" value="<?php if (isset($user) && ($user != ""))
                                echo $user ?>">
                            </div>
                            <div class="form-group">
                                <label>Pass:</label>
                                <input type="text" class="form-control" name="pass" value="<?php if (isset($pass) && ($pass != ""))
                                echo $pass ?>">
                            </div>
                            <div class="form-group">
                                <label>Role:</label>
                                <input type="text" class="form-control" name="role" value="<?php if (isset($role) && ($role != ""))
                                echo $role ?>">
                            </div>

                            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0))
                                echo $id ?>">
                            <input type="submit" name="update" class="btn btn-primary" value="Submit">
                            <input type="reset" class="btn btn-danger" value="Reset">
                            <a href="index.php?act=listdm"><input type="button" class="btn btn-link" value="back"></a>
                            <br>
                            <?php
                            if (isset($thongbao) && ($thongbao != "")) {
                                echo $thongbao;
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>