<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Danh Sách Tài Khoản</h4>
                        </div>
                        <form class="mr-3 position-relative" action="index.php?act=tktaikhoan" method="post">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table" name="tentaikhoan" required>
                                <input type="submit" name="timtaikhoan">
                            </div>
                        </form>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <table class="data-tables table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="10%">Mã TK</th>
                                        <th width="10%">Người dùng</th>
                                        <th width="10%">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // $listtaikhoan = array();
                                    if (isset($listtaikhoan) && is_array($listtaikhoan)) {
                                        foreach ($listtaikhoan as $taikhoan) {
                                            $viewtk = "index.php?act=viewtk&id=" . $taikhoan['id'];
                                            $suatk = "index.php?act=suatk&id=" . $taikhoan['id'];
                                            $xoatk = "index.php?act=xoatk&id=" . $taikhoan['id'];
                                            echo '<tr>
                                            <td>' .  $taikhoan['id'] . '</td>
                                            <td>' . $taikhoan['user'] . '</td>
                                            <td>
                                               <div class="flex align-items-center list-user-action">
                                               <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="' . $viewtk . '"><i class="ri-eye-line"></i></a>
                                              </div>
                                            </td>
                                        </tr>';
                                        }
                                    } else {
                                        echo '<p>Không có giá trị nào !</p>';
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