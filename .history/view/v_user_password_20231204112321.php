<div class="page-header">
    <div class="container d-flex flex-column align-items-center">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="demo4.html">Trang Chủ</a></li>
                    <li class="breadcrumb-item"><a href="category.html">Cửa Hàng</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Tài Khoản
                    </li>
                </ol>
            </div>
        </nav>
        <br>
        <h1>TÀI KHOẢN</h1>
    </div>
</div>

<div class="container account-container custom-account-container p-3">
    <div class="row">
        <div class="sidebar widget widget-dashboard mb-lg-0 mb-3 col-lg-3 order-0">
            <h2 class="text-uppercase m-3">Tài Khoản</h2>
            <ul class="nav nav-tabs list flex-column mb-0" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" href="<?=$base_url?>user/dashboard" role="tab"
                        aria-controls="dashboard" aria-selected="true"><i class="fa-brands fa-windows"></i> &nbsp; Bảng
                        Điều Khiển</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" id="order-tab" data-toggle="tab" href="" role="tab"
                        aria-controls="order" aria-selected="true"><i class="fa-solid fa-user"></i> &nbsp; Thông tin tài
                        khoản</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$base_url?>user/password" role="tab" aria-controls="order"
                        aria-selected="true"><i class="fa-solid fa-lock"></i> &nbsp; Đổi mật khẩu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$base_url?>user" role="tab"
                        aria-controls="download" aria-selected="false"><i class="fa-solid fa-clock-rotate-left"></i>
                        &nbsp; Lịch sử đặt hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url ?>page/wishlist"><i class="fa-solid fa-heart"></i> &nbsp;
                        Yêu thích</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php $base_url ?>logout"><i class="fa-solid fa-right-from-bracket"></i>
                        &nbsp; Đăng xuất</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-9 order-lg-last order-1 tab-content">
            <!-- <div class="tab-pane fade active show" id="dashboard" role="tabpanel">
                <div class="dashboard-content">

                    <p>
                        Từ bảng điều khiển tài khoản của bạn, bạn có thể xem
                        <a class="btn btn-link link-to-tab" href="#download">
                            những đơn đặt hàng gần đây</a>,<a class="btn btn-link link-to-tab" href="">
                            sản phẩm bạn yêu thích</a> và
                        <a class="btn btn-link link-to-tab" href="#edit">
                            chỉnh sửa mật khẩu và tài khoản của bạn chi tiết.</a>
                    </p>

                    <div class="mb-4"></div>

                    <div class="row row-lg active">
                        <div class="col-6 col-md-4 ">
                            <div class="feature-box text-center pb-4">
                                <a href="#account" class="link-to-tab"><i class="fa-regular fa-user"></i></a>
                                <div class="feature-box-content">
                                    <h3>THÔNG TIN TÀI KHOẢN</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4">
                            <div class="feature-box text-center pb-4">
                                <a href="#pass" class="link-to-tab"><i class="fa-solid fa-lock"></i></a>
                                <div class="feature-box-content">
                                    <h3>ĐỔI MẬT KHẨU</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4">
                            <div class="feature-box text-center pb-4">
                                <a href="#download" class="link-to-tab"><i
                                        class="fa-solid fa-clock-rotate-left"></i></a>
                                <div class=" feature-box-content">
                                    <h3>LỊCH SỬ ĐẶT HÀNG</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4">
                            <div class="feature-box text-center pb-4">
                                <a href=""><i class="fa-regular fa-heart"></i></a>
                                <div class="feature-box-content">
                                    <h3>YÊU THÍCH</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4">
                            <div class="feature-box text-center pb-4">
                                <a href=""><i class="fa-solid fa-right-from-bracket"></i></a>
                                <div class="feature-box-content">
                                    <h3>ĐĂNG XUẤT</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="tab-pane fade show" id="account" role="tabpanel">
                <div class="order-content">
                    <h3 class="account-sub-title d-none d-md-block">
                        <i class="fa-regular fa-user"></i> &nbsp; Thông tin tài khoản
                    </h3>
                    <div class="order-table-container">
                        <form action="<?=$base_url?>user/update_info" id="form_info" method="POST">
                            <div class="mb-2">
                                <label for="login-name">Tên tài khoản<span class="required">*</span></label>
                                <input type="text" name="name" class="form-input form-wide" id=""
                                    value="<?php echo (isset($_SESSION['user'])) ? $_SESSION["user"]["HoTen"] : "" ?>">
                            </div>

                            <div class="mb-2">
                                <label for="login-email">Địa chỉ email (Bạn không thể thay đổi Email)<span class="required">*</span></label>
                                <input disabled type="email" name="email" class="form-input form-wide" id=""
                                    value="<?php echo (isset($_SESSION['user'])) ? $_SESSION["user"]["Email"] : "" ?>">
                            </div>

                            <div class="mb-2">
                                <label for="login-password">Số điện thoại<span class="required">*</span></label>
                                <input type="number" name="password" class="form-input form-wide" id=""
                                    value="<?php echo (isset($_SESSION['user'])) ? $_SESSION["user"]["SoDienThoai"] : "" ?>">
                            </div>
                            <div class="mb-2">
                                <label for="address">Địa chỉ giao hàng<span class="required">*</span></label>
                                <input type="text" name="address" class="form-input form-wide" id=""
                                    value="<?php echo (isset($_SESSION['user'])) ? $_SESSION["user"]["DiaChi"] : "" ?>">
                            </div>

                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="Hinh" id="Hinh">
                                <label class="input-group-text" for="Hinh">Upload</label>
                            </div>
                            <input type="submit" name="btn_update_info" value="Cập nhật tài khoản"
                                class="btn btn-dark btn-md w-100">
                        </form>

                    </div>
                </div>
            </div>

            <div class="tab-pane fade active show" id="pass" role="tabpanel">
                <div class="order-content">
                    <h3 class="account-sub-title d-none d-md-block">
                        <i class="fa-solid fa-lock"></i> &nbsp; Đổi mật khẩu
                    </h3>
                    <div class="order-table-container">
                        <form action="#" id="form_change_password" method="post">
                            <div class="mb-2">
                                <label for="login-password">Mật khẩu cũ<span class="required">*</span></label>
                                <input disabled type="password" name="password" class="form-input form-wide" id=""
                                    value="<?php echo (isset($_SESSION['user'])) ? $_SESSION["user"]["MatKhau"] : "" ?>">
                            </div>

                            <div class="mb-2">
                                <label for="login-new-password">Mật khẩu mới<span class="required">*</span></label>
                                <input type="password" name="new_password" class="form-input form-wide" id=""
                                    value="">
                            </div>

                            <div class="mb-2">
                                <label for="login-re-password">Nhập lại mật khẩu<span class="required">*</span></label>
                                <input type="text" name="re_password" class="form-input form-wide" id=""
                                    value="">
                            </div>
                            <input type="submit" name="btn_change_pass" value="Đổi mật khẩu"
                                class="btn btn-dark btn-md w-100">
                        </form>

                    </div>
                </div>
            </div><!-- End .tab-pane -->

            <div class="tab-pane fade" id="download" role="tabpanel">
                <div class="order-content">
                    <h3 class="account-sub-title d-none d-md-block">
                        <i class="fa-solid fa-clock-rotate-left"></i> &nbsp; Lịch sử đặt hàng
                    </h3>
                    <div class="order-table-container text-center">
                        <table class="table table-order text-left">
                            <thead>
                                <tr>
                                    <th class="order-id">Mã ĐH</th>
                                    <th class="order-date">Ngày đặt hàng</th>
                                    <th class="order-status">Trạng thái</th>
                                    <th class="order-price">Tổng cộng</th>
                                    <th class="order-action">Mua lại</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr>
                                                <td class="text-center p-0" colspan="5">
                                                    <p class="mb-5 mt-5">
                                                        Chưa có đơn đặt hàng nào được thực hiện
                                                    </p>
                                                </td>
                                            </tr> -->

                                <?php

                                foreach($history_cart as $value):
                                    extract($value) ?>

                                    <tr>
                                        <td>
                                            <strong>#<?= $MaHD ?></strong>
                                        </td>
                                        <td style="color: #000; font-size: 1.6rem; font-weight: 500">
                                            <?php 
                                            $date = date_create($NgayLap);
                                            echo date_format($date, "d-m-Y") ?>
                                        </td>
                                        <td>
                                            <?php

                                            switch($TrangThai) {
                                                case 'chuan-bi':
                                                    echo '<span class="text-white p-1 bg-primary rounded">Người bán đang chuẩn bị</span>';
                                                    break;
                                                case 'cho-giao':
                                                    echo '<span class="rounded text-white p-1" style="background: #007bff">Shipper đang đến</span>';
                                                    break;
                                                case 'hoan-tat':
                                                    echo '<span class="rounded text-white p-1 bg-success">Giao thành công</span>';
                                                break;
                                                case 'khong-thanh-cong':
                                                    echo '<span class="rounded text-white p-1 bg-danger">Đơn hàng không thành công</span>';
                                                    break;
                                            }
                                            ?>
                                        </td>
                                        <td class="text-warning"><?= $TongTien?></td>
                                        <td><a href="#" class="text-success">Mua lại</a></td>
                                    </tr>

                                <?php endforeach ?>

                            </tbody>
                        </table>
                        <hr class="mt-0 mb-3 pb-2" />

                        <a href="category.html" class="btn btn-dark">Đến cửa hàng</a>
                    </div>
                </div>
            </div><!-- End .tab-pane -->

            <div class="tab-pane fade" id="address" role="tabpanel">
                <h3 class="account-sub-title d-none d-md-block mb-1"><i
                        class="sicon-location-pin align-middle mr-3"></i>địa chỉ</h3>
                <div class="addresses-content">
                    <p class="mb-4">

                        Các địa chỉ sau sẽ được sử dụng trên trang thanh toán bởi
                        mặc định.
                    </p>

                    <div class="row">
                        <div class="address col-md-6">
                            <div class="heading d-flex">
                                <h4 class="text-dark mb-0">
                                    Địa chỉ thanh toán</h4>
                            </div>

                            <div class="address-box">
                                Bạn chưa thiết lập loại địa chỉ này.
                            </div>

                            <a href="#billing" class="btn btn-default address-action link-to-tab">Thêm địa
                                chỉ</a>
                        </div>

                        <div class="address col-md-6 mt-5 mt-md-0">
                            <div class="heading d-flex">
                                <h4 class="text-dark mb-0">

                                    Địa chỉ giao hàng
                                </h4>
                            </div>

                            <div class="address-box">

                                Bạn chưa thiết lập loại địa chỉ này.
                            </div>

                            <a href="#shipping" class="btn btn-default address-action link-to-tab">Thêm địa
                                chỉ</a>
                        </div>
                    </div>
                </div>
            </div><!-- End .tab-pane -->

            <div class="tab-pane fade" id="edit" role="tabpanel">
                <h3 class="account-sub-title d-none d-md-block mt-0 pt-1 ml-1"><i
                        class="icon-user-2 align-middle mr-3 pr-1"></i>Thay đổi thông tin tài khoản</h3>
                <div class="account-content">
                    <form action="#" method="POST">
                        <div class="form-group mb-2">
                            <label for="acc-text">Tên đầy đủ <span class=""></span></label>
                            <input type="text" class="form-control" id="acc-text" name="HoTen"
                                placeholder="Tên đầy đủ" required />
                            <p>
                                Đây sẽ là cách tên của bạn sẽ được hiển thị trong phần tài khoản và
                                trong
                                đánh giá</p>
                        </div>


                        <div class="form-group mb-4">
                            <label for="acc-email">Địa chỉ Email <span class=""></span></label>
                            <input disabled="email" class="form-control" id="acc-email" name="acc-email"
                                placeholder="<?=$_SESSION['user']['Email']?>" required />
                        </div>

                        <div class="change-password">
                            <h3 class="text-uppercase mb-2">Mật khẩu</h3>

                            <div class="form-group">
                                <label for="acc-password">
                                    Mật khẩu hiện tại</label>
                                <input disabled="password" class="form-control" id="acc-password" name="password"
                                    placeholder="<?=$_SESSION['user']['MatKhau']?>" />
                            </div>

                            <div class="form-group">
                                <label for="acc-password">Mật khẩu mới (Không để trống)</label>
                                <input type="password" class="form-control" id="acc-new-password"
                                    name="new_password" />
                            </div>

                            <div class="form-group">
                                <label for="acc-password">Xác nhận mật khẩu mới</label>
                                <input type="password" class="form-control" id="acc-confirm-password"
                                    name="re_password" />
                            </div>
                        </div>

                        <div class="form-footer mt-3 mb-0">
                            <button type="submit" class="btn btn-dark mr-0">
                                Lưu thay đổi
                            </button>
                        </div>
                    </form>
                </div>
            </div><!-- End .tab-pane -->

            <div class="tab-pane fade" id="billing" role="tabpanel">
                <div class="address account-content mt-0 pt-2">
                    <h4 class="title">
                        Địa chỉ thanh toán</h4>

                    <form class="mb-2" action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Họ <span class="required">*</span></label>
                                    <input type="text" class="form-control" required />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên <span class="required">*</span></label>
                                    <input type="text" class="form-control" required />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Công ty </label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="select-custom">
                            <label>Quốc gia / Khu vực <span class="required">*</span></label>
                            <select name="orderby" class="form-control">
                                <option value="" selected="selected">
                                    Việt Nam
                                </option>
                                <option value="1">TP HCM</option>
                                <option value="2">HÀ NỘI</option>
                                <option value="3">ĐÀ NẴNG</option>
                                <option value="4">CẦN THƠ</option>
                                <option value="5">HUẾ</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Địa chỉ đường phố <span class="required">*</span></label>
                            <input type="text" class="form-control" placeholder="House number and street name"
                                required />
                            <input type="text" class="form-control"
                                placeholder="Apartment, suite, unit, etc. (optional)" required />
                        </div>

                        <div class="form-group">
                            <label>
                                Thị trấn / Thành phố<span class="required">*</span></label>
                            <input type="text" class="form-control" required />
                        </div>

                        <div class="form-group">
                            <label>
                                Thành Phố / Quốc gia <span class="required">*</span></label>
                            <input type="text" class="form-control" required />
                        </div>

                        <div class="form-group">
                            <label>Mã bưu / Zip <span class="required">*</span></label>
                            <input type="text" class="form-control" required />
                        </div>

                        <div class="form-group mb-3">
                            <label>Số điện thoại <span class="required">*</span></label>
                            <input type="number" class="form-control" required />
                        </div>

                        <div class="form-group mb-3">
                            <label> Địa chỉ Email <span class="required">*</span></label>
                            <input type="email" class="form-control" placeholder="hoten@gmail.com" required />
                        </div>

                        <div class="form-footer mb-0">
                            <div class="form-footer-right">
                                <button type="submit" class="btn btn-dark py-4">
                                    Lưu địa chỉ
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- End .tab-pane -->

            <div class="tab-pane fade" id="shipping" role="tabpanel">
                <div class="address account-content mt-0 pt-2">
                    <h4 class="title mb-3">Địa chỉ giao hàng</h4>

                    <form class="mb-2" action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Họ <span class="required">*</span></label>
                                    <input type="text" class="form-control" required />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên <span class="required">*</span></label>
                                    <input type="text" class="form-control" required />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Công ty </label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="select-custom">
                            <label>
                                Quốc gia / Khu vực <span class="required">*</span></label>
                            <select name="orderby" class="form-control">
                                <option value="" selected="selected">Việt Nam
                                </option>
                                <option value="1">TP HCM</option>
                                <option value="2">HÀ NỘI</option>
                                <option value="3">HUẾ</option>
                                <option value="4">ĐÀ NẴNG</option>
                                <option value="5">CẦN THƠ</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Địa chỉ đường phố <span class="required">*</span></label>
                            <input type="text" class="form-control" placeholder="House number and street name"
                                required />
                            <input type="text" class="form-control" placeholder="ấp, xã/thị xã, huyện" required />
                        </div>

                        <div class="form-group">
                            <label>
                                Thị trấn / Thành phố <span class="required">*</span></label>
                            <input type="text" class="form-control" required />
                        </div>

                        <div class="form-group">
                            <label>Thành phố/ Quốc gia<span class="required">*</span></label>
                            <input type="text" class="form-control" required />
                        </div>

                        <div class="form-group">
                            <label>Mã bưu / Zip<span class="required">*</span></label>
                            <input type="text" class="form-control" required />
                        </div>

                        <div class="form-footer mb-0">
                            <div class="form-footer-right">
                                <button type="submit" class="btn btn-dark py-4">
                                    Lưu địa chỉ
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- End .tab-pane -->
        </div><!-- End .tab-content -->
    </div><!-- End .row -->
</div><!-- End .container -->

<div class="mb-5"></div><!-- margin -->