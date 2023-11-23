<section class="slider_section mb-70">
    <div class="slider_area owl-carousel">
        <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider_content">
                            <h1> best skin</h1>
                            <h2>qled 75 inch q7f</h2>
                            <p>exclusive offer <span> 20% off </span> this week</p>
                            <a class="button" href="shop.php">shopping now</a>
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
                            <h1>Dual Front</h1>
                            <h2>camera 20mp</h2>
                            <p>exclusive offer <span> 20% off </span> this week</p>
                            <a class="button" href="shop.php">shopping now</a>
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
                            <h1>Hurry Up!</h1>
                            <h2>IN THE WORD 2022</h2>
                            <p>exclusive offer <span> 20% off </span> this week</p>
                            <a class="button" href="shop.php">shopping now</a>
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
        <div class=" row">
            <div class="col-lg-3 col-md-6">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="assets/img/about/shipping1.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h2>Free Shipping</h2>
                        <p>Free shipping on all US order</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="assets/img/about/shipping2.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h2>Support 24/7</h2>
                        <p>Contact us 24 hours a day</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="assets/img/about/shipping3.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h2>100% Money Back</h2>
                        <p>You have 30 days to Return</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="assets/img/about/shipping4.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h2>Payment Secure</h2>
                        <p>We ensure secure payment</p>
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
                $spct = "index.php?act=chitietsanpham&id=" . $id;
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



<section class="product_area mb-46">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="product_left_area">
                    <div class="section_title">
                        <h2>Điện thoại & Máy tính bảng</h2>
                    </div>
                    <div class="product_carousel product_column4 owl-carousel">
                        <?php
                        foreach ($spdt as $sanphamdt) {
                            extract($sanphamdt);
                            $spct = "index.php?act=chitietsanpham&id=" . $id;
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
                                                <li class="compare"><a href="#" title="compare"><span class="ion-levels"></span></a></li>
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
            </div>
            <div class="col-lg-3 col-md-12">
                <!--testimonials section start-->
                <div class="testimonial_are">
                    <div class="section_title">
                        <h2>Testimonials</h2>
                    </div>
                    <div class="testimonial_active owl-carousel">
                        <article class="single_testimonial">
                            <figure>
                                <div class="testimonial_thumb">
                                    <a href="#"><img src="assets/img/about/testimonial1.jpg" alt=""></a>
                                </div>
                                <figcaption class="testimonial_content">
                                    <p>Support and response has been amazing, helping me with several issues I came
                                        across and got them solved almost the same day. A pleasure to work with
                                        them!</p>
                                    <h3><a href="#">Kathy Young</a><span> - CEO of SunPark</span></h3>
                                </figcaption>

                            </figure>
                        </article>
                        <article class="single_testimonial">
                            <figure>
                                <div class="testimonial_thumb">
                                    <a href="#"><img src="assets/img/about/testimonial2.jpg" alt=""></a>
                                </div>
                                <figcaption class="testimonial_content">
                                    <p>Perfect Themes and the best of all that you have many options to choose! Best
                                        Support team ever! Thank you very much!</p>
                                    <h3><a href="#">John Sullivan</a><span> - Customer</span></h3>
                                </figcaption>

                            </figure>
                        </article>
                        <article class="single_testimonial">
                            <figure>
                                <div class="testimonial_thumb">
                                    <a href="#"><img src="assets/img/about/testimonial3.jpg" alt=""></a>
                                </div>
                                <figcaption class="testimonial_content">
                                    <p>Code, template and others are very good. The support has served me
                                        immediately and solved my problems when I need help. Are to be
                                        congratulated.</p>
                                    <h3><a href="#">Jenifer Brown</a><span> - Manager of AZ</span></h3>
                                </figcaption>

                            </figure>
                        </article>
                    </div>
                </div>
                <!--testimonials section end-->
            </div>
        </div>
    </div>
</section>
<!--product area end-->
</SPAn>

<!--blog area start-->
<section class="blog_section mb-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>From the Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog_carousel blog_column4 owl-carousel">
                <div class="col-lg-3">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog1.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <p class="post_author">By <a href="#">admin</a> July 04, 2022</p>
                                <h3 class="post_title"><a href="blog-details.html">Blog image post</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog2.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <p class="post_author">By <a href="#">admin</a> July 04, 2022</p>
                                <h3 class="post_title"><a href="blog-details.html">Post with Gallery</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog3.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <p class="post_author">By <a href="#">admin</a> July 04, 2022</p>
                                <h3 class="post_title"><a href="blog-details.html">Post with Audio</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog4.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <p class="post_author">By <a href="#">admin</a> July 04, 2022</p>
                                <h3 class="post_title"><a href="blog-details.html">Post with Video</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog5.jpg" alt=""></a>
                            </div>
                            <figcaption class="blog_content">
                                <p class="post_author">By <a href="#">admin</a> July 04, 2022</p>
                                <h3 class="post_title"><a href="blog-details.html">Maecenas ultricies</a></h3>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
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
</SPAn>