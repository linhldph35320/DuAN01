<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Add Tài Khoản</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <form action="index.php?act=addtk" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Category Name:</label>
                                <input type="text" class="form-control" name="tentk">
                            </div>
                            <input type="submit" name="themmoi" class="btn btn-primary" value="Submit">
                            <input type="reset" class="btn btn-danger" value="Reset">
                            <a href="index.php?act=listdm"><input type="button" class="btn btn-link" value="back"></a>
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