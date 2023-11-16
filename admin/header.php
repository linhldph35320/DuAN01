<!doctype html>
<html lang="en">
   
<!-- Mirrored from templates.iqonic.design/booksto/html/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 08:34:29 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title> Booksto - Responsive Bootstrap 4 Admin Dashboard Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="../css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="../css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="../css/responsive.css">
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="index.php?act=dashboard" class="header-logo">
                  <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
                  <div class="logo-title">
                     <span class="text-primary text-uppercase">Booksto</span>
                  </div>
               </a>
               <div class="iq-menu-bt-sidebar">
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="las la-bars"></i></div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="active active-menu">
                        <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Admin</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="admin" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                           <li class="active"><a href="index.php?act=dashboard"><i class="las la-house-damage"></i>Dashboard</a></li>
                           <li><a href="index.php?act=listdm"><i class="ri-function-line"></i>Danh mục</a></li>
                           <li><a href="index.php?act=listsp"><i class="ri-book-line"></i>Loại sản phẩm</a></li>
                           <li><a href="index.php?act=listspct"><i class="ri-book-line"></i>Sản phẩm chi tiết</a></li>
                           <li><a href="index.php?act=listuser"><i class="ri-book-line"></i>Quản lí tài khoản</a></li>
                           <li><a href="index.php?act=listcomment"><i class="ri-book-line"></i>Quản lí bình luận</a></li>
                           <li><a href="index.php?act=listbill"><i class="ri-book-line"></i>Quản lí đơn hàng</a></li>
                           <li><a href="index.php?act=thoat"><i class="ri-book-line"></i>LogOut</a></li>
                        </ul>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-menu-bt d-flex align-items-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="las la-bars"></i></div>
                     </div>
                     <div class="iq-navbar-logo d-flex justify-content-between">
                        <a href="index.html" class="header-logo">
                           <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
                           <div class="logo-title">
                              <span class="text-primary text-uppercase">Booksto</span>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li class="line-height pt-3">
                           <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                              <img src="images/user/1.jpg" class="img-fluid rounded-circle mr-3" alt="user">
                              <div class="caption">
                                 <h6 class="mb-1 line-height">Barry Tech</h6>
                                 <p class="mb-0 text-primary">$20.32</p>
                              </div>
                           </a>
                           <div class="iq-sub-dropdown iq-user-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white line-height">Hello Barry Tech</h5>
                                       <span class="text-white font-size-12">Available</span>
                                    </div>
                                    <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-file-user-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">My Profile</h6>
                                             <p class="mb-0 font-size-12">View personal profile details.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-profile-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Edit Profile</h6>
                                             <p class="mb-0 font-size-12">Modify your personal details.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-account-box-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Account settings</h6>
                                             <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-lock-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Privacy Settings</h6>
                                             <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <div class="d-inline-block w-100 text-center p-3">
                                       <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>