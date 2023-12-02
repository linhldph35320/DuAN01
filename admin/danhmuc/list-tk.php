<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div id="user_list_datatable_info" class="dataTables_filter">
                     <form class="mr-3 position-relative" action="index.php?act=tkdanhmuc" method="post">
                        <div class="form-group mb-0">
                           <input type="text" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table" name="tendanhmuc" required>
                           <input type="submit" name="timdanhmuc">
                        </div>
                     </form>
                  </div>
                  <div class="iq-header-title">
                     <h4 class="card-title">Các danh mục</h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     <a href="index.php?act=adddm" class="btn btn-primary">Thêm danh mục mới</a>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div class="table-responsive">
                     <table class="data-tables table table-striped table-bordered" style="width:100%">
                        <thead>
                           <tr>
                              <th width="5%">STT</th>
                              <th width="20%">Tên danh mục</th>
                              <th width="65%">Ảnh</th>
                              <th width="10%">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                        <?php
                           foreach ($tkdanhmuc as $danhmuc) {
                              extract($danhmuc);
                              $suadm = "index.php?act=suadm&id=" . $id;
                              $xoadm = "index.php?act=xoadm&id=" . $id;
                              $imgpath = "../uploads/" . $img;
                              if (is_file($imgpath)) {
                                 $hinh = "<img src='" . $imgpath . "' height='80'>";
                              } else {
                                 $hinh = "No photo";
                              }
                              ?>
                              <tr>
                                            <td><?= $id ?></td>
                                            <td><?= $tendanhmuc ?></td>
                                            <td><?= $hinh ?></td>
                                            <td>
                                               <div class="flex align-items-center list-user-action">
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="<?=$suadm ?>"><i class="ri-pencil-line"></i></a>
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="<?=$xoadm ?>" onclick="return confirm('bạn có muốn xóa ko ?')"><i class="ri-delete-bin-line"></i></a>
                                              </div>
                                            </td>
                                        </tr>
                           
                           <?php }?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>