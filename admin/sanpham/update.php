<?php
    if(is_array($sp)){
        extract($sp);
    }
?>
<div id="content-page" class="content-page">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Sửa sản phẩm</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <div class="form-group">
                            <label>Tên sản phẩm:</label>
                            <input type="text" class="form-control" name="tensp" value="<?php if(isset($tensp) && ($tensp!="")) echo $tensp?>">
                        </div>
                        <div class="form-group">
                            <label>Danh mục:</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="iddm">
                                <?php
                                foreach ($listdm as $danhmuc) {
                                    extract($danhmuc);
                                    echo "<option value=".$id.">".$tendm."</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Giá cũ:</label>
                            <input type="text" class="form-control" name="oldprice" value="<?php echo $oldprice?>">
                        </div>
                        <div class="form-group">
                            <label>Giá mới:</label>
                            <input type="text" class="form-control" name="newprice" value="<?php echo $newprice?>">
                        </div>
                        <div class="form-group">
                            <label>Ảnh trước:</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" accept="image/png, image/jpeg" name="imgtrc">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Ảnh sau:</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" accept="image/png, image/jpeg" name="imgsau">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mô tả:</label>
                            <textarea class="form-control" rows="4" name="mota"><?php echo $mota?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Màu 1:</label>
                            <input type="color" class="form-control" name="color1" value="<?php echo $color1?>">
                        </div>
                        <div class="form-group">
                            <label>Màu 2:</label>
                            <input type="color" class="form-control" name="color2" value="<?php echo $color2?>">
                        </div>
                        <div class="form-group">
                            <label>Màu 3:</label>
                            <input type="color" class="form-control" name="color3" value="<?php echo $color3?>">
                        </div>
                        <div class="form-group">
                            <label>Màu 4:</label>
                            <input type="color" class="form-control" name="color4" value="<?php echo $color4?>">
                        </div>
                        <input type="submit" name="updatesp" class="btn btn-primary" value="Submit">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <a href="index.php?act=listsp"><input type="button" class="btn btn-link" value="back"></a>
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