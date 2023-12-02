<div class="iq-card-body">
    <div class="table-responsive">
        <table class="data-tables table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th width="65%">Ảnh mô tả sản phẩm</th>
                    <th width="10%">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listimg as $img) {
                    extract($img);

                    $suaimg = "index.php?act=suaimg&id=" . $idimg;
                    $xoaimg = "index.php?act=xoaimg&id=" . $idimg;
                    $imgpath1 = "../uploads/" . $anhsanpham;

                    if (is_file($imgpath1)) {
                        $hinh1 = "<img src='" . $imgpath1 . "' height='80'>";
                    } else {
                        $hinh1 = "No photo";
                    }

                ?>
                    <tr>
                        <td><?= $hinh1 ?></td>
                        <td>
                            <div class="flex align-items-center list-user-action">
                                <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="<?= $suaimg ?>"><i class="ri-pencil-line"></i></a>
                                <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="<?= $xoaimg ?>" onclick="return confirm('Bạn có muốn xóa hình ảnh này không?')"><i class="ri-delete-bin-line"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    function myFunction() {
        return confirm('Bạn có muốn xóa hình ảnh này không?');
    }
</script>