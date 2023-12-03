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

                    <form action="" id="checkout-form">
                        <div class="form-group">
                            <label>Họ và tên
                                <abbr class="required" title="required">*</abbr></label>
                            <input type="text" class="form-control"
                                value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['HoTen'] : "" ?>"
                                required />
                        </div>

                        <div class="form-group mb-1 pb-2">
                            <label>Địa chỉ nhận hàng
                                <abbr class="required" title="required">*</abbr></label>
                            <input type="text" class="form-control" placeholder="Địa chỉ nhận hàng"
                                value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['DiaChi'] : "" ?>"
                                required />
                        </div>

                        <div class="form-group">
                            <label>Điện thoại <abbr class="required" title="required">*</abbr></label>
                            <input type="tel" class="form-control" required
                                value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['SoDienThoai'] : "" ?>">
                        </div>

                        <div class="form-group">
                            <label>Địa chỉ email
                                <abbr class="required" title="required">*</abbr></label>
                            <input type="email" class="form-control" required
                                value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['Email'] : "" ?>" />
                        </div>

                        <div class="form-group">
                            <label class="order-comments">Ghi chú đơn hàng (tùy chọn)</label>
                            <textarea class="form-control"
                                placeholder="Ghi chú về đơn hàng của bạn, ví dụ như ghi chú đặc biệt khi giao hàng."></textarea>
                        </div>
                    </form>
                </li>
            </ul>
        </div>

        <div class="col-lg-5">
            <div class="order-summary">
                <h3>Đơn hàng đã đặt</h3>

                <table class="table ">
                    <thead>
                        <tr>
                            <th colspan="2">Sản phẩm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($show_cart_for_user as $value):
                            extract($value) ?>
                            <tr class="product_parents">
                                <td class="product-col">
                                    <h5 class="product-title text-title">
                                        Tên sản phẩm:
                                        <?= $TenSP ?>
                                    </h5>
                                    <p class="product-qty" style="font-weight: 400">Số lượng:
                                        <?= $SoLuongSP ?>
                                    </p>
                                </td>

                                <td class="price-col">
                                    <span class="">
                                        <?= number_format($total, 0, ',', '.') ?> VND
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <?php $_SESSION['MaHD'] = $MaHD ?>
                    <tfoot>
                        <tr class="cart-subtotal">
                            <td>
                                <h4>Tổng tiền</h4>
                            </td>
                            <td class="price-col">
                                <span class="total_checkout"><?= (isset($_POST['btn_cart'])) ? number_format($total_cart['TongTien'], 0, '.', '.') : ''?></span>
                            </td>
                        </tr>
                    </tfoot>
                </table>

                <form action="" method="post">
                    <h5>Hình thức thanh toán:</h5>
                    <input type="radio" name="method_pay" value="" id="nhanhang">
                    <label required for="nhanhang">Thanh toán khi nhận hàng</label>
                    </br>
                    <input type="radio" name="method_pay" value="" id="vnpay">
                    <label required for="vnpay">Thanh toán qua VNPAY</label>
                    </br>
                    <input type="radio" name="method_pay" value="" id="vnpay">
                    <label required for="vnpay">Thanh toán qua MOMO</label>
                    </br>
                    <button type="button" class="btn btn-primary w-100" data-toggle="modal"
                        data-target="#exampleModalCenter" value="">ĐẶT HÀNG </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" style="background: rgba(0,0,0,0.6);" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered rounded" role="document">
        <div class="modal-content rounded">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalCenterTitle">Xác nhận đơn hàng</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-rounded alert-radius alert-success">
                    <span>Cảm ơn bạn đã đặt hàng tại Bé Yêu Shop. Xin vui lòng nhấn vào đồng ý để xác nhận đơn
                        hàng</span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="rounded btn btn-danger" data-dismiss="modal">Hủy</button>
                <form action="<?= $base_url ?>product/update_status_cart" method="post">

                    <?php 
                    foreach($show_cart_for_user  as $key => $value) : extract($value) 
                    ?>
                    <input type="text" name="MaSP<?=$key?>" value="<?= $MaSP?>" id="">
                    <input type="text" name="SoLuongSP<?=$key?>" value="<?=$SoLuongSP?>" id="">
                    <?php endforeach ?>

                    <input type="hidden" value="<?= $_SESSION['MaHD'] ?>" name="MaHD">
                    <input type="submit" name="btn_update_status_cart" class="rounded btn text-white"
                        style="background: #007bff" value="Đồng Ý">
                </form>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function () {
        function total_cart() {
            var total_checkout = 0;
            var product_parent = $('.product_parents');
            // console.log(document.querySelector('.price_JS').value);
            for (const total_cart of product_parent) {
                var price = total_cart.querySelector('.price_JS').value;
                total = parseInt(price) * 1;
                total_checkout += total;
            }
            document.querySelector('.total_checkout').innerText =total_checkout.toLocaleString('vi-VN') + ' VND'
        };
    })



</script>