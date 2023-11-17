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

    <!-- linh cdn fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/style23.css">
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/demo23.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/all.min.css">

    <!-- Js -->
    <script src="<?= $base_url ?>assets/js/jquery.min.js"></script>
    <script src="<?= $base_url ?>assets/js/validate.js"></script>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <div class="top-notice font2">
            <div class="container-fluid text-center m-auto text-dark">
                <i class="fa-solid fa-truck"></i> <b class="text-uppercase">Miễn phí vận chuyển</b>&nbsp;hóa đơn từ
                300.000 VND hoặc nhiều hơn!
                Code:&nbsp;<b class="text-uppercase">Cáigìđó</b>&nbsp;| Hạn chế áp dụng.&nbsp;<a href=""
                    class="text-dark">Xem tất cả ưu đãi</a>
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
                        <?php if (isset($_SESSION['user'])): ?>
                            <a href="<?= $base_url?>user/dashboard" class="header-icon d-lg-block d-none">
                                <div class="header-user">
                                    <img src="<?= $base_url ?>upload/avatar/<?= $_SESSION['user']['HinhAnh'] ?>"
                                        alt="Avatar">
                                    <div class="header-userinfo">
                                        <span class="d-inline-block font2 line-height-1">Xin chào!</span>
                                        <h4 class="mb-0">
                                            <?= $_SESSION['user']['HoTen'] ?>
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        <?php else: ?>
                            <a href="<?= $base_url ?>user/register"
                                class="btn btn-outline-primary p-3 mr-2 line-height-1">Đăng ký</a>
                            <a href="<?= $base_url ?>user/login" class="btn btn-outline-primary p-3 mr-4 line-height-1">Đăng
                                nhập</a>
                        <?php endif ?>

                        <a href="wishlist.html" class="header-icon">
                            <i class="fa-regular fa-heart"></i>
                        </a>

                        <!-- menu mobile -->
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

                                    <div class="dropdown-cart-products">
                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="">Tên sản phẩm</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    Giá sản phẩm
                                                </span>
                                            </div>

                                            <figure class="product-image-container">
                                                <a href="" class="product-image">
                                                    <img src="<?= $base_url ?>upload/products/product-1.jpg"
                                                        alt="product" width="80" height="80">
                                                </a>

                                                <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div>
                                    </div>

                                    <div class="dropdown-cart-total">
                                        <span>TỔNG PHỤ:</span>

                                        <span class="cart-total-price float-right">Giá tiền</span>
                                    </div>

                                    <div class="dropdown-cart-action">
                                        <a href="cart.html" class="btn btn-gray btn-block view-cart">Xem giỏ hàng</a>
                                        <a href="checkout.html" class="btn btn-dark btn-block">Kiểm tra</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="header-search header-search-popup header-search-category text-right d-flex d-lg-none">
                            <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i><span>Tìm
                                    kiếm</span></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q"
                                        placeholder="Nhập tên sản phẩm..." required>
                                    <div class="select-custom">

                                    </div>
                                    <button class="btn p-0" type="submit"><i class="icon-magnifier"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-bottom sticky-header" data-sticky-options="{'mobile': false}">
                <div class="container-fluid">
                    <div class="header-center w-auto" style="margin-left:33%">
                        <nav class="main-nav">
                            <ul class="menu">
                                <li class="active">
                                    <a href="<?= $base_url ?>page/home">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="<?= $base_url ?>page/shop">Danh mục <i
                                            class="fa-solid fa-caret-down"></i></a>
                                    <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                    
                                    <div class="row">
                                        <?php 
                                            $kiemtra_dm = null;
                                            foreach ($danhmuc as $item_dm): 
                                                if ($item_dm['TenDM'] != $kiemtra_dm) {
                                                    if ($kiemtra_dm != null) {
                                                        echo '</ul></div>';
                                                    }
                                                    echo '<div class="col-lg-4">';
                                                    echo '<a href="#" class="nolink">'.$item_dm['TenDM'].'</a>';
                                                    echo '<ul class="submenu">';
                                                    $kiemtra_dm = $item_dm['TenDM'];
                                                }
                                        ?>
                                            <li><a href="category-horizontal-filter2.html"><?=$item_dm['TenDMC']?></a></li>
                                        <?php endforeach; if ($kiemtra_dm != null) { echo '</ul></div>'; }?>
                                    </div>

                                    </div>
                                </li>
                                <li>
                                    <a href="<?= $base_url ?>page/shop">Sản phẩm <i
                                            class="fa-solid fa-caret-down"></i></a>
                                    <div class="megamenu megamenu-fixed-width">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">Trang sản phẩm</a>
                                                <ul class="submenu">
                                                    <li><a href="">SIMPLE PRODUCT</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-none d-xl-block">
                                    <a href="#">Liên hệ <i class="fa-solid fa-caret-down"></i></a>
                                    <ul>
                                        <li><a href="wishlist.html">Wishlist</a></li>

                                    </ul>
                                </li>
                                <li><a href="blog.html">Về chúng tôi</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- search -->
                    <div class="d-flex pr-0">
                        <div class="header-search-main header-search header-search-category text-right">
                            <form id="form_search" action="" method="post">

                                <div class="input-group input-group-main input-focus">
                                    <input autocomplete="off" class="form-input" id="search_ajax" type="text" name="search"
                                        placeholder="Nhập sản phẩm cần tìm kiếm">
                                    <div id="search_result" class="row input-search">
                                        <div class="col-md-4 img-focus">
                                            <img src="<?= $base_url ?>upload/demoes/demo23/products/product-1.jpg"
                                                width="50" height="50" alt="product">
                                        </div>
                                        <div class="col-md-8 mt-2 content-focus">Giày đan </div>
                                    </div>
                                    <input type="submit" name="search" value="Tìm ngay" class="btn-primary">

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
        </header>

        <main class="main">
            <!-- ruot cua WEBSITE -->
            <?php include_once 'view/v_' . $view_name . '.php'; ?>
        </main>

        <footer class="footer">
            <div class="footer-middle">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-xl-4">
                            <a href="#">
                                <img class="logo mb-3" src="<?= $base_url ?>upload/demoes/demo23/logo.png"
                                    alt="SHop bé yêu" width="113" height="48"></a>

                            <div class="row">
                                <div class="col-sm-6 pr-sm-0">
                                    <div class="contact-widget m-b-3">
                                        <h4 class="widget-title font2">ĐỊA CHỈ:</h4>
                                        <a href="#">Cao đẳng FPT</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 pl-sm-0">
                                    <div class="contact-widget m-b-3">
                                        <h4 class="widget-title font2">PHONE:</h4>
                                        <a href="#">19001010</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 pr-sm-0">
                                    <div class="contact-widget m-b-3">
                                        <h4 class="widget-title font2">EMAIL:</h4>
                                        <a href=""><span class="__cf_email__" data-cfemail="">
                                                shopbeyeu@contact.com</span></a>
                                    </div>
                                </div>
                                <div class="col-sm-6 pl-sm-0">
                                    <div class="contact-widget m-b-3">
                                        <h4 class="widget-title font2">
                                            NGÀY/GIỜ LÀM VIỆC:
                                        </h4>
                                        <a href="#">Thứ hai - Chủ nhật: 8:00 - 21:00</a>
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
                                <h4 class="widget-title">Tài khoản</h4>
                                <div class="row link-lg link-parts">
                                    <ul class="links mb-0">
                                        <li>
                                            <a href="dashboard.html">Tài khoản của tôi</a>
                                        </li>
                                        <li><a href="#">Theo dõi đơn hàng của bạn</a></li>
                                        <li><a href="#">Phương thức thanh toán</a></li>
                                        <li><a href="#">Hướng dẫn vận chuyển</a></li>
                                        <li><a href="#">Câu hỏi thường gặp</a></li>
                                        <li><a href="#">Hỗ trợ sản phẩm</a></li>
                                        <li><a href="#">Quyền riêng tư</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="widget">
                                <h4 class="widget-title">VỀ CHÚNG TÔI</h4>
                                <div class="row">
                                    <ul class="links mb-0">
                                        <li>
                                            <a href="about.html">Về BEYEU</a>
                                        </li>
                                        <li><a href="#">Cam kết của chúng tôi</a></li>
                                        <li><a href="#">Điều khoản và điều kiện</a></li>
                                        <li><a href="#">Chính sách quyền riêng tư</a></li>
                                        <li><a href="#">Chính sách đổi trả</a></li>
                                        <li>
                                            <a href="#">Yêu cầu quyền sở hữu trí tuệ</a>
                                        </li>
                                        <li><a href="#">Bản đồ trang Web</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-2">
                            <div class="widget">
                                <h4 class="widget-title">BẢN TIN</h4>
                                <div class="widget-newsletter">
                                    <div class="widget-newsletter-info">
                                        <p class="widget-newsletter-content m-b-4">Nhận thông tin mới nhất về Sự kiện,
                                            Khuyến mãi và Ưu đãi. Đăng ký nhận bản tin ngay hôm nay.</p>
                                    </div>
                                    <form action="#">
                                        <div class="footer-submit-wrapper d-flex">
                                            <input type="email" class="form-control mb-0" placeholder="Địa chỉ Email"
                                                size="40" required>
                                            <button type="submit" class="btn btn-primary btn-sm ls-0">Đăng ký</button>
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
                        <span class="footer-copyright">© Cửa hàng bé yêu. 2023. Đã đăng ký.</span>
                    </div>

                    <div class="footer-right ml-auto mt-1 mt-sm-0">
                        <img src="<?= $base_url ?>upload/demoes/demo23/payment-icon.png" alt="payment">
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- loading -->
    <!-- <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div> -->

    <div class="mobile-menu-overlay"></div>

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li><a href="<?= $base_url ?>page/home">Home</a></li>
                    <li>
                        <a href="">Categories</a>
                        <ul>
                            <li><a href="category-8col.html">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Products</a>
                        <ul>
                            <li>
                                <a href="#" class="nolink">PRODUCT PAGES</a>
                                <ul>
                                    <li><a href="">SIMPLE PRODUCT</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                <ul>
                                    <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
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
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
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
            </nav>
        </div>
    </div>

    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="<?= $base_url ?>page/home">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="" class="">
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

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="fa-solid fa-arrow-up"></i></a>

    <!-- Plugins JS File -->
    <script src="<?= $base_url ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $base_url ?>assets/js/plugins.min.js"></script>
    <script src="<?= $base_url ?>assets/js/optional/isotope.pkgd.min.js"></script>
    <script src="<?= $base_url ?>assets/js/jquery.appear.min.js"></script>
    <script src="<?= $base_url ?>assets/js/jquery.plugin.min.js"></script>
    <script src="<?= $base_url ?>assets/js/main.min.js"></script>
    <script src="<?= $base_url ?>assets/js/map.js"></script>

    <!-- <script>
        $(document).ready(
            function() {

                $("#search_ajax").keyup(function() {
                    var search_item = $(this).val();
                    if(search_item != "") {
                        $.ajax({
                            url: 'seqarch_ajax',
                            method: 'POST',
                            data: $(form).serializeArray(),
                            success:function(data) {
                                $('#search_result').html(data)
                            }
                        })
                    }

                })

            })
    </script> -->
</body>



</html>