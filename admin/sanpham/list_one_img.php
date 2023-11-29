<div class="iq-card-body">
    <div class="table-responsive">
        <table class="data-tables table table-striped table-bordered" style="width:100%">
            <thead>
                <div class="iq-card-header-toolbar d-flex align-items-center">
                    <a href="index.php?act=addimg" class="btn btn-primary">Thêm ảnh mô tả</a>
                </div>
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
                    echo '<tr>
                    <td>' . $hinh1 . '</td>
                    <td>
                       <div class="flex align-items-center list-user-action">
                         <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="' . $suaimg . '"><i class="ri-pencil-line"></i></a>
                         <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="' . $xoaimg . '" onclick="myFunction()"><i class="ri-delete-bin-line"></i></a>
                      </div>
                    </td>
                </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>