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
                            <th class="price-col text-center">Giá</th>
                            <th class="qty-col text-center">Số Lượng</th>
                            <th class="text-right">Tổng Hợp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cart as $key => $value):
                            extract($value) ?>
                            <tr class="product-row">
                                <td>
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="<?= $base_url ?>upload/demoes/demo23/products/<?= $AnhSP ?>"
                                                alt="<?= $TenSP ?>">
                                        </a>

                                        <a href="#" class="btn-remove" title="Remove Product"><i
                                                class="fa-solid fa-xmark"></i></a>
                                    </figure>
                                </td>
                                <td class="product-col text-left">
                                    <a href="">
                                        <?= $TenSP ?>
                                    </a>
                                </td>
                                <td class="m-auto">
                                    <?= number_format($Gia, 0, '.', '.') . " VND" ?>
                                </td>
                                <td>
                                    <div class="product-single-qty">
                                        <form class="cart_quantity" action="" method="post">
                                            <input type="text" name="masp" value="<?=$MaSP?>">
                                            <span class="fa fa-minus" id="minus"></span>
                                            <input type="text" name="quantity" data-quantity="200"
                                                value="<?= $SoLuongSP ?>">
                                            <span class="fa fa-plus" id="plus"></span>
                                            <!-- <input class="horizontal-quantity form-control" type="text"> -->
                                        </form>
                                    </div>
                                </td>
                                <td class="text-right m-auto"><span class="subtotal-price">
                                        <?= number_format(($Gia * $SoLuongSP), 0, '.', '.') . " VND" ?>
                                    </span></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>

                    <tfoot>
                        <tr>
                            <td colspan="5" class="clearfix">
                                <div class="float-left">
                                    <div class="cart-discount">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm"
                                                    placeholder="Mã giảm giá" required>
                                                <div class="input-group-append">
                                                    <button class="btn btn-sm" type="submit">Áp dụng phiếu
                                                        mua hàng </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="float-right">
                                    <button type="submit" class="btn btn-shop btn-update-cart">
                                        Cập nhật giỏ hàng
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

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
                                        <input type="radio" class="custom-control-input" name="radio" checked>
                                        <label class="custom-control-label">
                                            Nhận hàng tận nơi</label>
                                    </div>
                                </div>

                                <div class="form-group form-group-custom-control mb-0">
                                    <div class="custom-control custom-radio mb-0">
                                        <input type="radio" name="radio" class="custom-control-input">
                                        <label class="custom-control-label">Tỷ giá cố định</label>
                                    </div>
                                </div>

                                <form action="#">
                                    <div class="form-group form-group-sm">
                                        <label>Vận chuyển đến <strong>TP HCM.</strong></label>
                                        <div class="select-custom">
                                            <select class="form-control form-control-sm">
                                                <option value="HCM">TP HCM </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-sm">
                                        <div class="select-custom">
                                            <select class="form-control form-control-sm">
                                                <option value="NY">Quận 1</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-sm">
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Town / City">
                                    </div>

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
                            <td class="total_cart">17.000đ</td>
                        </tr>
                    </tfoot>
                </table>

                <div class="checkout-methods">
                    <a href="cart.html" class="btn btn-block btn-dark">
                        Tiến hành kiểm tra
                        <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-6"></div>
<script>
    $(document).ready(function () {
        $('input[name="quantity"]').on('change', function () {
            var newQuantity = $(this).val(); // Get the new quantity value
            console.log($('input[name="masp"][defaultValue]'));

            $.ajax({
                type: "POST",
                url: '<?=$base_url?>controller/ajax.php?act=ajax_cart_quantity',
                data: {
                    quantity: newQuantity,
                    // MaSP: masp,
                },
                success: function (response) {
                    // Handle successful response
                },
                error: function (error) {
                    // Handle error
                }
            });
        });

        $(".cart_quantity").validate({
            rules: {
                quantity: {
                    required: true,
                }
            },
            messages: {
                quantity: {
                    required: "Vui lòng nhập số"
                }
            }
        })
    })
</script>