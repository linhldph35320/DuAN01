<div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Color Lists</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="index.php?act=listspct"><input type="button" class="btn btn-link" value="back"></a>
                              <a href="index.php?act=addimg" class="btn btn-primary">Add New Image</a>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <table class="data-tables table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th width="65%">Ảnh sản phẩm</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($listimg as $img) {
                                            extract($img);
                                            $suaimg="index.php?act=suaimg&id=".$id;
                                            $xoaimg="index.php?act=xoaimg&id=".$id;
                                            $imgpath="../uploads/".$anhsanpham;
                                            if(is_file($imgpath)){
                                                $hinh="<img src='".$imgpath."' height='80'>";
                                            }else{
                                                $hinh="No photo";
                                            }
                                            echo '<tr>
                                            <td>'.$id.'</td>
                                            <td>'.$hinh.'</td>
                                            <td>
                                               <div class="flex align-items-center list-user-action">
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="'.$suaimg.'"><i class="ri-pencil-line"></i></a>
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="'.$xoaimg.'"><i class="ri-delete-bin-line"></i></a>
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