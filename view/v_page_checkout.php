            <div class="container checkout-container">
                <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
                    <li>
                        <a href="cart.html">Giỏ hàng</a>
                    </li>
                    <li class="active">
                        <a href="checkout.html">Thủ tục thanh toán</a>
                    </li>
                    <li class="disabled">
                        <a href="#">Hoàn thành đơn hàng</a>
                    </li>
                </ul>

                <div class="row">
                    <div class="col-lg-7">
                        <ul class="checkout-steps">
                            <li>
                                <h2 class="step-title">Chi tiết đơn hàng</h2>

                                <form action="#" id="checkout-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tên 
                                                    <abbr class="required" title="required">*</abbr>
                                                </label>
                                                <input type="text" class="form-control" required />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Họ
                                                    <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" class="form-control" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Tên công ty (nếu có)</label>
                                        <input type="text" class="form-control" />
                                    </div>

                                    <div class="select-custom">
                                        <label>Quốc gia/ Khu vực
                                            <abbr class="required" title="required">*</abbr></label>
                                        <select name="orderby" class="form-control">
                                            <option value="" selected="selected">TP.HCM
                                            </option>
                                            <option value="1">Đồng Nai</option>
                                            <option value="2">Tiền Giang</option>
                                            <option value="3">Long An</option>
                                            <option value="4">Trà Vinh</option>
                                            <option value="5">Tây Ninh</option>
                                          
                                        </select>
                                    </div>

                                    <div class="form-group mb-1 pb-2">
                                        <label>Địa chỉ 
                                            <abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="form-control" placeholder="Số nhà và tên đường" required />
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Căn hộ,..(tùy chọn)" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Thị trấn/ Thành phố
                                            <abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="form-control" required />
                                    </div>

                                    <div class="select-custom">
                                        <label>Tiểu bang/ Quận <abbr class="required" title="required">*</abbr></label>
                                        <select name="orderby" class="form-control">
                                            <option value="" selected="selected">NY</option>
                                            <option value="1">Brunei</option>
                                            <option value="2">Bulgaria</option>
                                            <option value="3">Burkina Faso</option>
                                            <option value="4">Burundi</option>
                                            <option value="5">Cameroon</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Mã bưu / Zip
                                            <abbr class="required" title="required">*</abbr></label>
                                        <input type="text" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Điện thoại <abbr class="required" title="required">*</abbr></label>
                                        <input type="tel" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Địa chỉ email
                                            <abbr class="required" title="required">*</abbr></label>
                                        <input type="email" class="form-control" required />
                                    </div>

                                    <div class="form-group mb-1">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="create-account" />
                                            <label class="custom-control-label" data-toggle="collapse" data-target="#collapseThree" aria-controls="collapseThree" for="create-account">Tạo một tài khoản</label>
                                        </div>
                                    </div>

                                    <div id="collapseThree" class="collapse">
                                        <div class="form-group">
                                            <label>Tạo một tài khoản
                                                <abbr class="required" title="required">*</abbr></label>
                                            <input type="password" placeholder="Password" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox mt-0">
                                            <input type="checkbox" class="custom-control-input" id="different-shipping" />
                                            <label class="custom-control-label" data-toggle="collapse" data-target="#collapseFour" aria-controls="collapseFour" for="different-shipping">Gửi đến một vị trí khác?</label>


                                        </div>
                                    </div>

                                    <div id="collapseFour" class="collapse">
                                        <div class="shipping-info">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Họ <abbr class="required"
                                                                title="required">*</abbr></label>
                                                        <input type="text" class="form-control" required />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Tên <abbr class="required"
                                                                title="required">*</abbr></label>
                                                        <input type="text" class="form-control" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Ghi chú đơn hàng (tùy chọn)</label>
                                                <input type="text" class="form-control">
                                            </div>

                                            <div class="select-custom">
                                                <label>Quốc gia/ Khu vực
                                                    <abbr class="required" title="required">*</abbr></label>
                                                <select name="orderby" class="form-control">
                                                    <option value="" selected="selected">TP.HCM
                                                    </option>
                                                    <option value="1">Đồng Nai</option>
                                                    <option value="2">Tiền Giang</option>
                                                    <option value="3">Long An</option>
                                                    <option value="4">Trà Vinh</option>
                                                    <option value="5">Tây Ninh</option>
                                                
                                                </select>
                                            </div>

                                            <div class="form-group mb-1 pb-2">
                                                <label>Địa chỉ 
                                                    <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" class="form-control" placeholder="Số nhà và tên đường" required />
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Căn hộ,..(tùy chọn)" required />
                                            </div>

                                            <div class="form-group">
                                                <label>Thị trấn / Thành phố <abbr class="required"
                                                        title="required">*</abbr></label>
                                                <input type="text" class="form-control" required />
                                            </div>

                                            <div class="select-custom">
                                                <label>Tiểu bang / Quận <abbr class="required"
                                                        title="required">*</abbr></label>
                                                <select name="orderby" class="form-control">
                                                    <option value="" selected="selected">NY</option>
                                                    <option value="1">Brunei</option>
                                                    <option value="2">Bulgaria</option>
                                                    <option value="3">Burkina Faso</option>
                                                    <option value="4">Burundi</option>
                                                    <option value="5">Cameroon</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Mã bưu / ZIP <abbr class="required"
                                                        title="required">*</abbr></label>
                                                <input type="text" class="form-control" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="order-comments">Ghi chú đơn hàng(tùy chọn)</label>
                                        <textarea class="form-control" placeholder="Ghi chú về đơn hàng của bạn, ví dụ như ghi chú đặc biệt khi giao hàng." required></textarea>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <!-- End .col-lg-8 -->

                    <div class="col-lg-5">
                        <div class="order-summary">
                            <h3>Đơn hàng đã đặt</h3>

                            <table class="table table-mini-cart">
                                <thead>
                                    <tr>
                                        <th colspan="2">Sản phẩm</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-col">
                                            <h3 class="product-title">
                                                Áo em bé
                                                <span class="product-qty">4</span>
                                            </h3>
                                        </td>

                                        <td class="price-col">
                                            <span>259.000 VND</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="product-col">
                                            <h3 class="product-title">
                                                Quần hồng dành cho bé gái
                                                <span class="product-qty">2</span>
                                            </h3>
                                        </td>

                                        <td class="price-col">
                                            <span>149.000 VND</span>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <td>
                                            <h4>Tổng tiền</h4>
                                        </td>

                                        <td class="price-col">
                                            <span>398.000 VND</span>
                                        </td>
                                    </tr>
                                    <tr class="order-shipping">
                                        <td class="text-left" colspan="2">
                                            <h4 class="m-b-sm">Đang chuyển hàng</h4>

                                            <div class="form-group form-group-custom-control">
                                                <div class="custom-control custom-radio d-flex">
                                                    <input type="radio" class="custom-control-input" name="radio" checked />
                                                    <label class="custom-control-label">Nhận hàng tại địa phuowng</label>
                                                </div>
                                                <!-- End .custom-checkbox -->
                                            </div>
                                            <!-- End .form-group -->

                                            <div class="form-group form-group-custom-control mb-0">
                                                <div class="custom-control custom-radio d-flex mb-0">
                                                    <input type="radio" name="radio" class="custom-control-input">
                                                    <label class="custom-control-label">Tỷ giá cố dịnh</label>
                                                </div>
                                                <!-- End .custom-checkbox -->
                                            </div>
                                            <!-- End .form-group -->
                                        </td>

                                    </tr>

                                    <tr class="order-total">
                                        <td>
                                            <h4>Tổng cộng</h4>
                                        </td>
                                        <td>
                                            <b class="total-price"><span>398.000 VND</span></b>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>

                            <div class="payment-methods">
                                <h4 class="">Phương thức thanh toán</h4>
                                <div class="info-box  p-0">
                                    <p>
                                    Rất tiếc, có vẻ như không có phương thức thanh toán nào khả dụng cho tiểu bang của bạn. Vui lòng liên hệ với chúng tôi nếu bạn cần hỗ trợ hoặc muốn sắp xếp thay thế.
                                    </p>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-dark btn-place-order" form="checkout-form">
                                ĐẶT HÀNG
                            </button>
                        </div>
                        <!-- End .cart-summary -->
                    </div>
                    <!-- End .col-lg-4 -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .container -->