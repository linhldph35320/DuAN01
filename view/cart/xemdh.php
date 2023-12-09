<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li>Đơn hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--Checkout page section-->
<?php
if (isset($listdh) && (is_array($listdh))) {
    extract($listdh);
}
?>
<div class="Checkout_section mt-60">
    <div class="container">
        <div class="checkout_form">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <form action="index.php?act=billconfirm" method="post">
                        <h3>Thông tin đặt hàng</h3>
                        <div class="row">
                            <div class="col-12 mb-20">
                                <label>Mã đơn hàng</label>
                                <p>DA1-<?= $id ?></p>
                                <label>Ngày đặt hàng</label>
                                <p><?= $ngaydathang ?></p>
                            </div>
                            <div class="col-12 mb-20">
                                <label>Họ</label>
                                <p><?= $ho ?></p>
                            </div>
                            <div class="col-12 mb-20">
                                <label>Tên</label>
                                <p><?= $ten ?></p>
                            </div>
                            <div class="col-12 mb-20">
                                <label>Tên đầy đủ</label>
                                <p><?= $tendaydu ?></p>
                            </div>
                            <div class="col-12 mb-20">
                                <label>Tỉnh, thành phố</label>
                                <p><?= $tinh_thanhpho ?></p>
                            </div>
                            <div class="col-12 mb-20">
                                <label>Quận, huyện</label>
                                <p><?= $quan_huyen ?></p>
                            </div>
                            <div class="col-12 mb-20">
                                <label>Phường, xã</label>
                                <p><?= $phuong_xa ?></p>
                            </div>
                            <div class="col-12 mb-20">
                                <label>Số nhà, tên đường</label>
                                <p><?= $sonha_tenduong ?></p>
                            </div>
                            <div class="col-12 mb-20">
                                <label>Số điện thoại</label>
                                <p><?= $sodienthoai ?></p>
                            </div>
                            <div class="col-12 mb-20">
                                <label>Địa chỉ email</label>
                                <p><?= $email ?></p>
                            </div>
                            <div class="col-12 mb-20">
                                <label>Phương thức thanh toán</label>
                                <p><?php if ($phuongthucthanhtoan == 1) {
                                                                            echo "Thanh toán khi nhận hàng";
                                                                        } else {
                                                                            echo "Thanh toán online";
                                                                        } ?></p>
                            </div>
                            <div class="col-12">
                                <div class="order-notes">
                                    <label for="order_note">Ghi chú khi đặt hàng</label>
                                    <p><?= $ghichu ?></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6">
                    <form action="#">
                        <h3>Sản phẩm của bạn</h3>
                        <div class="order_table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($listhd as $hoadon) {
                                        extract($hoadon);
                                        $thanhtien=$soluong*$gia;
                                        echo '                                        <tr>
                                                <td>' . $ten . 'x'.$soluong.'</td>
                                                <td>' . $thanhtien . 'vnd</td>
                                            </tr>';
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr class="order_total">
                                        <?php
                                        foreach ($listhd as $hoadon) {
                                            extract($hoadon);
                                            $thanhtien=$soluong*$gia;
                                        }
                                        echo '                                        <th>Tổng tiền</th>
                                        <td><strong>' . $tongtien . 'đ</strong></td>';
                                        ?>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>