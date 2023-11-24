            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <li><a href="demo1.html"><i class="fa-solid fa-house"></i></a></li>
                        <li><i class="fa-solid fa-angle-right"></i><a href="#">
                                <??>
                            </a></li>
                    </ol>
                </nav>
                <div class="product-single-container product-single-default">
                    <div class="cart-message d-none">
                        <strong class="single-cart-notice">Quần áo</strong>
                        <spanh>Đã thêm vào giỏ hàng </span>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-6 product-single-gallery">
                            <div class="product-slider-container">
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                    <!---->
                                    <div class="product-label label-sale">
                                        -16%
                                    </div>
                                </div>

                                <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                                    <div class="product-item">
                                        <img class="product-single-image"
                                            src="<?=$base_url?>upload/products/zoom/product-1-big.jpg"
                                            data-zoom-image="<?=$base_url?>upload/products/zoom/product-1-big.jpg"
                                            width="468" height="468" alt="product" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image"
                                            src="<?=$base_url?>upload/products/zoom/product-2-big.jpg"
                                            data-zoom-image="<?=$base_url?>upload/products/zoom/product-2-big.jpg"
                                            width="468" height="468" alt="product" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image"
                                            src="<?=$base_url?>upload/products/zoom/product-3-big.jpg"
                                            data-zoom-image="<?=$base_url?>upload/products/zoom/product-3-big.jpg"
                                            width="468" height="468" alt="product" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image"
                                            src="<?=$base_url?>upload/products/zoom/product-4-big.jpg"
                                            data-zoom-image="<?=$base_url?>upload/products/zoom/product-4-big.jpg"
                                            width="468" height="468" alt="product" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image"
                                            src="<?=$base_url?>upload/products/zoom/product-5-big.jpg"
                                            data-zoom-image="<?=$base_url?>upload/products/zoom/product-5-big.jpg"
                                            width="468" height="468" alt="product" />
                                    </div>
                                </div>
                                <!-- End .product-single-carousel -->
                                <span class="prod-full-screen">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>

                            <div class="prod-thumbnail owl-dots">
                                <div class="owl-dot">
                                    <img src="<?=$base_url?>upload/products/zoom/product-1.jpg" width="110" height="110"
                                        alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="<?=$base_url?>upload/products/zoom/product-2.jpg" width="110" height="110"
                                        alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="<?=$base_url?>upload/products/zoom/product-3.jpg" width="110" height="110"
                                        alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="<?=$base_url?>upload/products/zoom/product-4.jpg" width="110" height="110"
                                        alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="<?=$base_url?>upload/products/zoom/product-5.jpg" width="110" height="110"
                                        alt="product-thumbnail" />
                                </div>
                            </div>
                        </div>
                        <!-- End .product-single-gallery -->

                        <div class="col-lg-7 col-md-6 product-single-details">
                            <h1 class="product-title"><?=$product_detail['detail']['TenSP']?></h1>

                            <div class="product-nav">
                                <style>
                                .box_icon {
                                    border: 1px solid grey;
                                    border-radius: 50px;
                                    padding: 2px;
                                    margin: 1px;
                                }

                                i {
                                    text-align: center;
                                    width: 20px;

                                }
                                </style>
                                <div class="product-prev">
                                    <a href="#">
                                        <div class="box_icon"><i class="fa-solid fa-angle-left"></i></div>
                                        <span class="product-popup">
                                            <span class="box-content">
                                                <img alt="product" width="150" height="150"
                                                    src="<?=$base_url?>upload/products/product-3.jpg"
                                                    style="padding-top: 0px;">

                                                <span>Dành cho bé trai</span>
                                            </span>
                                        </span>
                                    </a>
                                </div>

                                <div class="product-next">
                                    <a href="#">
                                        <div class="box_icon"><i class="fa-solid fa-angle-right"></i></div>

                                        <span class="product-popup">
                                            <span class="box-content">
                                                <img alt="product" width="150" height="150"
                                                    src="<?=$base_url?>upload/products/product-4.jpg"
                                                    style="padding-top: 0px;">

                                                <span>Quần áo </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:60%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->

                                <a href="#" class="rating-link">( 6 đánh giá )</a>
                            </div>
                            <!-- End .ratings-container -->

                            <hr class="short-divider">

                            <div class="price-box">
                                <span class="old-price"><?=$product_detail['Gia']?>đ</span>
                                <span class="new-price"><?=$product_detail['GiaGiam']?>đ</span>
                            </div>
                            <!-- End .price-box -->

                            <div class="product-desc">
                                <p>
                                    Số lượng: <?=$product_detail['SoLuong']?>
                                </p>
                            </div>
                            <!-- End .product-desc -->

                            <ul class="single-info-list">
                                <!---->
                                <li>
                                    Mã hàng:
                                    <strong><?=$product_detail['detail']['MaSP']?></strong>
                                </li>

                                <li>
                                    Thẻ:
                                    <strong><a href="#" class="product-category">Quần áo</a></strong>,
                                    <strong><a href="#" class="product-category">Giày dép</a></strong>
                                </li>
                            </ul>

                            <div class="product-filters-container">
                                <div class="product-single-filter"><label class="font2">màu sắc:</label>
                                    <ul class="config-size-list config-color-list config-filter-list">
                                        <li class="">
                                            <a href="javascript:;" class="filter-color border-0"
                                                style="background-color: rgb(1, 136, 204);"></a>
                                        </li>
                                        <li class="">
                                            <a href="javascript:;" class="filter-color border-0 initial disabled"
                                                style="background-color: rgb(221, 181, 119);"></a>
                                        </li>
                                        <li class="">
                                            <a href="javascript:;" class="filter-color border-0"
                                                style="background-color: rgb(96, 133, 165);"></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-single-filter">
                                    <label class="font2">Kích thước:</label>
                                    <ul class="config-size-list">
                                        <li class=""><a href="javascript:;"
                                                class="d-flex align-items-center justify-content-center">L</a></li>
                                        <li class=""><a href="javascript:;"
                                                class="d-flex align-items-center justify-content-center">M</a></li>
                                        <li class=""><a href="javascript:;"
                                                class="d-flex align-items-center justify-content-center">S</a></li>
                                    </ul>
                                </div>

                                <div class="product-single-filter">
                                    <label></label>
                                    <a class="font1 text-uppercase clear-btn" href="#">Thông Thoáng</a>
                                </div>
                                <!---->
                            </div>

                            <div class="product-action">
                                <div class="price-box product-filtered-price">
                                    <del class="old-price"><span>286.000đ</span></del>
                                    <span class="product-price">245.000đ</span>
                                </div>

                                <!-- End .product-single-qty -->

                                <a href="javascript:;" class="btn btn-dark add-cart mr-2" title="Add to Cart">Thêm vào
                                    giỏ hàng </a>

                                <a href="cart.html" class="btn btn-gray view-cart d-none">Xem giỏ hàng</a>
                            </div>
                            <!-- End .product-action -->

                            <hr class="divider mb-0 mt-0">

                            <div class="product-single-share mb-2">
                                <label class="sr-only">Chia sẻ:</label>

                                <div class="social-icons mr-2">
                                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"
                                        title="Facebook"></a>
                                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"
                                        title="Twitter"></a>
                                    <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank"
                                        title="Mail"></a>
                                    <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank"
                                        title="Mail"></a>
                                    <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank"
                                        title="Mail"></a>
                                </div>
                                <!-- End .social-icons -->

                                <a href="wishlist.html" class="btn-icon-wish add-wishlist" title="Add to Wishlist"><i
                                        class="icon-wishlist-2"></i><span>Yêu thích</span></a>
                            </div>
                            <!-- End .product single-share -->
                        </div>
                        <!-- End .product-single-details -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .product-single-container -->

                <div class="product-single-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab-desc" data-toggle="tab"
                                href="#product-desc-content" role="tab" aria-controls="product-desc-content"
                                aria-selected="true">Mô tả</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-size" data-toggle="tab" href="#product-size-content"
                                role="tab" aria-controls="product-size-content" aria-selected="true">Hướng dẫn chọn kích
                                thước</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content"
                                role="tab" aria-controls="product-tags-content" aria-selected="false">Thêm vào
                                Thông tin</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-reviews" data-toggle="tab"
                                href="#product-reviews-content" role="tab" aria-controls="product-reviews-content"
                                aria-selected="false">Đánh giá (1)</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel"
                            aria-labelledby="product-tab-desc">
                            <div class="product-desc-content">
                                <p><?=$product['detail']['MoTa']?></p>
                                <ul>
                                    <li>Bất kỳ loại sản phẩm nào bạn muốn - Đơn giản, có thể cấu hình
                                    </li>
                                </ul>
                                <p></p>
                            </div>
                            <!-- End .product-desc-content -->
                        </div>
                        <!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-size-content" role="tabpanel"
                            aria-labelledby="product-tab-size">
                            <div class="product-size-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="<?=$base_url?>upload/products/single/body-shape.png" alt="body shape"
                                            width="217" height="398">
                                    </div>
                                    <!-- End .col-md-4 -->

                                    <div class="col-md-8">
                                        <table class="table table-size">
                                            <thead>
                                                <tr>
                                                    <th>KÍCH THƯỚC</th>
                                                    <th>NGƯỢC (in.)</th>
                                                    <th>THẮT LƯNG (in.)</th>
                                                    <th>HÔNG (in.)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>XS</td>
                                                    <td>34-36</td>
                                                    <td>27-29</td>
                                                    <td>34.5-36.5</td>
                                                </tr>
                                                <tr>
                                                    <td>S</td>
                                                    <td>36-38</td>
                                                    <td>29-31</td>
                                                    <td>36.5-38.5</td>
                                                </tr>
                                                <tr>
                                                    <td>M</td>
                                                    <td>38-40</td>
                                                    <td>31-33</td>
                                                    <td>38.5-40.5</td>
                                                </tr>
                                                <tr>
                                                    <td>L</td>
                                                    <td>40-42</td>
                                                    <td>33-36</td>
                                                    <td>40.5-43.5</td>
                                                </tr>
                                                <tr>
                                                    <td>XL</td>
                                                    <td>42-45</td>
                                                    <td>36-40</td>
                                                    <td>43.5-47.5</td>
                                                </tr>
                                                <tr>
                                                    <td>XLL</td>
                                                    <td>45-48</td>
                                                    <td>40-44</td>
                                                    <td>47.5-51.5</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- End .row -->
                            </div>
                            <!-- End .product-size-content -->
                        </div>
                        <!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-tags-content" role="tabpanel"
                            aria-labelledby="product-tab-tags">
                            <table class="table table-striped mt-2">
                                <tbody>
                                    <tr>
                                        <th>Cân nặng</th>
                                        <td>23 kg</td>
                                    </tr>

                                    <tr>
                                        <th>Kích thước</th>
                                        <td>12 × 24 × 35 cm</td>
                                    </tr>

                                    <tr>
                                        <th>Màu sắc</th>
                                        <td>đen, xanh lá, xanh đậm</td>
                                    </tr>

                                    <tr>
                                        <th>kích cỡ</th>
                                        <td>L, M, S</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-reviews-content" role="tabpanel"
                            aria-labelledby="product-tab-reviews">
                            <div class="product-reviews-content">
                                <h3 class="reviews-title">1 đánh giá cho Quần áo</h3>

                                <div class="comment-list">
                                    <div class="comments">
                                        <figure class="img-thumbnail">
                                            <img src="<?=$base_url?>upload/blog/author.jpg" alt="author" width="80"
                                                height="80">
                                        </figure>

                                        <div class="comment-block">
                                            <div class="comment-header">
                                                <div class="comment-arrow"></div>

                                                <div class="ratings-container float-sm-right">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:60%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <!-- End .product-ratings -->
                                                </div>

                                                <span class="comment-by">
                                                    <strong>Ai đó</strong> ngày/tháng/năm
                                                </span>
                                            </div>

                                            <div class="comment-content">
                                                <p>Xuất sắc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="divider"></div>

                                <div class="add-product-review">
                                    <h3 class="review-title">Thêm một bài đánh giá</h3>

                                    <form action="#" class="comment-form m-0">
                                        <div class="rating-form">
                                            <label for="rating">Đánh giá của bạn <span class="required">*</span></label>
                                            <span class="rating-stars">
                                                <a class="star-1" href="#">1</a>
                                                <a class="star-2" href="#">2</a>
                                                <a class="star-3" href="#">3</a>
                                                <a class="star-4" href="#">4</a>
                                                <a class="star-5" href="#">5</a>
                                            </span>

                                            <select name="rating" id="rating" required="" style="display: none;">
                                                <option value="6">xuất sắc</option>
                                                <option value="5">hoàn hảo</option>
                                                <option value="4">tốt</option>
                                                <option value="3">Trung bình</option>
                                                <option value="2">chưa ổn</option>
                                                <option value="1">si đa</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                Đánh giá của bạn <span class="required">*</span></label>
                                            <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                        </div>
                                        <!-- End .form-group -->


                                        <div class="row">
                                            <div class="col-md-6 col-xl-12">
                                                <div class="form-group">
                                                    <label>Tên <span class="required">Nguhiax</span></label>
                                                    <input type="text" class="form-control form-control-sm" required>
                                                </div>
                                                <!-- End .form-group -->
                                            </div>

                                            <div class="col-md-6 col-xl-12">
                                                <div class="form-group">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="text" class="form-control form-control-sm" required>
                                                </div>
                                                <!-- End .form-group -->
                                            </div>

                                            <div class="col-md-12">
                                                <div class=" custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="save-name" />
                                                    <label class="custom-control-label mb-0" for="save-name">Lưu thông
                                                        tin</label>
                                                </div>
                                            </div>
                                        </div>

                                        <input type="submit" class="btn btn-primary" value="Submit">
                                    </form>
                                </div>
                                <!-- End .add-product-review -->
                            </div>
                            <!-- End .product-reviews-content -->
                        </div>
                        <!-- End .tab-pane -->
                    </div>
                    <!-- End .tab-content -->
                </div>
                <!-- End .product-single-tabs -->

                <div class="products-section pt-0">
                    <h2 class="section-title">
                        sản phẩm tương tự</h2>

                    <div class="products-slider 5col owl-carousel owl-theme dots-top dots-small">
                        <div class="product-default inner-quickview inner-icon">
                            <figure class="img-effect">
                                <a href="demo1-product.html">
                                    <img src="<?=$base_url?>upload/demoes/demo1/products/product-1.jpg" width="205"
                                        height="205" alt="product">
                                    <img src="<?=$base_url?>upload/demoes/demo1/products/product-1-2.jpg" width="205"
                                        height="205" alt="product">
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-hot">HOT</div>
                                    <div class="product-label label-sale">-20%</div>
                                </div>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Xem lướt
                                    qua</a>

                                <div class="product-countdown-container">
                                    <span class="product-countdown-title">
                                        ưu đãi kết thúc sau:</span>
                                    <div class="product-countdown countdown-compact" data-until="2021, 10, 5"
                                        data-compact="true">
                                    </div>
                                    <!-- End .product-countdown -->
                                </div>
                                <!-- End .product-countdown-container -->
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo1-shop.html" class="product-category">Loại</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="demo1-product.html">Quần áo</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">900.000đ</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure class="img-effect">
                                <a href="demo1-product.html">
                                    <img src="<?=$base_url?>upload/demoes/demo1/products/product-2.jpg" width="205"
                                        height="205" alt="product" />
                                </a>
                                <div class="btn-icon-group">
                                    <a href="demo1-product.html" class="btn-icon btn-add-cart"><i
                                            class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Xem lướt
                                    qua</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo1-shop.html" class="product-category">Loại</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="demo1-product.html">Giày Dép</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">900.000đ</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure class="img-effect">
                                <a href="demo1-product.html">
                                    <img src="<?=$base_url?>upload/demoes/demo1/products/product-3.jpg" width="205"
                                        height="205" alt="product">
                                    <img src="<?=$base_url?>upload/demoes/demo1/products/product-3-2.jpg" width="205"
                                        height="205" alt="product">
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Xem lướt
                                    qua</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo1-shop.html" class="product-category">Loại</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="demo1-product.html">Sản phẩm</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">800.000đ</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure class="img-effect">
                                <a href="demo1-product.html">
                                    <img src="<?=$base_url?>upload/demoes/demo1/products/product-4.jpg" width="205"
                                        height="205" alt="product">
                                    <img src="<?=$base_url?>upload/demoes/demo1/products/product-4-2.jpg" width="205"
                                        height="205" alt="product">
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Xem lướt
                                    qua</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo1-shop.html" class="product-category">Loại</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="demo1-product.html">Sản Phẩm</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">900.000đ</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure class="img-effect">
                                <a href="demo1-product.html">
                                    <img src="<?=$base_url?>upload/demoes/demo1/products/product-5.jpg" width="205"
                                        height="205" alt="product">
                                    <img src="<?=$base_url?>upload/demoes/demo1/products/product-5-2.jpg" width="205"
                                        height="205" alt="product">
                                </a>
                                <div class="btn-icon-group">
                                    <a href="demo1-product.html" class="btn-icon btn-add-cart"><i
                                            class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Xem lướt
                                    qua</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo1-shop.html" class="product-category">Loại</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="demo1-product.html">Tên sản Phẩm</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">900.000đ</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                    <!-- End .products-slider -->
                </div>
                <!-- End .products-section -->

                <hr class="mt-0 m-b-5" />

                <div class="product-widgets-container row pb-2">
                    <div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
                        <h4 class="section-sub-title">Sản phẩm nổi bật</h4>
                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="demo1-product.html">
                                    <img src="<?=$base_url?>upload/products/small/product-1.jpg" width="74" height="74"
                                        alt="product">
                                    <img src="<?=$base_url?>upload/products/small/product-1-2.jpg" width="74"
                                        height="74" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="demo1-product.html">Tên sản phẩm</a> </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">49.000đ</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="demo1-product.html">
                                    <img src="<?=$base_url?>upload/products/small/product-2.jpg" width="74" height="74"
                                        alt="product">
                                    <img src="<?=$base_url?>upload/products/small/product-2-2.jpg" width="74"
                                        height="74" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="demo1-product.html">Tên Sản Phẩm</a>
                                </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top">5.00</span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">49.000đ</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="demo1-product.html">
                                    <img src="<?=$base_url?>upload/products/small/product-3.jpg" width="74" height="74"
                                        alt="product">
                                    <img src="<?=$base_url?>upload/products/small/product-3-2.jpg" width="74"
                                        height="74" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="demo1-product.html">Tên sản phẩm</a>
                                </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">49.000đ</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
                        <h4 class="section-sub-title">Các Sản Phẩm Bán Chạy Nhất</h4>
                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="demo1-product.html">
                                    <img src="<?=$base_url?>upload/products/small/product-4.jpg" width="74" height="74"
                                        alt="product">
                                    <img src="<?=$base_url?>upload/products/small/product-4-2.jpg" width="74"
                                        height="74" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="demo1-product.html">Tên sản phẩm</a> </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top">5.00</span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">49.000đ</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="demo1-product.html">
                                    <img src="<?=$base_url?>upload/products/small/product-5.jpg" width="74" height="74"
                                        alt="product">
                                    <img src="<?=$base_url?>upload/products/small/product-5-2.jpg" width="74"
                                        height="74" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="demo1-product.html">Tên sản phẩm</a>
                                </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">49.000</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="demo1-product.html">
                                    <img src="<?=$base_url?>upload/products/small/product-6.jpg" width="74" height="74"
                                        alt="product">
                                    <img src="<?=$base_url?>upload/products/small/product-6-2.jpg" width="74"
                                        height="74" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="demo1-product.html">tên sản phẩm</a> </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top">5.00</span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">49.000đ</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
                        <h4 class="section-sub-title">Sản phẩm mới nhất</h4>
                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="demo1-product.html">
                                    <img src="<?=$base_url?>upload/products/small/product-7.jpg" width="74" height="74"
                                        alt="product">
                                    <img src="<?=$base_url?>upload/products/small/product-7-2.jpg" width="74"
                                        height="74" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="demo1-product.html">Tên sản phẩm</a> </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">49.000</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="demo1-product.html">
                                    <img src="<?=$base_url?>upload/products/small/product-8.jpg" width="74" height="74"
                                        alt="product">
                                    <img src="<?=$base_url?>upload/products/small/product-8-2.jpg" width="74"
                                        height="74" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="demo1-product.html">tên sản phẩm</a> </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top">5.00</span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">49.000đ</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="demo1-product.html">
                                    <img src="<?=$base_url?>upload/products/small/product-8.jpg" width="74" height="74"
                                        alt="product">
                                    <img src="<?=$base_url?>upload/products/small/product-8-2.jpg" width="74"
                                        height="74" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="demo1-product.html">tên sản phẩm</a> </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top">5.00</span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">49.000đ</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 pb-5 pb-md-0">
                        <h4 class="section-sub-title">Sản phẩm được đánh giá hàng đầu</h4>
                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="demo1-product.html">
                                    <img src="<?=$base_url?>upload/products/small/product-10.jpg" width="74" height="74"
                                        alt="product">
                                    <img src="<?=$base_url?>upload/products/small/product-10-2.jpg" width="74"
                                        height="74" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="demo1-product.html">Tên sản phẩm</a>
                                </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">49.000đ</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="demo1-product.html">
                                    <img src="<?=$base_url?>upload/products/small/product-10.jpg" width="74" height="74"
                                        alt="product">
                                    <img src="<?=$base_url?>upload/products/small/product-10-2.jpg" width="74"
                                        height="74" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="demo1-product.html">Tên sản phẩm</a>
                                </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">49.000đ</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>

                        <div class="product-default left-details product-widget">
                            <figure>
                                <a href="demo1-product.html">
                                    <img src="<?=$base_url?>upload/products/small/product-10.jpg" width="74" height="74"
                                        alt="product">
                                    <img src="<?=$base_url?>upload/products/small/product-10-2.jpg" width="74"
                                        height="74" alt="product">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h3 class="product-title"> <a href="demo1-product.html">Tên sản phẩm</a>
                                </h3>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->

                                <div class="price-box">
                                    <span class="product-price">49.000đ</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                </div>
                <!-- End .row -->
            </div>