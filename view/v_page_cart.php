            <div class="container">
                <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
                    <li class="active">
                        <a href="cart.html">Giỏ Hàng</a>
                    </li>
                    <li>
                        <a href="checkout.html">Thanh Toán</a>
                    </li>
                    <li class="disabled">
                        <a href="cart.html">
                            Hoàn thành đơn hàng</a>
                    </li>
                </ul>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-table-container">
                            <table class="table table-cart">
                                <thead>
                                    <tr>
                                        <th class="thumbnail-col"></th>
                                        <th class="product-col">Sản Phẩm</th>
                                        <th class="price-col">Giá</th>
                                        <th class="qty-col">Số Lượng</th>
                                        <th class="text-right">Tổng Hợp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="product-row">
                                        <td>
                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="<?=$base_url?>upload/products/product-4.jpg"
                                                        alt="product">
                                                </a>

                                                <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                            </figure>
                                        </td>
                                        <td class="product-col">
                                            <h5 class="product-title">
                                                <a href="product.html">Men Watch</a>
                                            </h5>
                                        </td>
                                        <td>$17.90</td>
                                        <td>
                                            <div class="product-single-qty">
                                                <input class="horizontal-quantity form-control" type="text">
                                            </div><!-- End .product-single-qty -->
                                        </td>
                                        <td class="text-right"><span class="subtotal-price">$17.90</span></td>
                                    </tr>

                                    <tr class="product-row">
                                        <td>
                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="<?=$base_url?>upload/products/product-3.jpg"
                                                        alt="product">
                                                </a>

                                                <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                            </figure>
                                        </td>
                                        <td class="product-col">
                                            <h5 class="product-title">
                                                <a href="product.html">ĐỒ CHƠI CHO BÉ</a>
                                            </h5>
                                        </td>
                                        <td>17.000đ</td>
                                        <td>
                                            <div class="product-single-qty">
                                                <input class="horizontal-quantity form-control" type="text">
                                            </div><!-- End .product-single-qty -->
                                        </td>
                                        <td class="text-right"><span class="subtotal-price">17.000đ</span></td>
                                    </tr>

                                    <tr class="product-row">
                                        <td>
                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="<?=$base_url?>upload/products/product-6.jpg"
                                                        alt="product">
                                                </a>

                                                <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                            </figure>
                                        </td>
                                        <td class="product-col">
                                            <h5 class="product-title">
                                                <a href="product.html">Quần ÁO CHO BÉ</a>
                                            </h5>
                                        </td>
                                        <td>17.000đ</td>
                                        <td>
                                            <div class="product-single-qty">
                                                <input class="horizontal-quantity form-control" type="text">
                                            </div><!-- End .product-single-qty -->
                                        </td>
                                        <td class="text-right"><span class="subtotal-price">17.000đ</span></td>
                                    </tr>
                                </tbody>


                                <tfoot>
                                    <tr>
                                        <td colspan="5" class="clearfix">
                                            <div class="float-left">
                                                <div class="cart-discount">
                                                    <form action="#">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Coupon Code" required>
                                                            <div class="input-group-append">
                                                                <button class="btn btn-sm" type="submit">Áp dụng phiếu
                                                                    mua hàng </button>
                                                            </div>
                                                        </div><!-- End .input-group -->
                                                    </form>
                                                </div>
                                            </div><!-- End .float-left -->

                                            <div class="float-right">
                                                <button type="submit" class="btn btn-shop btn-update-cart">
                                                    Cập nhật giỏ hàng
                                                </button>
                                            </div><!-- End .float-right -->
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div><!-- End .cart-table-container -->
                    </div><!-- End .col-lg-8 -->

                    <div class="col-lg-4">
                        <div class="cart-summary">
                            <h3>TỔNG GIỎ HÀNG</h3>

                            <table class="table table-totals">
                                <tbody>
                                    <tr>
                                        <td>Tổng phụ</td>
                                        <td>17.000đ</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="text-left">
                                            <h4>Vận chuyển</h4>

                                            <div class="form-group form-group-custom-control">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="radio"
                                                        checked>
                                                    <label class="custom-control-label">
                                                        Nhận hàng tận nơi</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .form-group -->

                                            <div class="form-group form-group-custom-control mb-0">
                                                <div class="custom-control custom-radio mb-0">
                                                    <input type="radio" name="radio" class="custom-control-input">
                                                    <label class="custom-control-label">Tỷ giá cố định</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .form-group -->

                                            <form action="#">
                                                <div class="form-group form-group-sm">
                                                    <label>Vận chuyển đến <strong>TP HCM.</strong></label>
                                                    <div class="select-custom">
                                                        <select class="form-control form-control-sm">
                                                            <option value="USA">TP HCM </option>
                                                            <option value="Turkey">Bình Dương</option>
                                                            <option value="China">Long An</option>
                                                            <option value="Germany">Hà Nội</option>
                                                        </select>
                                                    </div><!-- End .select-custom -->
                                                </div><!-- End .form-group -->

                                                <div class="form-group form-group-sm">
                                                    <div class="select-custom">
                                                        <select class="form-control form-control-sm">
                                                            <option value="NY">Quận 1</option>
                                                            <option value="CA">Quận 2</option>
                                                            <option value="TX">Quận 3</option>
                                                        </select>
                                                    </div><!-- End .select-custom -->
                                                </div><!-- End .form-group -->

                                                <div class="form-group form-group-sm">
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="Town / City">
                                                </div><!-- End .form-group -->

                                                <div class="form-group form-group-sm">
                                                    <input type="text" class="form-control form-control-sm"
                                                        placeholder="ZIP">
                                                </div><!-- End .form-group -->

                                                <button type="submit" class="btn btn-shop btn-update-total">
                                                    cập nhật tổng thể
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td>Tổng cộng</td>
                                        <td>17.000đ</td>
                                    </tr>
                                </tfoot>
                            </table>

                            <div class="checkout-methods">
                                <a href="cart.html" class="btn btn-block btn-dark">
                                    Tiến hành kiểm tra
                                    <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div><!-- End .cart-summary -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- margin -->