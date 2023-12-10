<style>
    .error{
        color: red;
        font-weight: bold;
        font-size: 14px;
    }
</style>
<div class="page-header">
    <div class="container d-flex flex-column align-items-center">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=$base_url?>page/home">Trang Chủ</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="<?=$base_url?>gio-hang">Giỏ hàng</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Xác nhận thanh toán
                    </li>
                </ol>
            </div>
        </nav>
        <br>
        <h1>XÁC NHẬN THANH TOÁN</h1>
    </div>
</div>
<div class="container checkout-container">
    <div class="row">
        <div class="col-lg-7">
            <ul class="checkout-steps">
                <li>
                    <h2 class="step-title">Chi tiết đơn hàng</h2>
                    
                    <form  action="<?= $base_url ?>product/update_status_cart" method="post" id="checkout-form">
                        <div class="form-group">
                            <label>Họ và tên
                                <abbr class="required" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="HoTen" name="HoTen"
                                value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['HoTen'] : "" ?>"
                                required />
                        </div>

                        <div class="form-group mb-1 pb-2">
                            <label>Địa chỉ nhận hàng
                                <abbr class="required" title="required">*</abbr></label>
                            <input type="text" class="form-control" placeholder="Địa chỉ nhận hàng" id="DiaChi" name="DiaChi"
                                value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['DiaChi'] : "" ?>"
                                required />
                        </div>

                        <div class="form-group">
                            <label>Điện thoại <abbr class="required" title="required">*</abbr></label>
                            <input type="tel" class="form-control" required id="SoDienThoai" name="SoDienThoai"
                                value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['SoDienThoai'] : "" ?>">
                        </div>

                        <div class="form-group">
                            <label>Địa chỉ email
                                <abbr class="required" title="required">*</abbr></label>
                            <input type="email" class="form-control" required id="Email" name="Email"
                                value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['Email'] : "" ?>" />
                        </div>

                        <div class="form-group">
                            <label class="order-comments">Ghi chú đơn hàng (tùy chọn)</label>
                            <textarea class="form-control"
                                placeholder="Ghi chú về đơn hàng của bạn, ví dụ như ghi chú đặc biệt khi giao hàng."></textarea>
                        </div>
                        
                    
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
                        foreach ($show_cart_for_user as $value):
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
                                <span class="total_checkout">
                                    <?= (isset($_POST['btn_cart'])) ? number_format($total_cart['TongTien'], 0, '.', '.') : '' ?>
                                </span>
                            </td>
                        </tr>
                    </tfoot>
                </table>

                
                    <h5>Hình thức thanh toán:</h5>
                    <input type="radio" checked="checked" name="method_pay" value="nhanhang" id="nhanhang">
                    <label required for="nhanhang">Thanh toán khi nhận hàng</label>
                    </br>
                    <input type="radio" name="method_pay" value="vnpay" id="vnpay">
                    <label required for="vnpay">Thanh toán qua VNPAY</label>
                    </br>
                    <button type="button" class="btn btn-primary w-100" data-toggle="modal"
                        data-target="#exampleModalCenter" value="">ĐẶT HÀNG </button>
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

                <?php
                foreach ($show_cart_for_user as $key => $value):
                    extract($value)
                        ?>
                    <input type="hidden" name="MaSP<?= $key ?>" value="<?= $MaSP ?>" id="">
                    <input type="hidden" name="SoLuongSP<?= $key ?>" value="<?= $SoLuongSP ?>" id="">
                <?php endforeach ?>
                <input type="hidden" value="<?= $total_cart['TongTien'] ?>" name="TongTien">
                <input type="hidden" value="<?= $_SESSION['MaHD'] ?>" name="MaHD">
                <input type="submit" name="btn_update_status_cart" class="rounded btn text-white"
                    style="background: #007bff" value="Đồng Ý">
                </form>
            </div>
        </div>
    </div>
</div>
<script>
        function numericInputHandler(inputId) {
    $(inputId).on("keyup", function () {
        var value = $(this).val();
        value = value.replace(/[^0-9]/g, ""); // Loại bỏ các ký tự không phải số
        $(this).val(value);
    });
}

numericInputHandler("#SoDienThoai");
$(document).ready(function(){
    $('#checkout-form').validate({
        rules: {
                HoTen: {
                    required: true,
                },
                DiaChi: {
                    required: true,
                    minlength: 10,
                },
                SoDienThoai: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    
                },
                Email: {
                    required: true,
                    email: true,
                },
             
            },
            messages: {
                HoTen: {
                    required: "Vui lòng nhập họ tên",
                },
                DiaChi: {
                    required: "Vui lòng nhập địa chỉ",
                    minlength: "*Địa chỉ ít nhất 10 kí tự",
                },
                SoDienThoai: {
                    required: "*Vui lòng nhập số điện thoại",
                    minlength: "*Số điện thoại tối thiểu 10 số",
                    maxlength: "*Số điện thoại tối đa 10 số",
                },
                Email: {
                    required: "Vui lòng nhập địa chỉ Email",
                    email: "Vui lòng nhập đúng định dạng địa chỉ Email",
                },
                
            }
    })
})
</script>