<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Danh Sách Tài Khoản</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <table class="data-tables table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="10%">Mã TK</th>
                                        <th width="20%">Tên Đăng NHập</th>
                                        <th width="20%">Địa Chỉ</th>
                                        <th width="20%">Email</th>
                                        <th width="10%">Người dùng</th>
                                        <th width="10%">Mật Khẩu</th>
                                        <th width="10%">Vai Trò</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // $listtaikhoan = array();
                                    if (isset($listtaikhoan) && is_array($listtaikhoan)) {
                                        foreach ($listtaikhoan as $taikhoan) {
                                           
                                            $suatk = "index.php?act=suatk&id=" . $taikhoan['id'];
                                            $xoatk = "index.php?act=xoatk&id=" . $taikhoan['id'];
                                            echo '<tr>
                                            <td>' .  $taikhoan['id'] . '</td>
                                            <td>' .  $taikhoan['name'] . '</td>
                                            <td>' .  $taikhoan['address'] . '</td>
                                            <td>' . $taikhoan['email'] . '</td>
                                            <td>' . $taikhoan['user'] . '</td>
                                            <td>' .$taikhoan['pass'] . '</td>
                                            <td>' . $taikhoan['role'] . '</td>
                                            <td>
                                               <div class="flex align-items-center list-user-action">
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="'. $suatk .'"><i class="ri-pencil-line"></i></a>
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="'. $xoatk .'"><i class="ri-delete-bin-line"></i></a>
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