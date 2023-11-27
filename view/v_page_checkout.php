<div class="container checkout-container">
<nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item" aria-current="page">Giỏ hàng</li>
            <li class="breadcrumb-item active" aria-current="page">Xác nhận thanh toán</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-7">
            <ul class="checkout-steps">
                <li>
                    <h2 class="step-title">Chi tiết đơn hàng</h2>

                    <form action="#" id="checkout-form">
                        <div class="form-group">
                            <label>Họ và tên
                                <abbr class="required" title="required">*</abbr></label>
                            <input type="text" class="form-control" required />
                        </div>

                        <div class="form-group mb-1 pb-2">
                            <label>Địa chỉ
                                <abbr class="required" title="required">*</abbr></label>
                            <input type="text" class="form-control" placeholder="Địa chỉ nhận hàng" required />
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

                        <div class="form-group">
                            <label class="order-comments">Ghi chú đơn hàng (tùy chọn)</label>
                            <textarea class="form-control"
                                placeholder="Ghi chú về đơn hàng của bạn, ví dụ như ghi chú đặc biệt khi giao hàng."
                                required></textarea>
                        </div>
                    </form>
                </li>
            </ul>
        </div>

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
                                <h5 class="product-title">
                                    Áo em bé
                                    <span class="product-qty">4</span>
                                </h5>
                            </td>

                            <td class="price-col">
                                <span>259.000 VND</span>
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
                        <!-- <tr class="order-shipping">
                            <td class="text-left" colspan="2">
                                <h4 class="m-b-sm">Đang chuyển hàng</h4>

                                <div class="form-group form-group-custom-control">
                                    <div class="custom-control custom-radio d-flex">
                                        <input type="radio" class="custom-control-input" name="radio" checked />
                                        <label class="custom-control-label">Nhận hàng tại địa phương</label>
                                    </div>
                                </div>
                            </td>

                        </tr> -->

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