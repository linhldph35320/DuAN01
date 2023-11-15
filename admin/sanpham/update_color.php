<?php
    if(is_array($color)){
        extract($color);
    }
?>
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Update Color</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <form action="index.php?act=updatecolor" method="POST">
                            <div class="form-group">
                                <label>Tên màu:</label>
                                <input type="text" class="form-control" name="tenmau" value="<?php echo $tenmau?>">
                            </div>
                            <div class="form-group">
                                 <label>Màu:</label><br>
                                 <input type="color" name="mamau" id="" value="<?php echo $mamau?>">
                              </div>
                            <input type="hidden" name="id" value="<?php if(isset($id) && ($id>0)) echo $id?>">
                            <input type="submit" name="updatecolor" class="btn btn-primary" value="Submit">
                            <input type="reset" class="btn btn-danger" value="Reset">
                            <a href="index.php?act=listcolor"><input type="button" class="btn btn-link" value="List Color"></a>
                            <a href="index.php?act=listspct"><input type="button" class="btn btn-link" value="back"></a>
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