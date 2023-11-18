<div id="content-page" class="content-page">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Thêm đơn hàng</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tên sản phẩm:</label>
                            <input type="text" class="form-control" name="tensanpham">
                        </div>
                        <div class="form-group">
                            <label>Danh mục:</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="lk_danhmuc">
                                <?php
                                foreach ($listdm as $danhmuc) {
                                    extract($danhmuc);
                                    echo "<option value=".$id.">".$tendanhmuc."</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Giá gốc:</label>
                            <input type="text" class="form-control" name="giagoc">
                        </div>
                        <div class="form-group">
                            <label>Giá giảm:</label>
                            <input type="text" class="form-control" name="giagiam">
                        </div>
                        <div class="form-group">
                            <label>Ảnh đại diện:</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" accept="image/png, image/jpeg" name="anhsanpham">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Ảnh mô tả:</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" accept="image/png, image/jpeg" name="anhmota[]" multiple="multiple">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mô tả:</label><br>
                            <textarea name="mota" id="" cols="100" rows="10"></textarea>
                        </div>
                        <!-- <div class="form-group">
                            <label>Tên màu:</label>
                            <input type="text" class="form-control" name="tenmau">
                        </div>
                        <div class="form-group">
                            <label>Màu sắc:</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" accept="image/png, image/jpeg" name="mausac[]" multiple="multiple">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label>Số lượng:</label>
                            <input type="text" class="form-control" name="soluong">
                        </div>
                        <input type="submit" name="addsp" class="btn btn-primary" value="Submit">
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