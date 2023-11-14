<div id="content-page" class="content-page">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Sửa tài khoản</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <div class="form-group">
                            <label>Tên tài khoản:</label>
                            <input type="text" class="form-control" name="tensp" value="<?php if(isset($tensp) && ($tensp!="")) echo $tensp?>">
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại:</label>
                            <input type="text" class="form-control" name="tensp" value="<?php if(isset($tensp) && ($tensp!="")) echo $tensp?>">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="text" class="form-control" name="tensp" value="<?php if(isset($tensp) && ($tensp!="")) echo $tensp?>">
                        </div>
                        <div class="form-group">
                            <label>Ảnh đại diện:</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" accept="image/png, image/jpeg" name="imgtrc">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <input type="submit" name="updatesp" class="btn btn-primary" value="Submit">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <a href="index.php?act=listuser"><input type="button" class="btn btn-link" value="back"></a>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>