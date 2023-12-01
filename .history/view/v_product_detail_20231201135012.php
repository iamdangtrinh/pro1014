            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <li><a href="<?= $base_url ?>page/home"><i class="fa-solid fa-house"></i></a></li>
                        <li><i class="fa-solid fa-angle-right"></i><a href="#"><?= $product_detail['TenSP'] ?></a></li>
                    </ol>
                </nav>
                <?php if(isset($_SESSION['thongbao'])): ?>
                <div class="alert alert-rounded alert-success">
                    <i class="fa fa-check" style="color: #9ad36a;"></i>
                    <span><strong>Hoàn tất!</strong> <?= $_SESSION['thongbao']; ?></span>
                </div>
                <?php endif;
                unset($_SESSION['thongbao']); ?>
                <?php if(isset($_SESSION['loi'])): ?>
                <div class="alert alert-rounded alert-danger">
                    <i class="fa fa-exclamation-circle" style="color: #ef8495;"></i>
                    <span><strong>Không thành công!</strong> <?= $_SESSION['loi']; ?></span>
                </div>
                <?php endif;
                unset($_SESSION['loi']); ?>
                <div class="product-single-container product-single-default">
                    <div class="cart-message d-none">
                        <strong class="single-cart-notice">Quần áo</strong>
                        <span>Đã thêm vào giỏ hàng </span>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-6 product-single-gallery">
                            <div class="product-slider-container">
                                <div class="label-group">
                                    <!---->
                                    <?php if(!$product_detail['GiaGiam']): ?>
                                    <div class="product-label label-hot">HOT</div>
                                    <?php else: ?>
                                    <div class="product-label label-hot">HOT</div>
                                    <div class="product-label label-sale">
                                        -<?= substr((($product_detail['Gia'] - $product_detail['GiaGiam']) / $product_detail['Gia']) * 100, 0, 2); ?>%
                                    </div>
                                    <?php endif; ?>
                                </div>

                                <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                                    <div class="product-item">
                                        <img class="product-single-image"
                                            src="<?= $base_url ?>upload/demoes/demo23/products/<?= $product_detail['AnhSP'] ?>"
                                            data-zoom-image="<?= $base_url ?>upload/demoes/demo23/products/<?= $product_detail['AnhSP'] ?>"
                                            width="468" height="468" alt="product" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image"
                                            src="<?= $base_url ?>upload/demoes/demo23/products/<?= $product_detail['AnhSP1'] ?>"
                                            data-zoom-image="<?= $base_url ?>upload/demoes/demo23/products/<?= $product_detail['AnhSP1'] ?>"
                                            width="468" height="468" alt="product" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image"
                                            src="<?= $base_url ?>upload/demoes/demo23/products/<?= $product_detail['AnhSP2'] ?>"
                                            data-zoom-image="<?= $base_url ?>upload/demoes/demo23/products/<?= $product_detail['AnhSP2'] ?>"
                                            width="468" height="468" alt="product" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image"
                                            src="<?= $base_url ?>upload/demoes/demo23/products/<?= $product_detail['AnhSP3'] ?>"
                                            data-zoom-image="<?= $base_url ?>upload/demoes/demo23/products/<?= $product_detail['AnhSP3'] ?>"
                                            width="468" height="468" alt="product" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image"
                                            src="<?= $base_url ?>upload/demoes/demo23/products/<?= $product_detail['AnhSP4'] ?>"
                                            data-zoom-image="<?= $base_url ?>upload/demoes/demo23/products/<?= $product_detail['AnhSP4'] ?>"
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
                                    <img src="<?= $base_url ?>upload/demoes/demo23/products/<?= $product_detail['AnhSP'] ?>"
                                        width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="<?= $base_url ?>upload/demoes/demo23/products/<?= $product_detail['AnhSP1'] ?>"
                                        width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="<?= $base_url ?>upload/demoes/demo23/products/<?= $product_detail['AnhSP2'] ?>"
                                        width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="<?= $base_url ?>upload/demoes/demo23/products/<?= $product_detail['AnhSP3'] ?>"
                                        width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="<?= $base_url ?>upload/demoes/demo23/products/<?= $product_detail['AnhSP4'] ?>"
                                        width="110" height="110" alt="product-thumbnail" />
                                </div>
                            </div>
                        </div>
                        <!-- End .product-single-gallery -->

                        <div class="col-lg-7 col-md-6 product-single-details">
                            <h1 class="product-title"><?= $product_detail['TenSP'] ?></h1>

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
                            </div>

                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <?php
                                $rating = ratings_trungbinh($product_detail['MaSP']);
                                if($rating['SoSao'] != "" && $rating['SoBinhLuan'] > 0) {
                                    $trungbinh_rating = ceil(($rating['SoSao'] * 10) / ($rating['SoBinhLuan'] / 2));
                                } else {
                                    $trungbinh_rating = 0;
                                }
                                ?>
                                    <span class="ratings" style="width:<?= $trungbinh_rating ?>%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->

                                <a href="#" class="rating-link">( <?= $SLBinhLuan ?> đánh giá )</a>
                            </div>
                            <hr class="short-divider">
                            <?php if($product_detail['GiaGiam'] == ""): ?>
                            <div class="price-box">
                                <span
                                    class="new-price text-danger"><?= number_format($product_detail['Gia'], 0, ",", ".") ?>đ</span>
                                <?php else: ?>
                                <div class="price-box">
                                    <span
                                        class="old-price"><?= number_format($product_detail['Gia'], 0, ",", ".") ?>đ</span>
                                    <span
                                        class="new-price text-danger"><?= number_format($product_detail['GiaGiam'], 0, ",", ".") ?>đ</span>
                                    <?php endif; ?>
                                </div>
                                <div class="product-desc">
                                    <p>
                                        Số lượng: <?= $product_detail['SoLuong'] ?> tồn kho
                                    </p>
                                </div>
                                <ul class="single-info-list">
                                    <li>
                                        Mã hàng:
                                        <strong><?= $product_detail['MaSP'] ?></strong>
                                    </li>
                                </ul>

                                <div class="product-action">
                                    <form action="<?= $base_url ?>product/addtocart" method="post">
                                        <input name="SoLuongSP" type="number" value="1" min="1" class="mb-1">

                                        <input name="MaSP" type="hidden" value="<?= $product_detail['MaSP'] ?>">
                                        </br>

                                        <?php
                                    if($product_detail['SoLuong'] > 0): ?>
                                        <input type="submit" class="btn btn-danger" value="Thêm vào giỏ hàng"
                                            name="btn_addtocart">

                                        <?php else: ?>
                                        <input type="submit" disabled class="btn btn-seconds text-dark"
                                            value="Tạm thời hết sản phẩm" name="btn_addtocart">
                                        <?php endif ?>
                                    </form>

                                    <a href="<?= $base_url ?>gio-hang" class="btn btn-gray view-cart d-none"
                                        title="Xem giỏ hàng">Xem giỏ hàng</a>
                                </div>
                                <!-- End .product-action -->

                                <hr class="divider mb-0 mt-0">

                                <div class="product-single-share mb-2">
                                    <label class="sr-only">Chia sẻ:</label>

                                    <!-- <div class="social-icons mr-2">
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
                                </div> -->
                                    <!-- End .social-icons -->

                                    <a href="<?= $base_url ?>page/wishlist" <?php if(isset($_SESSION['user'])){
                                        $MaTK=$_SESSION['user']['MaTK'];
                                        $CheckWish=check_wishByProductAndUser($MaTK,$product_detail['MaSP']);
                                        if($CheckWish!=""){
                                            echo 'title="Đến trang yêu thích" class="btn-icon-wish add-wishlist added-wishlist"><i class="fa-solid fa-heart"></i><span>Xem yêu
                                            thích</span></a';
                                        }else{
                                            echo 'onclick="ThemSPYT('.$product_detail['MaSP'].')" title="Yêu thích sản phẩm" class="btn-icon-wish add-wishlist"><i class="fa-solid fa-heart"></i><span>Yêu
                                            thích</span></a';
                                        }
                                    } ?>>
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
                                    role="tab" aria-controls="product-size-content" aria-selected="true">Hướng dẫn chọn
                                    kích
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
                                    aria-selected="false">Đánh giá (<?= $SLBinhLuan ?>)</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel"
                                aria-labelledby="product-tab-desc">
                                <div class="product-desc-content">
                                    <p><?= $product_detail['MoTa'] ?></p>
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
                                            <img src="<?= $base_url ?>upload/products/single/body-shape.png"
                                                alt="body shape" width="217" height="398">
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
                                    <!-- End .product-single-details -->
                                </div>
                                <!-- End .row -->
                            </div>
                            <!-- End .product-single-container -->

                      
                                <!-- End .product-single-tabs -->

                                <div class="products-section pt-0">
                                    <h2 class="section-title">
                                        sản phẩm tương tự</h2>

                                    <div class="products-slider 5col owl-carousel owl-theme dots-top dots-small">
                                        <?php foreach($product_same as $product): ?>
                                        <?php if(!$product['GiaGiam']): ?>
                                        <div class="product-default inner-quickview inner-icon">
                                            <figure>
                                                <a href="<?= $base_url ?>product/detail/<?= $product['MaSP'] ?>">
                                                    <img src="<?= $base_url ?>upload/demoes/demo23/products/<?= $product['AnhSP']; ?>"
                                                        alt="product" style="width: 207px; height: 220px;">
                                                </a>
                                                <div class="label-group">
                                                    <div class="product-label label-hot">HOT</div>
                                                </div>
                                                <div class="btn-icon-group">
                                                    <a href="<?= $base_url ?>product/detail/<?= $product['MaSP']; ?>"
                                                        class="btn-icon btn-add-cart fa-solid fa-cart-shopping"></a>
                                                </div>
                                                <a href="<?= $base_url ?>product/detail/<?= $product['MaSP'] ?>"
                                                    class="btn-quickview" title="Quick View">Xem chi tiết</a>
                                            </figure>
                                            <div class="product-details">
                                                <div class="category-wrap">
                                                    <div class="category-list">
                                                        <a href="<?= $base_url ?>product/detail/<?= $product['MaSP'] ?>"
                                                            class="product-category"><?= $product_detail['TenDM']; ?></a>
                                                    </div>
                                                    <a href="<?= $base_url ?>page/wishlist" <?php if(isset($_SESSION['user'])) {
                                                                        $MaTK = $_SESSION['user']['MaTK'];
                                                                        $CheckWish = check_wishByProductAndUser($MaTK, $product['MaSP']);
                                                                        if($CheckWish != "") {
                                                                            echo 'title="Đến trang yêu thích" class="btn-icon-wish added-wishlist" ';
                                                                        } else {
                                                                            echo 'title="Yêu thích sản phẩm" class="btn-icon-wish"';
                                                                        }
                                                                    } ?>><i class="fa-solid fa-heart"></i></a>
                                                </div>
                                                <h3 class="product-title">
                                                    <a
                                                        href="<?= $base_url ?>product/detail/<?= $product['MaSP'] ?>"><?= $product_detail['TenSP']; ?></a>
                                                </h3>
                                                <?php
                                                                $product['rating'] = ratings_trungbinh($product['MaSP']);
                                                                if($product['rating']['SoSao'] != "" && $product['rating']['SoBinhLuan'] > 0) {
                                                                    $product['trungbinh_rating'] = ceil(($product['rating']['SoSao'] * 10) / ($product['rating']['SoBinhLuan'] / 2));
                                                                } else {
                                                                    $product['trungbinh_rating'] = 0;
                                                                }
                                                                ?>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings"
                                                            style="width:<?= $product['trungbinh_rating'] ?>%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span
                                                        class="product-price"><?= number_format($product['Gia'], 0, ",", ".") ?>đ</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                        <?php else: ?>
                                        <div class="product-default inner-quickview inner-icon">
                                            <figure>
                                                <a href="<?= $base_url ?>product/detail/<?= $product['MaSP'] ?>">
                                                    <img src="<?= $base_url ?>upload/demoes/demo23/products/<?= $product['AnhSP']; ?>"
                                                        alt="product" style="width: 207px; height: 220px;">
                                                </a>
                                                <div class="label-group">
                                                    <div class="product-label label-hot">HOT</div>
                                                    <div class="product-label label-sale">
                                                        -<?= substr((($product['Gia'] - $product['GiaGiam']) / $product['Gia']) * 100, 0, 2) ?>%
                                                    </div>
                                                </div>
                                                <div class="btn-icon-group">
                                                    <a href="<?= $base_url ?>product/detail/<?= $product['MaSP']; ?>"
                                                        class="btn-icon btn-add-cart fa-solid fa-cart-shopping"></a>
                                                </div>
                                                <a href="<?= $base_url ?>product/detail/<?= $product['MaSP'] ?>"
                                                    class="btn-quickview" title="Quick View">Xem chi tiết</a>
                                            </figure>
                                            <div class="product-details">
                                                <div class="category-wrap">
                                                    <div class="category-list">
                                                        <a href="<?= $base_url ?>product/detail/<?= $product['MaSP'] ?>"
                                                            class="product-category"><?= $product_detail['TenDM']; ?></a>
                                                    </div>
                                                    <a href="<?= $base_url ?>page/wishlist" <?php if(isset($_SESSION['user'])) {
                                                                        $MaTK = $_SESSION['user']['MaTK'];
                                                                        $CheckWish = check_wishByProductAndUser($MaTK, $product['MaSP']);
                                                                        if($CheckWish != "") {
                                                                            echo 'title="Đến trang yêu thích" class="btn-icon-wish added-wishlist" ';
                                                                        } else {
                                                                            echo 'title="Yêu thích sản phẩm" class="btn-icon-wish"';
                                                                        }
                                                                    } ?>><i class="fa-solid fa-heart"></i></a>
                                                </div>
                                                <h3 class="product-title">
                                                    <a
                                                        href="<?= $base_url ?>product/detail/<?= $product['MaSP'] ?>"><?= $product['TenSP']; ?></a>
                                                </h3>
                                                <?php
                                                                $product['rating'] = ratings_trungbinh($product['MaSP']);
                                                                if($product['rating']['SoSao'] != "" && $product['rating']['SoBinhLuan'] > 0) {
                                                                    $product['trungbinh_rating'] = ceil(($product['rating']['SoSao'] * 10) / ($product['rating']['SoBinhLuan'] / 2));
                                                                } else {
                                                                    $product['trungbinh_rating'] = 0;
                                                                }
                                                                ?>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings"
                                                            style="width:<?= $product['trungbinh_rating'] ?>%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span
                                                        class="old-price"><?= number_format($product['Gia'], 0, ",", ".") ?>đ</span>
                                                    <span
                                                        class="product-price"><?= number_format($product['GiaGiam'], 0, ",", ".") ?>đ</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                    <!-- End .products-slider -->
                                </div>
                                <!-- End .products-section -->

                                <hr class="mt-0 m-b-5" />

                                <!-- End .row -->