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
                                    <form class="mr-3 position-relative">
                                       <div class="form-group mb-0">
                                          <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                                       </div>
                                    </form>
                                 </div>
                              </div>
                             
                           </div>
                           <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                             <thead>
                                 <tr>
                                    <th>Tên người đặt hàng</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Ghi chú</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Trạng thái đơn hàng</th>
                                    <th>Tổng tiền</th>
                                 </tr>
                                 
                             </thead>
                             <tbody>
                                    <?php
                                        foreach ($listdonghang as $donhang) {
                                            extract($donhang);
                                            $suadm="index.php?act=suadonhang&id=".$id;
                                            $xoadm="index.php?act=xoadonhang&id=".$id;
                                           
                                            echo '<tr>
                                            <td>'.$tendaydu.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$sodienthoai.'</td>
                                            <td>'.$diachi.'</td>
                                            <td>'.$ghichu.'</td>
                                            <td>'.$ngaydathang.'</td>
                                            <td>'.$trangthai.'</td>
                                            <td>'.$tongtien.'</td>
                                            <td>
                                               <div class="flex align-items-center list-user-action">
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="'.$suadm.'"><i class="ri-pencil-line"></i></a>
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="'.$xoadm.'"><i class="ri-delete-bin-line"></i></a>
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