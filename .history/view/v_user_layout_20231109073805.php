<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?= $title ?>
    </title>
    <meta name="description" content="Website bán hàng">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= $base_url ?>upload/icons/favicon.png">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/style23.css">
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/demo23.min.css">

    <!-- Js -->
    <script src="<?= $base_url ?>assets/js/jquery.min.js"></script>
    <script src="<?= $base_url ?>assets/js/validate.js"></script>

</head>

<body>
    <div class="page-wrapper">
        <div class="top-notice font2">
            <div class="container-fluid text-center text-dark">
                <i class="icon-shipping align-middle"></i><b class="text-uppercase">Miễn phí vận chuyển</b>&nbsp;hóa đơn từ
                $80 hoặc nhiều hơn!
                Code:&nbsp;<b class="text-uppercase">Cáigìđó</b>&nbsp;| Hạn chế áp dụng.&nbsp;<a
                    href="demo23-shop.html" class="text-dark">Xem tất cả ưu đãi</a>
            </div>
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </div>

        <header class="header">
            <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
                <div class="container-fluid">
                    <div class="header-center ml-0 ml-lg-auto">
                        <button class="mobile-menu-toggler" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="<?= $base_url ?>page/home" class="logo">
                            <img src="<?= $base_url ?>upload/demoes/demo23/logo.png" alt="Porto Logo" width="113"
                                height="48">
                        </a>
                    </div>

                    <div class="header-right">
                        <div class="d-lg-block d-none">
                            <div class="header-userinfo">
                                <div class="header-user">
                                    <?php if (isset($_SESSION['user'])): ?>
                                        <i class="icon-user-2"></i>
                                        <div class="">
                                            <span class="d-inline-block font2 line-height-1">Xin chào!</span>
                                            <h4 class="mb-0">
                                                <?php echo strstr($_SESSION['user']['Email'], '@', true) ?>
                                            </h4>
                                        </div>
                                    <?php else: ?>
                                        <a href="<?= $base_url ?>user/register"
                                            class="btn btn-primary mr-2 line-height-1">Đăng ký</a>
                                        <a href="<?= $base_url ?>user/login"
                                            class="btn btn-primary ml-2 line-height-1">Đăng nhập</a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>

                        <a href="wishlist.html" class="header-icon">
                            <i class="icon-wishlist-2"></i>
                        </a>

                        <div class="dropdown cart-dropdown">
                            <a href="#" title="Cart" class="dropdown-toggle cart-toggle" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="minicart-icon"></i>
                                <span class="cart-count badge-circle">3</span>
                            </a>

                            <div class="cart-overlay"></div>

                            <div class="dropdown-menu mobile-cart">
                                <a href="#" title="Close (Esc)" class="btn-close">×</a>

                                <div class="dropdownmenu-wrapper custom-scrollbar">
                                    <div class="dropdown-cart-header">Giỏ hàng</div>
                                    <!-- End .dropdown-cart-header -->

                                    <div class="dropdown-cart-products">
                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="demo23-product.html">Tên sản phẩm</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    Giá sản phẩm
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo23-product.html" class="product-image">
                                                    <img src="<?= $base_url ?>upload/products/product-1.jpg"
                                                        alt="product" width="80" height="80">
                                                </a>

                                                <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div><!-- End .product -->

                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="demo23-product.html">Tên sản phẩm</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    Giá tiền
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo23-product.html" class="product-image">
                                                    <img src="<?= $base_url ?>upload/products/product-2.jpg"
                                                        alt="product" width="80" height="80">
                                                </a>

                                                <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div><!-- End .product -->

                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="demo23-product.html">Tên sản phẩm</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    Giá tiền
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo23-product.html" class="product-image">
                                                    <img src="<?= $base_url ?>upload/products/product-3.jpg"
                                                        alt="product" width="80" height="80">
                                                </a>
                                                <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div><!-- End .product -->
                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>TỔNG PHỤ:</span>

                                        <span class="cart-total-price float-right">Giá tiền</span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="cart.html" class="btn btn-gray btn-block view-cart">Xem giỏ hàng</a>
                                        <a href="checkout.html" class="btn btn-dark btn-block">Kiểm tra</a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdownmenu-wrapper -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .dropdown -->

                        <div
                            class="header-search header-search-popup header-search-category text-right d-flex d-lg-none">
                            <a href="#" class="search-toggle" role="button"><i
                                    class="icon-magnifier"></i><span>Tìm kiếm</span></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q"
                                        placeholder="I'm searching for..." required>
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">Tất cả danh mục</option>
                                            <option value="4">Thời trang</option>

                                        </select>
                                    </div><!-- End .select-custom -->
                                    <button class="btn icon-magnifier p-0" title="search" type="submit"></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>
                </div>
            </div>

            <div class="header-bottom sticky-header" data-sticky-options="{'mobile': false}">
                <div class="container-fluid">
                    <div class="header-center w-auto">
                        <nav class="main-nav">
                            <ul class="menu">
                                <li class="active">
                                    <a href="<?= $base_url ?>page/home">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="<?= $base_url ?>page/shop">Danh mục</a>
                                    <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">Danh mục 1</a>
                                                <ul class="submenu">

                                                    <li><a href="category-horizontal-filter2.html">Horizontal
                                                            Filter2</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="demo23-product.html">Sản phẩm</a>
                                    <div class="megamenu megamenu-fixed-width">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">Trang sản phẩm</a>
                                                <ul class="submenu">
                                                    <li><a href="demo23-product.html">SIMPLE PRODUCT</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-none d-xl-block">
                                    <a href="#">Về chúng tôi</a>
                                    <ul>
                                        <li><a href="wishlist.html">Wishlist</a></li>

                                    </ul>
                                </li>
                                <li><a href="blog.html">Bài viết</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- search -->
                    <div class="header-right d-flex pr-0">
                        <div class="header-search header-search-popup header-search-category text-right">
                            <a href="#" class="search-toggle" role="button"><i
                                    class="icon-magnifier mr-2"></i><span>Tìm kiếm</span></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q1"
                                        placeholder="Tiềm kiếm tên sản phẩm..." required>
                                    <button class="btn icon-magnifier p-0" title="search" type="submit"></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>
                </div>
            </div>
        </header><!-- End .header -->

        <main class="main">
            <!-- ruot cua WEBSITE -->
            <?php include_once 'view/v_' . $view_name . '.php'; ?>
        </main><!-- End .main -->

        <footer class="footer">
            <div class="footer-middle">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-xl-4">
                            <a href="#">
                                <img class="logo mb-3" src="<?= $base_url ?>upload/demoes/demo23/logo.png"
                                    alt="Porto Logo" width="113" height="48"></a>

                            <div class="row">
                                <div class="col-sm-6 pr-sm-0">
                                    <div class="contact-widget m-b-3">
                                        <h4 class="widget-title font2">ĐỊA CHỈ:</h4>
                                        <a href="#">Công viên phần mềm Quang Trung</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 pl-sm-0">
                                    <div class="contact-widget m-b-3">
                                        <h4 class="widget-title font2">SỐ ĐIỆN THOẠI:</h4>
                                        <a href="#">00000000000000</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 pr-sm-0">
                                    <div class="contact-widget m-b-3">
                                        <h4 class="widget-title font2">EMAIL:</h4>
                                        <a
                                            href="https://portotheme.com/cdn-cgi/l/email-protection#b4d9d5ddd8f4d1ccd5d9c4d8d19ad7dbd9"><span
                                                class="__cf_email__"
                                                data-cfemail="533e323a3f13362b323e233f367d303c3e">[email&#160;protected]</span></a>
                                    </div>
                                </div>
                                <div class="col-sm-6 pl-sm-0">
                                    <div class="contact-widget m-b-3">
                                        <h4 class="widget-title font2">
                                            THỜI GIAN MỞ CỬA:
                                        </h4>
                                        <a href="#">T2 - CN : 8H - 18H</a>
                                    </div>
                                </div>
                            </div>
                            <div class="social-icons mt-1 mb-3">
                                <a href="#" class="social-icon social-facebook" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-icon social-twitter" target="_blank"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="#" class="social-icon social-linkedin" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-2">
                            <div class="widget">
                                <h4 class="widget-title">TÀI KHOẢN</h4>
                                <div class="row link-lg link-parts">
                                    <div class="col-6 link-part">
                                        <ul class="links mb-0">
                                            <li>
                                                <a href="dashboard.html">T</a>
                                            </li>
                                            <li><a href="#">Track Your Order</a></li>
                                            <li><a href="#">Payment Methods</a></li>
                                            <li><a href="#">Shipping Guide</a></li>
                                            <li><a href="#">FAQs</a></li>
                                            <li><a href="#">Product Support</a></li>
                                            <li><a href="#">Privacy</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 link-part">
                                        <ul class="links mb-0">
                                            <li>
                                                <a href="#">Orders History</a>
                                            </li>
                                            <li><a href="#">Advanced Search</a></li>
                                            <li><a href="#">Affiliate Program</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="widget">
                                <h4 class="widget-title">About</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="links mb-0">
                                            <li>
                                                <a href="about.html">About Porto</a>
                                            </li>
                                            <li><a href="#">Our Guarantees</a></li>
                                            <li><a href="#">Terms And Conditions</a></li>
                                            <li><a href="#">Privacy policy</a></li>
                                            <li><a href="#">Return Policy</a></li>
                                            <li>
                                                <a href="#">Intellectual Property Claims</a>
                                            </li>
                                            <li><a href="#">Site Map</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <ul class="links mb-0">
                                            <li>
                                                <a href="#">Site Index</a>
                                            </li>
                                            <li><a href="#">Porto for the Press</a></li>
                                            <li><a href="#">Business Accounts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-2">
                            <div class="widget">
                                <h4 class="widget-title">Newsletter</h4>
                                <div class="widget-newsletter">
                                    <div class="widget-newsletter-info">
                                        <p class="widget-newsletter-content m-b-4">Get all the latest
                                            information on
                                            Events, Sales and Offers. Sign up for newsletter today</p>
                                    </div>
                                    <form action="#">
                                        <div class="footer-submit-wrapper d-flex">
                                            <input type="email" class="form-control mb-0" placeholder="Email Address"
                                                size="40" required>
                                            <button type="submit" class="btn btn-primary btn-sm ls-0">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container-fluid d-sm-flex align-items-center">
                    <div class="footer-left">
                        <span class="footer-copyright">© Porto eCommerce. 2021. All Rights Reserved</span>
                    </div>

                    <div class="footer-right ml-auto mt-1 mt-sm-0">
                        <img src="<?= $base_url ?>upload/demoes/demo23/payment-icon.png" alt="payment">
                    </div>
                </div>
            </div><!-- End .footer-bottom -->
        </footer>
    </div><!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li><a href="<?= $base_url ?>page/home">Home</a></li>
                    <li>
                        <a href="demo23-shop.html">Categories</a>
                        <ul>
                            <li><a href="category.html">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                            <li><a href="category-sidebar-left.html">Left Sidebar</a></li>
                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                            <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                            <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                            <li><a href="#">List Types</a></li>
                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span
                                        class="tip tip-new">New</span></a></li>
                            <li><a href="category.html">3 Columns Products</a></li>
                            <li><a href="category-4col.html">4 Columns Products</a></li>
                            <li><a href="category-5col.html">5 Columns Products</a></li>
                            <li><a href="category-6col.html">6 Columns Products</a></li>
                            <li><a href="category-7col.html">7 Columns Products</a></li>
                            <li><a href="category-8col.html">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="demo23-product.html">Products</a>
                        <ul>
                            <li>
                                <a href="#" class="nolink">PRODUCT PAGES</a>
                                <ul>
                                    <li><a href="demo23-product.html">SIMPLE PRODUCT</a></li>
                                    <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                                    <li><a href="demo23-product.html">SALE PRODUCT</a></li>
                                    <li><a href="demo23-product.html">FEATURED & ON SALE</a></li>
                                    <li><a href="product-sticky-info.html">WIDTH CUSTOM TAB</a></li>
                                    <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
                                    <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a></li>
                                    <li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                <ul>
                                    <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
                                    <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                    <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                                    <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                    <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
                                    <li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a></li>
                                    <li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
                                    <li><a href="#">BUILD YOUR OWN</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                        <ul>
                            <li>
                                <a href="wishlist.html">Wishlist</a>
                            </li>
                            <li>
                                <a href="cart.html">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="checkout.html">Checkout</a>
                            </li>
                            <li>
                                <a href="dashboard.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="forgot-password.html">Forgot Password</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li>
                        <a href="#">Elements</a>
                        <ul class="custom-scrollbar">
                            <li><a href="element-accordions.html">Accordion</a></li>
                            <li><a href="element-alerts.html">Alerts</a></li>
                            <li><a href="element-animations.html">Animations</a></li>
                            <li><a href="element-banners.html">Banners</a></li>
                            <li><a href="element-buttons.html">Buttons</a></li>
                            <li><a href="element-call-to-action.html">Call to Action</a></li>
                            <li><a href="element-countdown.html">Count Down</a></li>
                            <li><a href="element-counters.html">Counters</a></li>
                            <li><a href="element-headings.html">Headings</a></li>
                            <li><a href="element-icons.html">Icons</a></li>
                            <li><a href="element-info-box.html">Info box</a></li>
                            <li><a href="element-posts.html">Posts</a></li>
                            <li><a href="element-products.html">Products</a></li>
                            <li><a href="element-product-categories.html">Product Categories</a></li>
                            <li><a href="element-tabs.html">Tabs</a></li>
                            <li><a href="element-testimonial.html">Testimonials</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="mobile-menu mt-2 mb-2">
                    <li class="border-0">
                        <a href="#">
                            Special Offer!
                        </a>
                    </li>
                    <li class="border-0">
                        <a href="../../../1.envato.market/DdLk5" target="_blank">
                            Buy Porto!
                            <span class="tip tip-hot">Hot</span>
                        </a>
                    </li>
                </ul>

                <ul class="mobile-menu">
                    <li><a href="login.html">My Account</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="wishlist.html">My Wishlist</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="login.html" class="login-link">Log In</a></li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <form class="search-wrapper mb-2" action="#">
                <input type="text" class="form-control mb-0" placeholder="Search..." required />
                <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
            </form>

            <div class="social-icons">
                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
                </a>
                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
                </a>
                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
                </a>
            </div>
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="<?= $base_url ?>page/home">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="demo23-shop.html" class="">
                <i class="icon-bars"></i>Categories
            </a>
        </div>
        <div class="sticky-info">
            <a href="wishlist.html" class="">
                <i class="icon-wishlist-2"></i>Wishlist
            </a>
        </div>
        <div class="sticky-info">
            <a href="login.html" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="cart.html" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle">3</span>
                </i>Cart
            </a>
        </div>
    </div>

    <!-- popup  -->
    <!-- <div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form"
        style="background: #f1f1f1 no-repeat center/cover url(<?= $base_url ?>upload/newsletter_popup_bg.jpg)">
        <div class="newsletter-popup-content">
            <img src="<?= $base_url ?>upload/logo-black.png" alt="Logo" class="logo-newsletter" width="111" height="44">
            <h2 class="ls-n-25">Subscribe to newsletter</h2>

            <p class="font2">
                Subscribe to the Porto mailing list to receive updates on new
                arrivals, special offers and our promotions.
            </p>

            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email"
                        placeholder="Your email address" required />
                    <input type="submit" class="btn btn-primary" value="Submit" />
                </div>
            </form>
            <div class="newsletter-subscribe">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" value="0" id="show-again" />
                    <label for="show-again" class="custom-control-label font2">
                        Don't show this popup again
                    </label>
                </div>
            </div>
        </div>

        <button title="Close (Esc)" type="button" class="mfp-close">
            ×
        </button>
    </div> -->

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="<?= $base_url ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $base_url ?>assets/js/plugins.min.js"></script>
    <script src="<?= $base_url ?>assets/js/optional/isotope.pkgd.min.js"></script>
    <script src="<?= $base_url ?>assets/js/jquery.appear.min.js"></script>
    <script src="<?= $base_url ?>assets/js/jquery.plugin.min.js"></script>

    <!-- Main JS File -->
    <script src="<?= $base_url ?>assets/js/main.min.js"></script>
</body>



</html>