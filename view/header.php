<!doctype html>
<html class="no-js" lang="en">


<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Junko - Electronics eCommerce HTML Template</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                                <p>Liên hệ: <a href="tel:0123456789">0123456789JQK</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-end">
                                <ul>
                                    <li>
                                        <?php
                                        if (!isset($_SESSION['user'])) {
                                            echo '<a href="index.php?act=dangkydangnhap"> Tài khoản </a>';
                                        } else {
                                            echo '<a href="index.php?act=account"> Tài khoản </a>';
                                        }
                                        ?>
                                    </li>
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
                                    <form action="index.php?act=timkiem" method="POST">
                                        <div class="search_box">
                                            <input placeholder="Tìm kiếm sản phẩm..." type="text" name="tim" required>
                                            <button><input type="submit" name="timkiem" value="Tìm"></button>
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
                                            echo '<li class="menu_item_children"><a href="' . $viewspdm . '">' . $tendanhmuc . '</a>';
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