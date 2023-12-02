<a href="javascript:void(0)"><i class="fa fa-shopping-bag" aria-hidden="true"></i><i class="fa fa-angle-down"></i></a>
<!--mini cart-->
<div class="mini_cart">
    <?php
    $tong = 0;
    $i = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $imgpath = "uploads/" . $cart[2];
        if (is_file($imgpath)) {
            $hinh = "<img src='" . $imgpath . "'>";
        } else {
            $hinh = "No photo";
        }
        $thanhtien = $cart[3] * $cart[4];
        $tong = $tong + $thanhtien;
        $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><input type="hidden" value="Xoá"><i class="fa fa-trash-o"></i></a>';
        echo '                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#">' . $hinh . '</a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">' . $cart[1] . '</a>
                                                    <p>Qty: 1 X <span>' . $cart[3] . '</span></p>
                                                </div>
                                                <div class="cart_remove">
                                                    ' . $xoasp . '
                                                </div>
                                            </div>';
        $i += 1;
    }
    ?>
    <div class="mini_cart_table">
        <?php
        $tong = 0;
        $i = 0;
        foreach ($_SESSION['mycart'] as $cart) {
            $thanhtien = $cart[3] * $cart[4];
            $tong = $tong + $thanhtien;
            echo '                                                <div class="cart_total">
                                                    <span>Tổng tiền:</span>
                                                    <span class="price">$' . $tong . '</span>
                                                </div>';
        }
        ?>
    </div>

    <div class="mini_cart_footer">
        <div class="cart_button">
            <a href="index.php?act=viewcart">Xem giỏ hàng</a>
        </div>
        <div class="cart_button">
            <a href="index.php?act=bill">Thanh toán</a>
        </div>

    </div>

</div>