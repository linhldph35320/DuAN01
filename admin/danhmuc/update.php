<?php
    if(is_array($dm)){
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
                            <h4 class="card-title">Update Categories</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <form action="index.php?act=updatedm" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Category Name:</label>
                                <input type="text" class="form-control" name="tendm" value="<?php if(isset($tendm) && ($tendm!="")) echo $tendm?>">
                            </div>
                            <div class="form-group">
                                 <label>Category image:</label><br>
                                 <input type="file" name="img" id="">
                              </div>
                            <input type="hidden" name="id" value="<?php if(isset($id) && ($id>0)) echo $id?>">
                            <input type="submit" name="update" class="btn btn-primary" value="Submit">
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