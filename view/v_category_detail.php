

            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="demo23.html">Trang chủ</a></li>
                        <?php if($spDM[0]['MaDMC']!=0): ?>
                            <li class="breadcrumb-item" aria-current="page">Danh mục <?php foreach ($AllDM as $value) {
                                if($value['MaDM']==$spDM[0]['MaDMC']){echo $value['TenDM'];}} ?></li>
                            <li class="breadcrumb-item active" aria-current="page"><?=$spDM[0]['TenDM']?></li>
                        <?php else: ?>
                            <li class="breadcrumb-item active" aria-current="page">Danh mục <?=$spDM[0]['TenDM']?></li>
                        <?php endif;?>
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
                            <?php foreach ($spDM as $product): ?>
                                <?php if(!$product['GiaGiam']): ?>
                                    <div class="col-6 col-sm-4 col-lg-3">
                                        <div class="product-default inner-quickview inner-icon">
                                            <figure>
                                                <a href="demo23-product.html">
                                                    <img src="<?=$base_url?>upload/demoes/demo23/products/<?= $product['AnhSP'];?>"
                                                        alt="product" style="width: 207px; height: 220px;">
                                                </a>
                                                <div class="btn-icon-group">
                                                    <a href="<?= $base_url ?>product/detail/<?= $product['MaSP'];?>"
                                                        class="btn-icon btn-add-cart fa-solid fa-cart-shopping"></a>
                                                </div>
                                                <a href="ajax/product-quick-view.html" class="btn-quickview"
                                                    title="Quick View">Xem nhanh</a>
                                            </figure>
                                            <div class="product-details">
                                                <div class="category-wrap">
                                                    <div class="category-list">
                                                        <a href="demo23-product.html" class="product-category"><?= $dsdm['TenDM'];?></a>
                                                    </div>
                                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i class="fa-solid fa-heart"></i></a>
                                                </div>
                                                <h3 class="product-title">
                                                    <a href="demo23-product.html"><?= $product['TenSP'];?></a>
                                                </h3>
                                                <?php 
                                                    $product['rating']=ratings_trungbinh($product['MaSP']);
                                                    if($product['rating']['SoSao']!=""&&$product['rating']['SoBinhLuan']>0){
                                                        $product['trungbinh_rating']=ceil(($product['rating']['SoSao']*10)/($product['rating']['SoBinhLuan']/2));
                                                    }else{
                                                        $product['trungbinh_rating']=0;
                                                    }
                                                ?>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:<?=$product['trungbinh_rating']?>%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price"><?= $product['Gia'];?>đ</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="col-6 col-sm-4 col-lg-3">
                                        <div class="product-default inner-quickview inner-icon">
                                            <figure>
                                                <a href="demo23-product.html">
                                                    <img src="<?=$base_url?>upload/demoes/demo23/products/<?= $product['AnhSP'];?>"
                                                        alt="product" style="width: 207px; height: 220px;">
                                                </a>
                                                <div class="label-group">
                                                    <div class="product-label label-sale">-<?=substr((($product['Gia'] - $product['GiaGiam']) / $product['Gia']) * 100, 0, 2)?>%</div>
                                                </div>
                                                <div class="btn-icon-group">
                                                    <a href="<?= $base_url?>product/detail/<?= $product['MaSP'];?>"
                                                        class="btn-icon btn-add-cart fa-solid fa-cart-shopping"></a>
                                                </div>
                                                <a href="ajax/product-quick-view.html" class="btn-quickview"
                                                    title="Quick View">Xem nhanh</a>
                                            </figure>
                                            <div class="product-details">
                                                <div class="category-wrap">
                                                    <div class="category-list">
                                                        <a href="demo23-product.html" class="product-category"><?= $dsdm['TenDM'];?></a>
                                                    </div>
                                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i class="fa-solid fa-heart"></i></a>
                                                </div>
                                                <h3 class="product-title">
                                                    <a href="demo23-product.html"><?= $product['TenSP'];?></a>
                                                </h3>
                                                <?php 
                                                    $product['rating']=ratings_trungbinh($product['MaSP']);
                                                    if($product['rating']['SoSao']!=""&&$product['rating']['SoBinhLuan']>0){
                                                        $product['trungbinh_rating']=ceil(($product['rating']['SoSao']*10)/($product['rating']['SoBinhLuan']/2));
                                                    }else{
                                                        $product['trungbinh_rating']=0;
                                                    }
                                                ?>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:<?=$product['trungbinh_rating']?>%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="old-price"><?= $product['Gia'];?>đ</span>
                                                    <span class="product-price"><?= $product['GiaGiam'];?>đ</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <!-- chỗ lầy là chỗ foeach sản phẩm -->
                            <!-- End .col-lg-3 -->
                        </div><!-- End .row -->

                        <nav class="toolbox toolbox-pagination">
                            <ul class="pagination toolbox-item">
                                <li class="page-item disabled">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                                </li>
                                <?php for($i=1; $i<=$sotrang; $i++): ?>
                                    <?php if(isset($_GET['MaDMC'])): ?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?= $base_url ?>category/detail/<?=$MaDM?>/<?=$MaDMC?>/page/<?=$i?>"><?=$i?></a>
                                        </li>
                                    <?php else: ?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?= $base_url ?>category/detail/<?=$MaDM?>/page/<?=$i?>"><?=$i?></a>
                                        </li>
                                    <?php endif; ?>
                                <?php endfor;?>
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
                                                        <li><a href="#">Đồ chơi<span
                                                                    class="products-count">(1)</span></a>
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