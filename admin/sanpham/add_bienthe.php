<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Thêm biển thể</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <form action="index.php?act=addbt" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Tên sản phẩm:</label>
                                <input type="text" class="form-control" name="tensanpham">
                            </div>
                            <div class="form-group">
                            <label>Loại sản phẩm:</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="lk_sanpham">
                                <?php
                                foreach ($listsp as $sanpham) {
                                    extract($sanpham);
                                    echo "<option value=".$id.">".$tendanhmuc."</option>";
                                }
                                ?>
                            </select>
                        </div>
                            <div class="form-group">
                                <label>Ảnh:</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" accept="image/png, image/jpeg" name="anhsanpham">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Mô tả:</label><br>
                                <textarea name="mota" id="" cols="50" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Giá mới:</label>
                                <input type="text" class="form-control" name="giamoi">
                            </div>
                            <div class="form-group">
                                <label>Tên màu:</label>
                                <input type="text" class="form-control" name="tenmau">
                            </div>
                            <div class="form-group">
                                <label>Màu:</label>
                                <input type="color" class="form-control" name="mamau">
                            </div>
                            <div class="form-group">
                                <label>Số lượng:</label>
                                <input type="number" class="form-control" name="soluong">
                            </div>
                            <input type="submit" name="addbt" class="btn btn-primary" value="Submit">
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