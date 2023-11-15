<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Update Image</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <form action="index.php?act=updateimg" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Ảnh:</label><br>
                                <input type="file" name="anhsanpham" id="">
                            </div>
                            <input type="hidden" name="id" value="<?php if(isset($id) && ($id>0)) echo $id?>">
                            <input type="submit" name="upimg" class="btn btn-primary" value="Submit">
                            <input type="reset" class="btn btn-danger" value="Reset">
                            <a href="index.php?act=listimg"><input type="button" class="btn btn-link" value="List Image"></a>
                            <a href="index.php?act=listspct"><input type="button" class="btn btn-link" value="back"></a>
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