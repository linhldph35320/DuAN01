<?php
    if(is_array($donhang)){
        extract($donhang);
    }
?>
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Update oder</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <form action="index.php?act=updatedh" method="POST">
                            <div class="form-group">
                                <label>Tên người đặt hàng</label>
                                <input type="text" class="form-control" name="tendaydu" value="<?php if(isset($tendaydu) && ($tendaydu!="")) echo $tendaydu?>">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="<?php if(isset($email) && ($email!="")) echo $email?>">
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" class="form-control" name="sodienthoai" value="<?php if(isset($sodienthoai) && ($sodienthoai!="")) echo $sodienthoai?>">
                            </div>
                            <div class="form-group">
                                <label>địa chỉ</label>
                                <input type="text" class="form-control" name="diachi" value="<?php if(isset($diachi) && ($diachi!="")) echo $diachi?>">
                            </div>
                            <div class="form-group">
                                <label>ghi chú</label>
                                <input type="text" class="form-control" name="ghichu" value="<?php if(isset($ghichu) && ($ghichu!="")) echo $ghichu?>">
                            </div>

                            <input type="hidden" name="id" value="<?php if(isset($_GET['id']) && ($_GET['id']>0)) echo $id?>">
                            <input type="submit" name="update" class="btn btn-primary" value="Submit">
                            <input type="reset" class="btn btn-danger" value="Reset">
                            <a href="index.php?act=listbill"><input type="button" class="btn btn-link" value="back"></a>
                            <br>
                            <?php
                                if(isset($thongbao)&&($thongbao!="")){
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