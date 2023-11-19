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
                                        <th width="10%">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($list1tk as $onetk) {
                                        extract($onetk);
                                        $suatk = "index.php?act=suatk&id=" . $id;
                                        $xoatk = "index.php?act=xoatk&id=" . $id;
                                        if($role==1){
                                            $vaitro="Admin";
                                        }else if("role==2"){
                                            $vaitro="Nhân viên";
                                        }else{
                                            $vaitro="Khách hàng";
                                        }
                                        echo '<tr>
                                        <td>'.$id.'</td>
                                        <td>' . $name . '</td>
                                        <td>' . $address . '</td>
                                        <td>' . $email . '</td>
                                        <td>' . $user . '</td>
                                        <td><input type="password" name="" id="" value="'.$pass.'" disabled></td>
                                        <td>' . $vaitro . '</td>
                                        <td>
                                            <div class="flex align-items-center list-user-action">
                                                <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="' . $suatk . '"><i class="ri-pencil-line"></i></a>
                                                <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="' . $xoatk . '" onclick="myFunction()"><i class="ri-delete-bin-line"></i></a>
                                                <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back" href="index.php?act=dskh"><-</a>
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