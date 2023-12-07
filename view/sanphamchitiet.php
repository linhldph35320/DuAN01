<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li>Sản phẩm chi tiết</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--product details start-->
<div class="product_details mt-60 mb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product-details-tab">
                    <div id="img-1" class="zoomWrapper single-zoom">
                        <?php
                        foreach ($listspct as $spct) {
                            extract($spct);
                            $imgpath = "uploads/" . $anhdaidiensp;
                            if (is_file($imgpath)) {
                                $hinh = "<img src='" . $imgpath . "' id='zoom1' data-zoom-image='" . $imgpath . "'>";
                            } else {
                                $hinh = "No photo";
                            }
                            echo '<a href="#">
                                                    ' . $hinh . '
                            </a>';
                        }
                        ?>
                    </div>
                    <div class="single-zoom-thumb">
                        <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                            <?php
                            foreach ($listimg as $spctimg) {
                                extract($spctimg);
                                $imgpath = "uploads/" . $anhsanpham;
                                if (is_file($imgpath)) {
                                    $hinh = "<img src='" . $imgpath . "'>";
                                } else {
                                    $hinh = "No photo";
                                }
                                echo '                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update=""
                                        data-image="' . $imgpath . '"
                                        data-zoom-image="' . $imgpath . '">
                                        <img src="' . $imgpath . '" />
                                    </a>

                                </li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product_d_right">
                    <?php
                    foreach ($listspct as $spct) {
                        extract($spct);
                        $imgpath = "uploads/" . $anhdaidiensp;
                        if (is_file($imgpath)) {
                            $hinh = "<img src='" . $imgpath . "'>";
                        } else {
                            $hinh = "No photo";
                        }
                        echo '                    
                        <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id" value="' . $id . '">
                        <input type="hidden" name="tensanpham" value="' . $tensanpham . '">
                        <input type="hidden" name="anhdaidiensp" value="' . $anhdaidiensp . '">
                        <input type="hidden" name="giagiam" value="' . $giagiam . '">
                        <div class="product_d_right">
                        <form action="#">

                            <h1>' . $tensanpham . '</h1>
                            <div class="product_nav">
                                <ul>
                                    <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="review"><a href="#"> (Khách hàng đánh giá ) </a></li>
                                </ul>

                            </div>
                            <div class="price_box">
                                <span class="current_price">$' . $giagiam . '</span>
                                <span class="old_price">$' . $giagoc . '</span>

                            </div>
                            <div class="product_variant quantity">
                            <input type="submit" name="addtocart" class="btn btn-primary" value="Thêm vào giỏ hàng">
                            </div>
                            <div class="product_meta">
                                <span>Danh mục: <a href="#">' . $tendanhmuc . '</a></span>
                            </div>

                        </form>
                        <div class="priduct_social">
                            <ul>
                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i>
                                        Like</a></li>
                                <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a>
                                </li>
                                <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i>
                                        save</a></li>
                                <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i>
                                        share</a></li>
                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i>
                                        linked</a></li>
                            </ul>
                        </div>

                    </div>
                    </form>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--product details end-->

<!--product info start-->
<div class="product_d_info mb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_d_inner">
                    <div class="product_info_button">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-bs-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Mô tả</a>
                            </li>
                            <li>
                                <a data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Bình luận</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="info" role="tabpanel">
                            <div class="product_info_content">
                                <?php
                                foreach ($listspct as $listspct) {
                                    extract($spct);
                                    echo '<p>' . $mota . '</p>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                            <div class="reviews_wrapper" id="binhluan">
                                <?php
                                foreach ($listbinhluansp as $binhluan) {
                                    extract($binhluan);
                                    echo '                                <div class="reviews_comment_box">
                                        <div class="comment_thmb">
                                            <img src="assets/img/blog/comment2.jpg" alt="">
                                        </div>
                                        <div class="comment_text">
                                            <div class="reviews_meta">
                                                <p><strong>' . $ten . '</strong>' . $ngaybinhluan . '</p>
                                                <span>' . $noidung . '</span>
                                            </div>
                                        </div>
    
                                    </div>';
                                }
                                ?>
                                <div class="product_review_form">
                                    <?php
                                    if (is_array($listspct)) {
                                        extract($listspct);
                                    }
                                    ?>
                                    <form action="index.php?act=binhluan" method="post">
                                        <?php
                                            if (isset($_SESSION['user'])) {
                                                $iduser = $_SESSION['user']['id'];
                                                $user = $_SESSION['user']['user'];
                                                $email = $_SESSION['user']['email'];
                                            } else {
                                                $name = "";
                                                $email = "";
                                            }
                                        ?>
                                        <?php
                                            if (isset($_SESSION['user']) && ($_SESSION['user'] !==[])) {
                                        ?>
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="review_comment">Bình luận của bạn </label>
                                                <textarea name="noidung" id="review_comment"></textarea>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label for="author">Tên</label>
                                                <input id="author" type="text" name="ten" value="<?=$user?>">

                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <label for="email">Địa chỉ email </label>
                                                <input id="email" type="text" name="email" value="<?=$email?>">
                                            </div>
                                        </div>
                                        <input type="hidden" name="iduser" value="<?= $iduser ?>">
                                        <input type="hidden" name="idpro" value="<?= $id ?>">
                                        <input type="submit" value="Bình luận" name="guibinhluan">
                                        <?php }?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--product info end-->

<!--product area start-->
<section class="product_area related_products">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>SẢN PHẨM CÙNG LOẠI</h2>
                </div>
            </div>
        </div>
        <div class="product_carousel product_column5 owl-carousel">
            <?php
            foreach ($listspdm as $spdm) {
                extract($spdm);
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