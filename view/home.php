<section class="slider_section mb-70">
    <div class="slider_area owl-carousel">
        <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider_content">
                            <h1>Tivi</h1>
                            <h2>QLED 75 inch Q7F</h2>
                            <p>Ưu đãi độc quyền <span>giảm 20%</span> tuần này</p>
                            <a class="button" href="shop.php">Mua sắm ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider_content">
                            <h1>Camera kép phía trước</h1>
                            <h2>20MP</h2>
                            <p>Ưu đãi độc quyền <span>giảm giá 20%</span> trong tuần này</p>
                            <a class="button" href="shop.php">Mua ngay</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider_content">
                            <h1>Nhanh lên!</h1>
                            <h2>TRONG NĂM 2022</h2>
                            <p>Ưu đãi độc quyền <span>giảm 20%</span> trong tuần này</p>
                            <a class="button" href="shop.php">Mua ngay</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
</span>
<section class="shipping_area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="assets/img/about/shipping1.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h2>Giao hàng miễn phí</h2>
                        <p>Giao hàng miễn phí cho tất cả các đơn hàng ở Việt Nam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="assets/img/about/shipping2.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h2>Hỗ trợ 24/7</h2>
                        <p>Liên hệ với chúng tôi 24 giờ một ngày</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="assets/img/about/shipping3.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h2>Hoàn tiền 100%</h2>
                        <p>Bạn có 30 ngày để trả lại hàng hóa</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="assets/img/about/shipping4.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h2>Thanh toán an toàn</h2>
                        <p>Chúng tôi đảm bảo thanh toán an toàn</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="banner_area mb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="single_banner mb-30">
                    <div class="banner_thumb">
                        <a href="shop.php"><img src="assets/img/bg/banner1.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single_banner mb-30">
                    <div class="banner_thumb">
                        <a href="shop.php"><img src="assets/img/bg/banner2.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="single_banner mb-30">
                    <div class="banner_thumb">
                        <a href="shop.php"><img src="assets/img/bg/banner3.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</span>

<SPan>
    <section class="featured_product_area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Danh mục</h2>
                    </div>
                </div>
            </div>
            <div class="row featured_container featured_column3">
                <?php
                $i = 0;
                foreach ($listdm as $dm) {
                    extract($dm);
                    $viewspdm = "index.php?act=viewspdm&id=" . $id;
                    // $add = "index.php?act=addtocart&id=" . $id;
                    $imgpath = "uploads/" . $img;
                    if (is_file($imgpath)) {
                        $hinh = "<img src='" . $imgpath . "'>";
                    } else {
                        $hinh = "No photo";
                    }
                    echo '                <div class="col-lg-4">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="' . $viewspdm . '">' . $hinh . '</a>
                            </div>
                            <figcaption class="product_content">
                                <h3 class="product_name"><a href="' . $viewspdm . '">' . $tendanhmuc . '</a></h3>
                                <div class="add_to_cart">
                                <a href="' . $viewspdm . '">Xem danh mục</a>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </form>';
                    $i += 1;
                }
                ?>

            </div>
        </div>
    </section>
    <!--featured product area end-->
</SPan>
<!--product area start-->

<section class="product_area mb-46">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>SẢN PHẨM CÓ LƯỢT XEM NHIỀU NHẤT</h2>
                </div>
            </div>
        </div>
        <div class="product_carousel product_column5 owl-carousel">
            <?php
            foreach ($lx as $lx) {
                extract($lx);
                $spct = "index.php?act=chitietsanpham&id=" . $id . "&lk_danhmuc=" . $lk_danhmuc;
                $add = "index.php?act=addtocart&id=" . $id;
                $imgpath = "uploads/" . $anhdaidiensp;
                if (is_file($imgpath)) {
                    $hinh = "<img src='" . $imgpath . "'>";
                } else {
                    $hinh = "No photo";
                }
                echo '<form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="tensanpham" value="' . $tensanpham . '">
                <input type="hidden" name="anhdaidiensp" value="' . $anhdaidiensp . '">
                <input type="hidden" name="giagiam" value="' . $giagiam . '">      
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="' . $spct . '">' . $hinh . '</a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="compare"><a href="#" title="compare"><span class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                            <input type="submit" name="addtocart" class="btn btn-primary" value="Add to cart">
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">' . $giagoc . '₫</span>
                                <span class="current_price">' . $giagiam . '₫</span>
                            </div>
                            <h3 class="product_name"><a href="' . $spct . '">' . $tensanpham . '</a></h3>
                        </figcaption>
                    </figure>
                </article>
            </form>';
            }
            ?>
        </div>
    </div>
</section>
<!--product area end-->
</SPan>
<!--banner area start-->


<div class="banner_area mb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="single_banner mb-30">
                    <div class="banner_thumb">
                        <a href="shop.php"><img src="assets/img/bg/banner6.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="single_banner mb-30">
                    <div class="banner_thumb">
                        <a href="shop.php"><img src="assets/img/bg/banner7.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--banner area end-->
</SPan>
<!--product area start-->
<!--blog area end-->
</SPAn>
<!--brand area start-->
<div class="brand_area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand_container owl-carousel">
                    <div class="brand_items">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand1.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand2.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="brand_items">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand3.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand4.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="brand_items">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand5.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand6.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="brand_items">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand7.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand8.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="brand_items">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand9.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand10.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="brand_items">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand2.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand3.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--brand area end-->
<script>
//     Swal.fire({
//   title: "Good job!",
//   text: "You clicked the button!",
//   icon: "success"
// });
// alert("abc");

</script>
</SPAn>