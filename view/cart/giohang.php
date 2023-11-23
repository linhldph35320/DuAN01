<!--sticky header area end-->

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>Shopping Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shopping cart area start -->
<div class="shopping_cart_area mt-60">
    <div class="container">
        <form action="#">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="cart_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product_remove">Xóa</th>
                                        <th class="product_thumb">Ảnh</th>
                                        <th class="product_name">Tên</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product_quantity">Số lượng</th>
                                        <th class="product_total">Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $tong = 0;
                                    $i = 0;
                                    foreach ($_SESSION['mycart'] as $cart) {
                                        $spct = "index.php?act=chitietsanpham&id=" . $cart[0];
                                        $imgpath = "uploads/" . $cart[2];
                                        if (is_file($imgpath)) {
                                            $hinh = "<img src='" . $imgpath . "'>";
                                        } else {
                                            $hinh = "No photo";
                                        }
                                        $thanhtien = $cart[3] * $cart[4];
                                        $tong = $tong + $thanhtien;
                                        $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><input type="hidden" value="Xoá"><i class="fa fa-trash-o"></i></a>';
                                        echo '                                        <tr>
                                                <td class="product_remove">' . $xoasp . '
                                                </td>
                                                <td class="product_thumb"><a href="'.$spct.'">' . $hinh . '</a></td>
                                                <td class="product_name"><a href="'.$spct.'">' . $cart[1] . '</a></td>
                                                <td class="product-price">$' . $cart[3] . '</td>
                                                <td class="product_quantity">' . $cart[4] . '</td>
                                                <td class="product_total">$' . $thanhtien . '</td>
                                            </tr>';
                                        $i += 1;
                                    }
                                    echo '                                        <tr>
                                            <td colspan="4">Tổng đơn hàng</td>
                                            <td></td>
                                            <td>$' . $tong . '</td>
                                        </tr>';
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart_submit">
                            <a href="index.php?act=bill"><input type="button" value="Đặt hàng"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area end-->
        </form>
    </div>
</div>