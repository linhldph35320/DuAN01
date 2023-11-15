<?php
if (is_array($sp)) {
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
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <div class="form-group">
                                <label>Tên sản phẩm:</label>
                                <input type="text" class="form-control" name="tensanpham" value="<?php if (isset($tensanpham) && ($tensanpham != "")) echo $tensanpham ?>">
                            </div>
                            <div class="form-group">
                                <label>Danh mục:</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="lk_danhmuc">
                                    <?php
                                    foreach ($listdm as $danhmuc) {
                                        extract($danhmuc);
                                        if ($lk_danhmuc == $id){
                                            $s = "selected";
                                        } else {
                                            $s = "";
                                        }
                                        echo "<option value=" . $id . " '.$s.'>" . $tendanhmuc . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Giá:</label>
                                <input type="text" class="form-control" name="giagoc" value="<?php echo $giagoc ?>">
                            </div>
                            <div class="form-group">
                                <label>Ảnh:</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" accept="image/png, image/jpeg" name="anh">
                                    <label class="custom-file-label"><?php echo $anh ?></label>
                                </div>
                            </div>
                            <input type="submit" name="updatesp" class="btn btn-primary" value="Submit">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <a href="index.php?act=listsp"><input type="button" class="btn btn-link" value="back"></a>
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