<!doctype html>
<html class="no-js" lang="en">


<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Junko - Electronics eCommerce HTML Template</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

<!-- CSS 
    ========================= -->

<!-- Plugins CSS -->
<link rel="stylesheet" href="assetsindex/css/plugins.css">

<!-- Main Style CSS -->
<link rel="stylesheet" href="assetsindex/css/style.css">

</head>

<body>
    <header>
        <div class="main_header">
            <!--header top start-->
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="support_info">
                                <p>Telephone Enquiry: <a href="tel:0123456789">0123456789</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-end">
                                <ul>
                                    <li><a href=""> My Account </a></li>
                                    <li><a href="checkout.html"> Checkout </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header top start-->
            <!--header middel start-->
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6">
                            <div class="middel_right">
                                <div class="search_container">
                                    <form action="index.php?act=timkiem" method="GET">
                                        <div class="hover_category">
                                            <select class="select_option" name="lk_danhmuc" id="categori1">
                                                <option selected></option>
                                                <?php
                                                foreach ($listdm as $dm) {
                                                    extract($dm);
                                                    $viewspdm = "index.php?act=viewspdm&id=" . $id;
                                                    echo '<option value="' . $id . '">' . $tendanhmuc . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="search_box">
                                            <input placeholder="Tìm kiếm sản phẩm..." type="text" name="tim">
                                            <button type="submit" name="timkiem">Tìm</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="middel_right_info">
                                    <div class="mini_cart_wrapper">
                                        <?php include "cart/minicart.php"; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel end-->
            <!--header bottom satrt-->
            <div class="main_menu_area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-12">
                            <div class="categories_menu">
                                <div class="categories_title">
                                    <h2 class="categori_toggle">DANH MỤC</h2>
                                </div>
                                <div class="categories_menu_toggle">
                                    <ul>
                                        <?php
                                        foreach ($listdm as $dm) {
                                            extract($dm);
                                            $viewspdm = "index.php?act=viewspdm&id=" . $id;
                                            echo '<li class="menu_item_children"><a href="#">' . $tendanhmuc . '</a>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="main_menu menu_position">
                                <nav>
                                    <ul>
                                        <li><a class="active" href="index.php">Trang chủ</a>
                                        </li>
                                        <li class="mega_items"><a href="index.php?act=shop">Sản phẩm</a>
                                        </li>
                                        <li><a href="#">blog<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="#">blog details</a></li>
                                                <li><a href="#">blog fullwidth</a></li>
                                                <li><a href="#">blog left sidebar</a></li>
                                                <li><a href="#">blog no sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Page<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">services</a></li>
                                                <li><a href="#">privacy policy</a></li>
                                                <li><a href="#">Frequently Questions</a></li>
                                                <li><a href="#">contact</a></li>
                                                <li><a href="#">login</a></li>
                                                <li><a href="#">Error 404</a></li>
                                                <li><a href="#">Compare</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="#">Về chúng tôi</a></li>
                                        <li><a href="#">Liên hệ với chúng tôi</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header bottom end-->
        </div>
    </header>