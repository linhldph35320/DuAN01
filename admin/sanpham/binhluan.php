<div class="col-sm-12">
    <div class="iq-card">
        <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 class="card-title">Bình luận</h4>
            </div>
        </div>
        <div class="iq-card-body">
            <div class="table-responsive">
                <div class="row justify-content-between">
                    <div class="col-sm-12 col-md-6">
                        <div id="user_list_datatable_info" class="dataTables_filter">
                            <form class="mr-3 position-relative">
                                <div class="form-group mb-0">
                                    <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="user-list-files d-flex float-right">
                            <a class="iq-bg-primary" href="javascript:void();">
                                Print
                            </a>
                            <a class="iq-bg-primary" href="javascript:void();">
                                Excel
                            </a>
                            <a class="iq-bg-primary" href="javascript:void();">
                                Pdf
                            </a>
                        </div>
                    </div>
                </div>
                <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                    <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Tên tài khoản</th>
                            <th>Bình luận</th>
                            <th>Ngày bình luận</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            foreach ($listbinhluan as $binhluan) {
                                extract($binhluan);
                                $xoabl = "index.php?act=xoabl&id=" . $id;
                                echo '<td>' . $tensanpham . '</td>
                                            <td>' . $user . '</td>
                                            <td>' . $noidung . '</td>
                                            <td>' . $ngaybinhluan . '</td>
                                            <td>
                                            <div class="flex align-items-center list-user-action">
                                               <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="'.$xoabl.'"><i class="ri-delete-bin-line"></i></a>
                                            </div>
                                         </td>';
                            }
                            ?>
                    </tbody>
                </table>
            </div>
            <div class="row justify-content-between mt-3">
                <div id="user-list-page-info" class="col-md-6">
                    <span>Showing 1 to 5 of 5 entries</span>
                </div>
                <div class="col-md-6">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
</div>