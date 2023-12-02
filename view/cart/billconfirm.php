
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--Checkout page section-->
<div class="Checkout_section mt-60">
    <?php
    if (isset($bill) && (is_array($bill))) {
        extract($bill);
    }
    ?>

    <div class="container">
    <h2>Cảm ơn quý khách đã đặt hàng!</h2>
        <div class="checkout_form">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <form action="index.php?act=billconfirm" method="post">
                        <h3>Thông tin đặt hàng</h3>
                        <div class="row">
                            <div class="col-lg-6 mb-20">
                                <label>Mã đơn hàng</label>
                                <input type="text" name="madonhang" value="DA1-<?= $bill['id'] ?>" disabled>
                                <label>Ngày đặt hàng</label>
                                <input type="datetime" name="" id="" value="<?= $bill['ngaydathang'] ?>">
                            </div>
                            <div class="col-lg-6 mb-20">
                                <label>Họ</label>
                                <input type="text" name="ho" value="<?= $bill['ho'] ?>" disabled>
                            </div>
                            <div class="col-lg-6 mb-20">
                                <label>Tên</label>
                                <input type="text" name="ten" value="<?= $bill['ten'] ?>" disabled>
                            </div>
                            <div class="col-12 mb-20">
                                <label>Tên đầy đủ</label>
                                <input type="text" name="tendaydu" value="<?= $bill['tendaydu'] ?>" disabled>
                            </div>
                            <div class="col-12 mb-20">
                                <label>Tỉnh, thành phố</label>
                                <input type="text" name="tinh_thanhpho" value="<?= $bill['tinh_thanhpho'] ?>" disabled>
                            </div>
                            <div class="col-12 mb-20">
                                <label>Quận, huyện</label>
                                <input type="text" name="quan_huyen" value="<?= $bill['quan_huyen'] ?>" disabled>
                            </div>
                            <div class="col-12 mb-20">
                                <label>Phường, xã</label>
                                <input type="text" name="phuong_xa" value="<?= $bill['phuong_xa'] ?>" disabled>
                            </div>
                            <div class="col-12 mb-20">
                                <label>Số nhà, tên đường</label>
                                <input type="text" name="sonha_tenduong" value="<?= $bill['sonha_tenduong'] ?>" disabled>
                            </div>
                            <div class="col-lg-6 mb-20">
                                <label>Số điện thoại</label>
                                <input type="text" name="sodienthoai" value="<?= $bill['sodienthoai'] ?>" disabled>

                            </div>
                            <div class="col-lg-6 mb-20">
                                <label>Địa chỉ email</label>
                                <input type="email" name="email" value="<?= $bill['email'] ?>" disabled>

                            </div>
                            <div class="col-lg-6 mb-20">
                                <label>Phương thức thanh toán</label>
                                <input type="text" name="pttt" value="<?php if ($bill['phuongthucthanhtoan'] == 1) {
                                                                            echo "Thanh toán khi nhận hàng";
                                                                        } else {
                                                                            echo "Thanh toán online";
                                                                        } ?>" disabled>

                            </div>
                            <div class="col-12">
                                <div class="order-notes">
                                    <label for="order_note">Ghi chú khi đặt hàng</label>
                                    <textarea id="order_note" name="ghichu"><?= $bill['ghichu'] ?></textarea>
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
                                    foreach ($billchitiet as $bct) {
                                        extract($bct);
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
                                        foreach ($billchitiet as $bct) {
                                            $thanhtien=$soluong*$gia;
                                            extract($bct);
                                        }
                                        echo '                                        <th>Tổng tiền</th>
                                        <td><strong>' . $tongtien . '</strong></td>';
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