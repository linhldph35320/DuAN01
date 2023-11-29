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
                                    <th>Mã đơn hàng</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh đại diện sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                    <th>Action</th>
                                 </tr>
                                 
                             </thead>
                             <tbody>
                                    <?php
                                        foreach ($onedh as $dh) {
                                            extract($dh);
                                            $suadh="index.php?act=suadonhang&id=".$id;
                                            $xoadh="index.php?act=xoadonhang&id=".$id;
                                            $imgpath = "../uploads/" . $img;
                                            if (is_file($imgpath)) {
                                                $hinh = "<img src='" . $imgpath . "' height='80'>";
                                            } else {
                                                $hinh = "No photo";
                                            }
                                            echo '<tr>
                                            <td>DA1-'.$idbill.'</td>
                                            <td>'.$ten.'</td>
                                            <td>'.$hinh.'</td>
                                            <td>'.$gia.'</td>
                                            <td>'.$soluong.'</td>
                                            <td>'.$thanhtien.'</td>
                                            <td>
                                               <div class="flex align-items-center list-user-action">
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back" href="index.php?act=listbill"><-</a>
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