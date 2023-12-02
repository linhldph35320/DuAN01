<?php
if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
    extract($_SESSION['user']);
}
?>
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li>Tài khoản</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!-- my account start  -->
<section class="main_content_area">
    <div class="container">
        <div class="account_dashboard">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#account-details" data-bs-toggle="tab" class="nav-link">Thông tin tài khoản</a>
                            <li> <a href="index.php?act=order&id=<?= $_SESSION['user']['id']?>" class="nav-link">Đơn hàng</a></li>
                            </li>
                            <li><a href="index.php?act=logout" class="nav-link">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-pane fade show active" id="account-details">
                        <?php
                        include "user/userinfo.php";
                        ?>
                    </div>
                    <!-- <div class="tab-pane fade" id="orders">
                        <h3>Orders</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                            <td>1</td>
                                            <td>May 10, 2022</td>
                                            <td><span class="success">Completed</span></td>
                                            <td>$25.00 for 1 item </td>
                                            <td><a href="cart.html" class="view">view</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>May 10, 2022</td>
                                            <td>Processing</td>
                                            <td>$17.00 for 1 item </td>
                                            <td><a href="cart.html" class="view">view</a></td>
                                        </tr> -->
                    <!-- </tbody>
                    </table> -->
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>