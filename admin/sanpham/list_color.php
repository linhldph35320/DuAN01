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
                              <a href="index.php?act=addcolor" class="btn btn-primary">Add New Color</a>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <table class="data-tables table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th width="20%">Tên màu</th>
                                        <th width="65%">Màu</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($listcolor as $color) {
                                            extract($color);
                                            $suacolor="index.php?act=suacolor&id=".$id;
                                            $xoacolor="index.php?act=xoacolor&id=".$id;
                                            echo '<tr>
                                            <td>'.$id.'</td>
                                            <td>'.$tenmau.'</td>
                                            <td><input type="color" name="" id="" value="'.$mamau.'" disabled></td>
                                            <td>
                                               <div class="flex align-items-center list-user-action">
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="'.$suacolor.'"><i class="ri-pencil-line"></i></a>
                                                 <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="'.$xoacolor.'"><i class="ri-delete-bin-line"></i></a>
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