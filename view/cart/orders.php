<section class="main_content_area">
    <div class="container">
        <div id="orders">
            <h3>Đơn hàng</h3>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Ngày đặt hàng</th>
                            <th>Trạng thái</th>
                            <th>Tổng tiền</th>
                            
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listdh as $dh) {
                            extract($dh);
                            $xemdh = "index.php?act=xemdh&id=".$id;
                            if ($tinhtrangdonhang == 0) {
                                $th = "Chưa xác nhận";
                             } else if($tinhtrangdonhang == 1){
                                $th = "Đã xác nhận";
                             }else if($tinhtrangdonhang == 2){
                                $th= "Đã vận chuyển đến bưu cục";
                             }else if($tinhtrangdonhang == 3){
                                $th= "Đang giao hàng";
                             }else{
                                $th= "Giao hàng thành công";
                             }
                            echo '                        <tr>
                                <td>'.$ngaydathang.'</td>
                                <td>'.$th.'</td>
                                <td>'.$tongtien.'đ</td>
                                <td><a href="'.$xemdh.'" class="view">Xem</a></td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>