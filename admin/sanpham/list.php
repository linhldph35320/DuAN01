<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Danh sách sản phẩm</h4>
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
                              <th style="width: 30%;">Ảnh đại diện sản phẩm</th>
                              <th style="width: 20%;">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           foreach ($listsp as $sanpham) {
                              extract($sanpham);
                              $suasp = "index.php?act=suasp&id=" . $id;
                              $xoasp = "index.php?act=xoasp&id=" . $id;
                              $viewsp = "index.php?act=viewsp&id=" . $id;
                              $imgpath = "../uploads/" . $anhsanpham;
                              if (is_file($imgpath)) {
                                 $hinh = "<img src='" . $imgpath . "' height='80'>";
                              } else {
                                 $hinh = "No photo";
                              }
                              echo '<tr>
                                            <td>' . $id . '</td>
                                            <td>' . $tensanpham . '</td>
                                            <td>' . $tendanhmuc . '</td>
                                            <td>' . $hinh . '</td>
                                            <td>
                                               <div class="flex align-items-center list-user-action">
                                               <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="' . $viewsp . '"><i class="ri-eye-line"></i></a>
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="' . $suasp . '"><i class="ri-pencil-line"></i></a>
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="' . $xoasp . '"><i class="ri-delete-bin-line"></i></a>
                                              </div>
                                            </td>
                                        </tr>';
                           }
                           ?>
                        </tbody>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>