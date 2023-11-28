            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <li><a href="demo1.html"><i class="fa-solid fa-house"></i></a></li>
                        <li><i class="fa-solid fa-angle-right"></i><a href="#">
                                <??>
                            </a></li>
                    </ol>
                </nav>
                <?php if(isset($_SESSION['thongbao'])): ?>
                <div class="alert alert-rounded alert-success">
                    <i class="fa fa-check" style="color: #9ad36a;"></i>
                    <span><strong>Hoàn tất!</strong> <?=$_SESSION['thongbao'];?>.</span>
                </div>
                <?php endif; unset($_SESSION['thongbao']);?>
                <?php if(isset($_SESSION['loi'])): ?>
                <div class="alert alert-rounded alert-danger">
                    <i class="fa fa-exclamation-circle" style="color: #ef8495;"></i>
                    <span><strong>Không thành công!</strong> <?=$_SESSION['loi'];?></span>
                </div>
                <?php endif; unset($_SESSION['loi']);?>
                <div class="product-single-container product-single-default">
                    <div class="cart-message d-none">
                        <strong class="single-cart-notice">Quần áo</strong>
                        <span>Đã thêm vào giỏ hàng </span>
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
                                            src="<?=$base_url?>upload/demoes/demo23/products/<?=$product_detail['AnhSP']?>"
                                            data-zoom-image="<?=$base_url?>upload/demoes/demo23/products/<?=$product_detail['AnhSP']?>"
                                            width="468" height="468" alt="product" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image"
                                            src="<?=$base_url?>upload/demoes/demo23/products/<?=$product_detail['AnhSP1']?>"
                                            data-zoom-image="<?=$base_url?>upload/demoes/demo23/products/<?=$product_detail['AnhSP1']?>"
                                            width="468" height="468" alt="product" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image"
                                            src="<?=$base_url?>upload/demoes/demo23/products/<?=$product_detail['AnhSP2']?>"
                                            data-zoom-image="<?=$base_url?>upload/demoes/demo23/products/<?=$product_detail['AnhSP2']?>"
                                            width="468" height="468" alt="product" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image"
                                            src="<?=$base_url?>upload/demoes/demo23/products/<?=$product_detail['AnhSP3']?>"
                                            data-zoom-image="<?=$base_url?>upload/demoes/demo23/products/<?=$product_detail['AnhSP3']?>"
                                            width="468" height="468" alt="product" />
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image"
                                            src="<?=$base_url?>upload/demoes/demo23/products/<?=$product_detail['AnhSP4']?>"
                                            data-zoom-image="<?=$base_url?>upload/demoes/demo23/products/<?=$product_detail['AnhSP4']?>"
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
                                    <img src="<?=$base_url?>upload/demoes/demo23/products/<?=$product_detail['AnhSP']?>"
                                        width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="<?=$base_url?>upload/demoes/demo23/products/<?=$product_detail['AnhSP1']?>"
                                        width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="<?=$base_url?>upload/demoes/demo23/products/<?=$product_detail['AnhSP2']?>"
                                        width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="<?=$base_url?>upload/demoes/demo23/products/<?=$product_detail['AnhSP3']?>"
                                        width="110" height="110" alt="product-thumbnail" />
                                </div>
                                <div class="owl-dot">
                                    <img src="<?=$base_url?>upload/demoes/demo23/products/<?=$product_detail['AnhSP4']?>"
                                        width="110" height="110" alt="product-thumbnail" />
                                </div>
                            </div>
                        </div>
                        <!-- End .product-single-gallery -->

                        <div class="col-lg-7 col-md-6 product-single-details">
                            <h1 class="product-title"><?=$product_detail['TenSP']?></h1>

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
                                    <span class="ratings" style="width:60%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->

                                <a href="#" class="rating-link">( <?=$SLBinhLuan?> đánh giá )</a>
                            </div>
                            <hr class="short-divider">
                            <div class="price-box">
                                <span class="old-price"><?=$product_detail['Gia']?>đ</span>
                                <span class="new-price"><?=$product_detail['GiaGiam']?>đ</span>
                            </div>
                            <div class="product-desc">
                                <p>
                                    Số lượng: <?=$product_detail['SoLuong']?> tồn kho
                                </p>
                            </div>
                            <ul class="single-info-list">
                                <li>
                                    Mã hàng:
                                    <strong><?=$product_detail['MaSP']?></strong>
                                </li>
                            </ul>

                                <form action="<?=$base_url?>product/addtocart" method="post">
                                    <input name="SoLuongSP" type="number" value="1" min="1" class="mb-1">

                                    <input name="MaSP" type="hidden" value="<?=$product_detail['MaSP']?>">
                                    </br>

                                    <?php
                                    if($product_detail['SoLuong'] > 0) : ?>
                                    <input type="submit" class="btn btn-danger" value="Thêm vào giỏ hàng"
                                        name="btn_addtocart">

                                    <?php else : ?>
                                    <input type="submit" disabled class="btn btn-seconds text-dark"
                                        value="Thêm vào giỏ hàng" name="btn_addtocart">
                                    <?php endif ?>
                                </form>

                                <form 










                                <!-- <a href="<?=$base_url?>gio-hang" class="btn btn-gray view-cart d-none" title="Xem giỏ hàng">Xem giỏ hàng</a>
                            </div> -->
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

                                    <a href="<?=$base_url?>page/wishlist" class="btn-icon-wish add-wishlist"
                                        title="Thêm vào yêu thích"><i class="icon-wishlist-2"></i><span>Yêu
                                            thích</span></a>
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
                                    aria-selected="false">Đánh giá (<?=$SLBinhLuan?>)</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel"
                                aria-labelledby="product-tab-desc">
                                <div class="product-desc-content">
                                    <p><?=$product_detail['MoTa']?></p>
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
                                            <img src="<?=$base_url?>upload/products/single/body-shape.png"
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
                                    <h3 class="reviews-title"><?=$SLBinhLuan?> đánh giá</h3>

                                    <div class="comment-list">
                                        <?php foreach ($comment as $value):?>
                                        <div class="comments mb-1">
                                            <figure class="img-thumbnail">
                                                <img src="<?=$base_url?>upload/avatar/<?=$value['HinhAnh']?>"
                                                    alt="author" width="80" height="80" style="border-radius: 60px;">
                                            </figure>

                                            <div class="comment-block">
                                                <div class="comment-header">
                                                    <div class="comment-arrow"></div>

                                                    <div class="ratings-container float-sm-right">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:
                                                        <?php if($value['SoSao']==5){
                                                            echo 100;
                                                        }else if($value['SoSao']==4){
                                                            echo 80;
                                                        }else if($value['SoSao']==3){
                                                            echo 60;
                                                        }else if($value['SoSao']==2){
                                                            echo 40;
                                                        }else{
                                                            echo 20;
                                                        } ?>%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>

                                                    <span class="comment-by">
                                                        <strong><?=$value['HoTen']?></strong> <?=$value['NgayBL']?>
                                                    </span>
                                                </div>

                                                <div class="comment-content">
                                                    <p><?=$value['NoiDung']?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>

                                    <div class="divider"></div>

                                    <?php if(isset($_SESSION['user'])) :?>
                                    <div class="add-product-review">
                                        <h3 class="review-title">Viết bài đánh giá</h3>

                                        <form action="<?= $base_url ?>product/comment" method="post"
                                            class="comment-form m-0">
                                            <input type="hidden" name="MaSP" value="<?=$_GET['id']?>">
                                            <div class="rating-form">
                                                <label for="rating">Đánh giá của bạn <span
                                                        class="required">*</span></label>
                                                <span class="rating-stars">
                                                    <a class="star-1" href="#">1</a>
                                                    <a class="star-2" href="#">2</a>
                                                    <a class="star-3" href="#">3</a>
                                                    <a class="star-4" href="#">4</a>
                                                    <a class="star-5" href="#">5</a>
                                                </span>

                                                <select name="SoSao" id="rating" required="" style="display: none;">
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
                                                    Nội dung đánh giá <span class="required">*</span></label>
                                                <textarea cols="5" rows="6" name="NoiDung"
                                                    class="form-control form-control-sm"></textarea>
                                            </div>
                                            <!-- End .form-group -->

                                            <input type="submit" class="btn btn-primary" value="Gửi">
                                        </form>
                                    </div>
                                    <!-- End .add-product-review -->
                                    <?php else: ?>
                                    <div class="add-product-review">
                                        <h3 class="review-title">Bạn cần đăng nhập và mua hàng để viết đánh giá!</h3>
                                    </div>
                                    <?php endif; ?>
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
                            <?php foreach($product_same as $product): ?>
                            <div class="product-default inner-quickview inner-icon">
                                <figure class="img-effect">
                                    <a href="<?= $base_url ?>product/detail/<?=$product['MaSP']?>">
                                        <img src="<?=$base_url?>upload/demoes/demo23/products/<?=$product['AnhSP']?>"
                                            width="205" height="205" alt="product">
                                        <img src="<?=$base_url?>upload/demoes/demo23/products/<?=$product['AnhSP']?>"
                                            width="205" height="205" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                        <div class="product-label label-sale">
                                            -<?=substr((($product['Gia'] - $product['GiaGiam']) / $product['Gia']) * 100, 0, 2)?>%
                                        </div>
                                    </div>
                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Xem
                                        lướt
                                        qua</a>

                                    <div class="product-countdown-container">
                                        <span class="product-countdown-title">
                                            ưu đãi kết thúc sau :</span>
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
                                            <a href="demo1-shop.html"
                                                class="product-category"><?=$product_detail['TenDM']?></a>
                                        </div>
                                        <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                                class="icon-heart"></i></a>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo1-product.html">
                                            <??>
                                        </a>
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
                                        <span class="product-price"><?=$product['Gia']?>đ</span>
                                    </div>
                                    <!-- End .price-box -->
                                </div>
                                <!-- End .product-details -->
                            </div>
                            <?php endforeach ;?>
                        </div>
                        <!-- End .products-slider -->
                    </div>
                    <!-- End .products-section -->

                    <hr class="mt-0 m-b-5" />

                    <!-- End .row -->
                </div>