<div class="container">
    <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
        </ol>
    </nav>



    <div class="row">
        <div class="col-lg-8">
            <div class="cart-table-container">
                <table class="table table-cart">
                    <thead>
                        <tr>
                            <!-- <th class="thumbnail-col"></th> -->
                            <th colspan="2" class="product-col">Sản Phẩm</th>
                            <th class="price-col text-center">Đơn Giá</th>
                            <th class="text-center">Số Lượng</th>
                            <th class="text-right">Số Tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($cart as $key => $value):
                            extract($value) ?>
                            <tr class="product-row total_product_parent">
                                <td>
                                    <figure class="product-image-container">
                                        <a href="<?= $base_url ?>product/detail/<?= $MaSP ?>" class="product-image">
                                            <img src="<?= $base_url ?>upload/demoes/demo23/products/<?= $AnhSP ?>"
                                                alt="<?= $TenSP ?>">
                                        </a>

                                        <a href="<?= $base_url ?>delete_cart/<?= $MaSP ?>" class="btn-remove"
                                            title="Xóa sản "><i class="fa-solid fa-xmark"></i></a>
                                    </figure>
                                </td>
                                <td class="product-col text-left">
                                    <a href="<?= $base_url ?>product/detail/<?= $MaSP ?>" class="name_cart">
                                        <?= $TenSP ?>
                                    </a>
                                </td>
                                <td class="m-auto" style="width:115px">
                                    <?= number_format($Gia, 0, '.', '.')." VND" ?>
                                </td>
                                <td class="" style="width: 100px">
                                <p data-quantity="<?= $MaSP ?>"></p>
                                    <div class="product-single-qty">
                                        <span class="fa fa-minus minusJS"></span>
                                        <input type="hidden" class="price_product" value="<?= $Gia ?>">
                                        <input type="text" name="quantity" value="<?= $SoLuongSP ?>"
                                            class="quantity_product">
                                        <span class="fa fa-plus plusJS"></span>
                                    </div>
                                </td>
                                <td class="text-right m-auto" style="width:115px">
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
                                        <form id="coupon" action="#" method="post">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" id="coupon_code"
                                                    placeholder="Mã giảm giá" name="couponcode">
                                                <div class="input-group-append">
                                                    <input type="hidden" name="btn_coupon" value="btn_coupon">
                                                    <input class="btn btn-sm btn-primary" id="coupon_code_btn"
                                                        type="submit" name="" value="Áp dụng phiếu mua hàng">
                                                </div>
                                            </div>
                                            <!-- hiển thị kết quả của coupon -->
                                            <div class="result_coupon"></div>

                                        </form>
                                    </div>
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
                    </tbody>

                    <tfoot>
                        <tr>
                            <td>Tổng cộng</td>
                            <td class="total_cart"></td>
                        </tr>
                    </tfoot>
                </table>

                <div class="checkout-methods">
                    <a href="<?= $base_url ?>page/checkout" class="btn btn-block btn-dark">
                        Tiến hành thanh toán
                        <i class="fa fa-arrow-right"></i>
                    </a>
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
            for (const product of total_product_parent) {
                var price = product.querySelector('.price_product').value;
                var quantity = product.querySelector('.quantity_product').value;
                total = parseInt(price) * quantity
                product.querySelector('.total_price').innerText = total.toLocaleString('vi-VN') + ' VND';
                total_cart += total;
            }

            var coupon_value = $('.coupon_value').val();
            total_cart -= (coupon_value) ? coupon_value : 0;
            document.querySelector('.total_cart').innerText = total_cart.toLocaleString('vi-VN') + ' VND';
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

        $('input[name="quantity"]').on('change', function (e) {
            e.preventDefault();
            var newQuantity = $(this).val(); // Get the new quantity value
            newQuantity = newQuantity.replace(/[^0-9]/g, "");
            if (newQuantity == null && newQuantity == isNaN && newQuantity == undefined) {
                newQuantity = "1";
            } else {
                if (newQuantity < 1) {
                    newQuantity = "1";
                }
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
                success: function (data) {
                    if (data === "quantity_max") {
                        console.log("Số lượng sản phẩm chỉ còn");
                        $('.max_quantity').text(data);
                    } else {
                        // hiển thị modal dialog tại đây
                    }
                }
            });

        });

        $('#coupon').on('submit', function (e) {
            e.preventDefault();
        })

        $('#coupon').on('submit', function () {
            var data = $(this).serialize();

            $.ajax({
                type: "POST",
                url: "<?= $base_url ?>controller/ajax.php?act=ajax_cart_coupon",
                data: data,
                success: function (data) {
                    if (data === "error_coupon_null") {
                        $(".result_coupon").text("Vui lòng nhập mã giảm giá")
                    } else if (data === "error_coupon_false") {
                        $(".result_coupon").text("Mã giảm giá không đúng")
                    }
                    else {
                        $(".result_coupon").html(data);
                        updateTotal();
                    }
                },
            })
        })
    })

</script>