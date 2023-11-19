<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Chi tiết sản phẩm</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="index.php?act=addsp" class="btn btn-primary">Thêm loại sản phẩm mơi</a>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <table class="data-tables table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">No</th>
                                        <th style="width: 10%;">Tên sản phẩm</th>
                                        <th style="width: 10%;">Danh mục</th>
                                        <th style="width: 10%;">Giá gốc</th>
                                        <th style="width: 10%;">Giá giảm</th>
                                        <th style="width: 10%;">Ảnh đại diện sản phẩm</th>
                                        <th style="width: 50%;">Mô tả</th>
                                        <th style="width: 10%;">Số lượng</th>
                                        <th style="width: 20%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($listspct as $sanphamchitiet) {
                                        extract($sanphamchitiet);
                                        $suasp = "index.php?act=suasp&id=" . $id;
                                        $xoasp = "index.php?act=xoasp&id=" . $id;
                                        $imgpath = "../uploads/" . $anhdaidiensp;
                                        if (is_file($imgpath)) {
                                            $hinh = "<img src='" . $imgpath . "' height='80'>";
                                        } else {
                                            $hinh = "No photo";
                                        }
                                        foreach ($listimg as $img) {
                                            extract($img);
                                            $imgpath1 = "../uploads/" . $anhsanpham;
                                            if (is_file($imgpath1)) {
                                                $hinh1 = "<img src='" . $imgpath1 . "' height='80'>";
                                                echo $hinh1;
                                            } else {
                                                $hinh1 = "No photo";
                                            }
                                        }
                                        // for ($i=0; $i<= $img; $i++) { 
                                        //     if (is_file($imgpath1)) {
                                        //         $hinh1 = "<img src='" . $imgpath1 . "' height='80'>";
                                        //     } else {
                                        //         $hinh1 = "No photo";
                                        //     }
                                        // }
                                        echo '<tr>
                                            <td>' . $id . '</td>
                                            <td>' . $tensanpham . '</td>
                                            <td>' . $tendanhmuc . '</td>
                                            <td>' . $giagoc . '</td>
                                            <td>' . $giagiam . '</td>
                                            <td>' . $hinh . '</td>
                                            <td>' . $mota . '</td>
                                            <td>' . $soluong . '</td>
                                            <td>
                                               <div class="flex align-items-center list-user-action">
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="' . $suasp . '"><i class="ri-pencil-line"></i></a>
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="' . $xoasp . '" onclick="myFunction()"><i class="ri-delete-bin-line"></i></a>
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back" href="index.php?act=listsp"><-</a>
                                              </div>
                                            </td>
                                        </tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>