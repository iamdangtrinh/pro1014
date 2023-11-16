            <div class="category-banner-container">
                <div class="category-banner">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center text-md-right">
                                <h2 class="font4 font-weight-normal ls-n-25 line-height-1 text-uppercase mb-0">
                                    Giảm giá</h2>
                                <h3 class="ls-n-25 line-height-1 text-uppercase mb-0 ml-0">Lên đến 70%</h3>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="<?=$base_url?>upload/demoes/demo23/banners/category-banner.png" alt="banner"
                                    width="267" height="241">
                            </div>
                            <div class="col-md-4 text-center text-md-left">
                                <a href="#" class="btn btn-link ml-0 p-0"><i>Xem ưu đãi của chúng tôi</i><i class="fa-solid fa-angles-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="demo23.html">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sản Phẩm</li>
                    </ol>
                </div>
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col-lg-9 main-content">
                        <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                            <div class="toolbox-left">
                                <a href="#" class="sidebar-toggle"><svg data-name="Layer 3" id="Layer_3"
                                        viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="15" x2="26" y1="9" y2="9" class="cls-1"></line>
                                        <line x1="6" x2="9" y1="9" y2="9" class="cls-1"></line>
                                        <line x1="23" x2="26" y1="16" y2="16" class="cls-1"></line>
                                        <line x1="6" x2="17" y1="16" y2="16" class="cls-1"></line>
                                        <line x1="17" x2="26" y1="23" y2="23" class="cls-1"></line>
                                        <line x1="6" x2="11" y1="23" y2="23" class="cls-1"></line>
                                        <path
                                            d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z"
                                            class="cls-2"></path>
                                        <path d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z" class="cls-2">
                                        </path>
                                        <path d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z" class="cls-3"></path>
                                        <path
                                            d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z"
                                            class="cls-2"></path>
                                    </svg>
                                    <span>Bộ lọc</span>
                                </a>

                                <div class="toolbox-item toolbox-sort">
                                    <label>Phân loại:</label>

                                    <div class="select-custom">
                                        <select name="orderby" class="form-control">
                                            <option value="menu_order" selected="selected">Mặc định</option>
                                            <option value="popularity">Phổ biến</option>
                                            <option value="rating">Đánh giá tốt</option>
                                            <option value="date">Mới nhất </option>
                                            <option value="price">Giá từ thấp -> cao</option>
                                            <option value="price-desc">Giá từ cao -> thấp</option>
                                        </select>
                                    </div><!-- End .select-custom -->


                                </div><!-- End .toolbox-item -->
                            </div><!-- End .toolbox-left -->

                            <div class="toolbox-right">
                                <div class="toolbox-item toolbox-show">
                                    <label>Hiển thị:</label>

                                    <div class="select-custom">
                                        <select name="count" class="form-control">
                                            <option value="12">12</option>
                                            <option value="24">24</option>
                                            <option value="36">36</option>
                                        </select>
                                    </div><!-- End .select-custom -->
                                </div><!-- End .toolbox-item -->

                                <div class="toolbox-item layout-modes">
                                    <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                                        <i class="icon-mode-grid"></i>
                                    </a>
                                    <a href="category-list.html" class="layout-btn btn-list" title="List">
                                        <i class="icon-mode-list"></i>
                                    </a>
                                </div><!-- End .layout-modes -->
                            </div><!-- End .toolbox-right -->
                        </nav>
 <!-- chỗ lầy là chỗ foeach sản phẩm -->
                        <div class="row">
                        <?php foreach ($product_shop as $product): ?>
                            <div class="col-6 col-sm-4 col-lg-3">
                                <div class="product-default inner-quickview inner-icon">
                                    <figure>
                                        <a href="demo23-product.html">
                                            <img src="<?=$base_url?>upload/demoes/demo23/products/<?= $product['AnhSP'];?>" alt="product" style="width: 207px; height: 220px;">
                                        </a>
                                        <div class="label-group">
                                            <div class="product-label label-sale">-89%</div>
                                        </div>
                                        <div class="btn-icon-group">
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                    class="icon-shopping-cart" style ="color:#000";></i></a>
                                        </div>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview"
                                            title="Quick View">Xem nhanh</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="demo23-product.html" class="product-category">Loại</a>
                                            </div>
                                            <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                        <h3 class="product-title">
                                            <a href="demo23-product.html"><?= $product['TenSP'];?></a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="old-price"><?= $product['Gia'];?>đ</span>
                                            <span class="product-price"><?= $product['Gia'];?>đ</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                            </div>
                            <?php endforeach; ?>
<!-- chỗ lầy là chỗ foeach sản phẩm -->
                            <!-- End .col-lg-3 -->
                        </div><!-- End .row -->

                        <nav class="toolbox toolbox-pagination">
                            <div class="toolbox-item toolbox-show">
                                <label class="mt-0">Hiển thị:</label>

                                <div class="select-custom">
                                    <select name="count" class="form-control">
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                        <option value="36">36</option>
                                    </select>
                                </div><!-- End .select-custom -->
                            </div><!-- End .toolbox-item -->

                            <ul class="pagination toolbox-item">
                                <li class="page-item disabled">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1 <span class="sr-only">(hiện hành)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><span class="page-link">...</span></li>
                                <li class="page-item">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- End .col-lg-9 -->

                    <div class="sidebar-overlay"></div>
                    <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
                        <div class="sidebar-wrapper">
                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-1" role="button" aria-expanded="true"
                                        aria-controls="widget-body-1">Thể loại</a>
                                </h3>

                                <div class="collapse show" id="widget-body-1">
                                    <div class="widget-body">
                                        <ul class="cat-list">
                                            <li>
                                                <a href="#widget-category-1" data-toggle="collapse" role="button"
                                                    aria-expanded="true" aria-controls="widget-category-1">
                                                    Em Bé<span class="products-count">(4)</span>
                                                    <span class="toggle"></span>
                                                </a>
                                                <div class="collapse show" id="widget-category-1">
                                                    <ul class="cat-sublist">
                                                        <li><a href="#">Đồ chơi<span class="products-count">(1)</span></a>
                                                        </li>
                                                        <li><a href="#">Quần dài<span
                                                                    class="products-count">(2)</span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#widget-category-2" class="collapsed" data-toggle="collapse"
                                                    role="button" aria-expanded="false"
                                                    aria-controls="widget-category-2">
                                                    Bé Trai<span class="products-count">(8)</span>
                                                    <span class="toggle"></span>
                                                </a>
                                                <div class="collapse" id="widget-category-2">
                                                    <ul class="cat-sublist">
                                                        <li>Quần áo<span class="products-count">(3)</span></li>
                                                        <li>Giày<span class="products-count">(2)</span></li>
                                                        <li>Đò chơi<span class="products-count">(1)</span></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#">Quà tặng<span class="products-count">(4)</span></a>
                                            </li>
                                            <li>
                                                <a href="#widget-category-4" class="collapsed" data-toggle="collapse"
                                                    role="button" aria-expanded="false"
                                                    aria-controls="widget-category-4">
                                                    Bé Gái<span class="products-count">(5)</span>
                                                    <span class="toggle"></span>
                                                </a>
                                                <div class="collapse" id="widget-category-4">
                                                    <ul class="cat-sublist">
                                                        <li>Quà tặng<span class="products-count">(4)</span></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true"
                                        aria-controls="widget-body-2">Giá</a>
                                </h3>

                                <div class="collapse show" id="widget-body-2">
                                    <div class="widget-body pt-4 pb-0">
                                        <form action="#">
                                            <div class="price-slider-wrapper">
                                                <div id="price-slider"></div><!-- End #price-slider -->
                                            </div><!-- End .price-slider-wrapper -->

                                            <div
                                                class="filter-price-action d-flex align-items-center justify-content-between flex-wrap">
                                                <div class="filter-price-text">
                                                    Giá:
                                                    <span id="filter-price-range"></span>
                                                </div><!-- End .filter-price-text -->

                                                <button type="submit" class="btn btn-primary">Bộ lọc</button>
                                            </div><!-- End .filter-price-action -->
                                        </form>
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget widget-color">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true"
                                        aria-controls="widget-body-3">Màu sắc</a>
                                </h3>

                                <div class="collapse show" id="widget-body-3">
                                    <div class="widget-body pb-0">
                                        <ul class="config-swatch-list">
                                            <li class="active">
                                                <a href="#" style="background-color: #000;">Màu Đen</a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #0188cc;">Màu xanh dương</a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #81d742;">Màu xanh lá</a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #eded65;">Màu vàng</a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #6085a5;">Màu xanh đậm</a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #83c2bd;">Màu xanh nhạt</a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #ab6e6e;">Màu đỏ</a>
                                            </li>
                                        </ul>
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-4" role="button" aria-expanded="true"
                                        aria-controls="widget-body-4">Kích cỡ</a>
                                </h3>

                                <div class="collapse show" id="widget-body-4">
                                    <div class="widget-body">
                                        <ul class="cat-list">
                                            <li><a href="#">XL</a></li>
                                            <li><a href="#">L</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">S</a></li>
                                        </ul>
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                            <div class="widget widget-featured pb-0">
                                <h3 class="widget-title">Sản phẩm nổi bật</h3>

                                <div class="widget-body">
                                    <div class="featured-col">
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="demo23-product.html">
                                                    <img src="<?=$base_url?>upload/demoes/demo23/products/small/product-1.jpg"
                                                        width="75" height="75" alt="product" />
                                                    <img src="<?=$base_url?>upload/demoes/demo23/products/small/product-6.jpg"
                                                        width="75" height="75" alt="product" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-title">
                                                    <a href="demo23-product.html">Giày bé gái mùa đông màu hồng</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:80%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">101.000đ &ndash; 111.000đ</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="demo23-product.html">
                                                    <img src="<?=$base_url?>upload/demoes/demo23/products/small/product-2.jpg"
                                                        width="75" height="75" alt="product" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-title">
                                                    <a href="demo23-product.html">Máy ảnh mở rộng Porto</a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:0%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">599.000đ</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                    </div><!-- End .featured-col -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .widget -->
                        </div><!-- End .sidebar-wrapper -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->