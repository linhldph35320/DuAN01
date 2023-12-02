<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Đơn hàng</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <div class="row justify-content-between">
                                <div class="col-sm-12 col-md-6">
                                    <div id="user_list_datatable_info" class="dataTables_filter">
                                        <form class="mr-3 position-relative" action="index.php?act=tkdonhang" method="post">
                                            <div class="form-group mb-0">
                                                <input type="text" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table" name="tendonhang" required>
                                                <input type="submit" name="timdonhang">
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                <thead>
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Tên người đặt hàng</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ</th>
                                        <th>Ghi chú</th>
                                        <th>Ngày đặt hàng</th>
                                        <th>Trạng thái đơn hàng</th>
                                        <th>Action</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($tkdonhang as $donhang) {
                                        extract($donhang);
                                        if ($tinhtrangdonhang == 0) {
                                            $th = "Chưa xác nhận";
                                        } else {
                                            $th = "Đã xác nhận";
                                        }
                                        $suadh = "index.php?act=suadonhang&id=" . $id;
                                        $xoadh = "index.php?act=xoadonhang&id=" . $id;
                                        $viewdh = "index.php?act=viewdonhang&id=" . $id;
                                        echo '<tr>
                                            <td>DA1-' . $id . '</td>
                                            <td>' . $tendaydu . '</td>
                                            <td>' . $email . '</td>
                                            <td>' . $sodienthoai . '</td>
                                            <td>' . $sonha_tenduong . '</td>
                                            <td>' . $ghichu . '</td>
                                            <td>' . $ngaydathang . '</td>
                                            <td>' . $th . '</td>
                                            <td>
                                               <div class="flex align-items-center list-user-action">
                                               <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="' . $viewdh . '"><i class="ri-eye-line"></i></a>
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="' . $suadh . '"><i class="ri-pencil-line"></i></a>
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
</div>