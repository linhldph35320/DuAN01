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
                     <a href="index.php?act=addsp" class="btn btn-primary">Thêm sản phẩm mơi</a>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div class="table-responsive">
                     <table class="data-tables table table-striped table-bordered" style="width:100%">
                        <thead>
                           <tr>
                              <th style="width: 5%;">No</th>
                              <th style="width: 10%;">Tên sản phẩm</th>
                              <th style="width: 10%;">Giá mới</th>
                              <th style="width: 10%;">Giá cũ</th>
                              <th style="width: 30%;">Ảnh mặc trước</th>
                              <th style="width: 30%;">Ảnh mặc sau</th>
                              <th style="width: 30%;">Mô tả</th>
                              <th style="width: 20%;">Màu sắc</th>
                              <th style="width: 20%;">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           foreach ($listsp as $sanpham) {
                              extract($sanpham);
                              $suasp = "index.php?act=suasp&id=" . $id;
                              $xoasp = "index.php?act=xoasp&id=" . $id;
                              $imgpath = "../uploads/" . $imgtrc;
                              if (is_file($imgpath)) {
                                 $hinhtrc = "<img src='" . $imgpath . "' height='80'>";
                              } else {
                                 $hinhtrc = "No photo";
                              }
                              $imgpath1 = "../uploads/" . $imgsau;
                              if (is_file($imgpath1)) {
                                 $hinhsau = "<img src='" . $imgpath1 . "' height='80'>";
                              } else {
                                 $hinhsau = "No photo";
                              }
                              echo '                                 <tr>
                                          <td>' . $id . '</td>
                                          <td>' . $tensp . '</td>
                                          <td>' . $newprice . '</td>;
                                          <td>' . $oldprice . '</td>
                                          <td>' . $hinhtrc . '</td>
                                          <td>' . $hinhsau . '</td>
                                          <td>' . $mota . '</td>
                                          <td><input type="color" name="" id="" value="' . $color1 . '" disabled>
                                          <input type="color" name="" id="" value="' . $color2 . '" disabled>
                                          <input type="color" name="" id="" value="' . $color3 . '" disabled>
                                          <input type="color" name="" id="" value="' . $color4 . '" disabled>
                                          </td>
                                          <td>
                                             <div class="flex align-items-center list-user-action">
                                                <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="' . $suasp . '"><i class="ri-pencil-line"></i></a>
                                                <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="' . $xoasp . '"><i class="ri-delete-bin-line"></i></a>
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