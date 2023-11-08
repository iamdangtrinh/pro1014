            <div class="page-header">
                <div class="container d-flex flex-column align-items-center">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav">
                        <div class="container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="demo4.html">Trang Chủ</a></li>
                                <li class="breadcrumb-item"><a href="category.html">Sản Phẩm</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Tài Khoản
                                </li>
                            </ol>
                        </div>
                    </nav>

                    <h1>Tài Khoản</h1>
                </div>
            </div>

            <div class="container reset-password-container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="feature-box border-top-primary">
                            <div class="feature-box-content">
                                <form class="mb-0" action="#">
                                    <p>
                                        Quên mật khẩu? Vui lòng nhập của bạn
                                        tên người dùng hoặc địa chỉ email. Bạn sẽ nhận
                                        một liên kết để tạo mật khẩu mới qua email.
                                    </p>
                                    <div class="form-group mb-0">
                                        <label for="reset-email" class="font-weight-normal">Nhập Email của bạn</label>
                                        <input type="email" class="form-control" id="reset-email" name="reset-email"
                                            required />
                                    </div>

                                    <div class="form-footer mb-0">
                                        <a href="<?=$base_url?>user/login">Click để đăng nhâp</a>

                                        <button type="submit"
                                            class="btn btn-md btn-primary form-footer-right font-weight-normal text-transform-none mr-0">
                                            Đặt lại mật khẩu
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>