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
    <div class="container">
        <div class="checkout_form">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <form action="index.php?act=billconfirm" method="post">
                        <h3>Thông tin đặt hàng</h3>
                        <div class="row">
                            <div class="col-lg-6 mb-20">
                                <label>Họ<span>*</span></label>
                                <input type="text" name="ho">
                            </div>
                            <div class="col-lg-6 mb-20">
                                <label>Tên<span>*</span></label>
                                <input type="text" name="ten">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Tên đầy đủ<span>*</span></label>
                                <input type="text" name="tendaydu">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Tỉnh, thành phố<span>*</span></label>
                                <input type="text" name="tinh_thanhpho">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Quận, huyện<span>*</span></label>
                                <input type="text" name="quan_huyen">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Phường, xã<span>*</span></label>
                                <input type="text" name="phuong_xa">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Số nhà, tên đường<span>*</span></label>
                                <input type="text" name="sonha_tenduong">
                            </div>
                            <div class="col-lg-6 mb-20">
                                <label>Số điện thoại<span>*</span></label>
                                <input type="text" name="sodienthoai">

                            </div>
                            <div class="col-lg-6 mb-20">
                                <label>Địa chỉ email<span>*</span></label>
                                <input type="email" name="email">

                            </div>
                            <div class="payment_method">
                                <div class="panel-default">
                                    <input id="payment" name="phuongthucthanhtoan" type="radio" value="1" />
                                    <label for="payment" data-bs-toggle="collapse" data-bs-target="#method" aria-controls="method">Thanh toán khi nhận hàng</label>
                                </div>
                                <div class="panel-default">
                                    <input id="payment" name="phuongthucthanhtoan" type="radio" value="2" />
                                    <label for="payment" data-bs-toggle="collapse" data-bs-target="#method" aria-controls="method">Thanh toán online</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="order-notes">
                                    <label for="order_note">Ghi chú khi đặt hàng</label>
                                    <textarea id="order_note" name="ghichu"></textarea>
                                </div>
                            </div>
                            <div class="payment_method">
                                <div class="order_button">
                                    <input type="submit" value="ĐẶT HÀNG" name="dathang">
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                </div>
                <div class="col-lg-6 col-md-6">
                    <form action="#">
                        <h3>Sản phẩm của bạn</h3>
                        <div class="order_table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $tong = 0;
                                    $i = 0;
                                    foreach ($_SESSION['mycart'] as $cart) {
                                        $thanhtien = $cart[3] * $cart[4];
                                        $tong = $tong + $thanhtien;
                                        echo '                                    <tr>
                                        <td>'.$cart[1].'<strong> × '.$cart[4].'</strong></td>
                                        <td>'.$cart[3].'</td>
                                    </tr>';
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                <?php
                                    $tong = 0;
                                    $i = 0;
                                    foreach ($_SESSION['mycart'] as $cart) {
                                        $thanhtien = $cart[3] * $cart[4];
                                        $tong = $tong + $thanhtien;
                                        echo '                                    <tr class="order_total">
                                        <th>Tổng tiền</th>
                                        <td><strong>'.$tong.'</strong></td>
                                    </tr>';
                                    }
                                    ?>
                                </tfoot>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>