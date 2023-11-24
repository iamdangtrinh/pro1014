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
                            <th class="text-right">Tổng tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cart as $key => $value):
                            extract($value) ?>
                            <tr class="product-row total_product_parent">
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
                                    <p data-quantity="<?= $MaSP ?>"></p>
                                    <div class="product-single-qty">
                                        <span class="fa fa-minus minusJS"></span>
                                        <input type="hidden" class="price_product" value="<?= $Gia ?>">
                                        <input type="text" name="quantity" value="<?= $SoLuongSP ?>"
                                            class="quantity_product">
                                        <span class="fa fa-plus plusJS"></span>
                                        <!-- <input class="horizontal-quantity form-control" type="text"> -->
                                    </div>
                                </td>
                                <td class="text-right m-auto">
                                    <span class="subtotal-price">
                                        <div class="total_price"></div>
                                    </span>
                                </td>
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
                    <button href="" class="btn btn-block btn-dark">
                        Tiến hành thanh toán
                        <i class="fa fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-6"></div>
<script>
    $(document).ready(function () {

        function updateTotal() {
            
            var total_cart = 0
            var total_product_parent = $('.total_product_parent');
            for(const product of total_product_parent) {
                var price = product.querySelector('.price_product').value;
                var quantity = product.querySelector('.quantity_product').value;

                total = parseInt(price) *quantity
                product.querySelector('.total_price').innerText = total.toLocaleString('vi-VN')+ ' VND';
                total_cart += total;
            }
            // tổng giỏ hàng
            document.querySelector('.total_cart').innerText = total_cart.toLocaleString('vi-VN')+ ' VND';
            console.log(parseInt(total_cart) - 50000);
        }
        updateTotal()
      

        $('.minusJS').click(function () {
            var product_box = this.closest('.product-single-qty');
            var quantity_input = product_box.querySelector('.quantity_product');
            var currentQuantity = parseInt(quantity_input.value);

            if (currentQuantity > 1) {
                quantity_input.value = currentQuantity - 1;
                $(quantity_input).trigger('change');
            }
        });

        $('.plusJS').click(function () {
            var product_box = this.closest('.product-single-qty');
            var quantity_input = product_box.querySelector('.quantity_product');
            var currentQuantity = parseInt(quantity_input.value);

            quantity_input.value = currentQuantity + 1;
            $(quantity_input).trigger('change');
        });


        $('input[name="quantity"]').on('change', function () {
            var newQuantity = $(this).val(); // Get the new quantity value

            newQuantity = newQuantity.replace(/[^0-9]/g, "");
            if (newQuantity == null) {
                newQuantity = "1";
            } else {
                $(this).val(newQuantity);
            }

            updateTotal()


            var closestProductRow = this.closest('.product-row');
            var MaSP = closestProductRow.querySelector('[data-quantity]').dataset.quantity;

            $.ajax({
                type: "POST",
                url: '<?= $base_url ?>controller/ajax.php?act=ajax_cart_quantity',
                data: {
                    quantity: newQuantity,
                    MaSP: MaSP,
                },
                success: function (response) {
                    // Handle successful response
                },
                error: function (error) {
                    // Handle error
                }
            });
        });

    })
</script>
