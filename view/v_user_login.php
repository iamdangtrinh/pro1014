<div class="page-header">
	<div class="container d-flex flex-column align-items-center">
		<nav aria-label="breadcrumb" class="breadcrumb-nav">
			<div class="container">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="demo4.html">Trang chủ</a></li>
					<li class="breadcrumb-item"><a href="category.html">Tài khoản</a></li>
					<li class="breadcrumb-item active" aria-current="page">
						Tài khoản của tôi
					</li>
				</ol>
			</div>
		</nav>

		<h1 class="mt-2">Tài khoản của tôi</h1>
	</div>
</div>

<div class="container login-container">
	<div class="row">
		<div class="col-lg-10 mt-2 mx-auto">
			<div class="row">
				<div class="col-md-6">
					<!-- Đăng nhập -->
					<div class="heading mb-1">
						<h2 class="title">Đăng nhập</h2>
					</div>
					<form action="#" method="post">
						<div class="mb-2">
							<label for="login-email">
								Tên đăng nhập hoặc địa chỉ email
								<span class="required">*</span>
							</label>
							<input type="email" name="fullname" class="form-input form-wide" id="login-email">
						</div>

						<div class="mb-2">
							<label for="login-password">
								Mật khẩu
								<span class="required">*</span>
							</label>
							<input type="password" name="password" class="form-input form-wide" id="login-password">
						</div>

						<div class="form-footer">
							<a href="<?= $base_url ?>user/login" class="forget-password text-dark">Quên mật khẩu?</a>
						</div>
						<input type="submit" name="btn_login" value="Đăng nhập" class="btn btn-dark btn-md w-100">
					</form>
				</div>

				<!-- Đăng ký -->
				<div class="col-md-6">
					<div class="heading mb-1">
						<h2 class="title">Đăng ký</h2>
					</div>

					<form action="#" method="post">
						<div class="mb-2">

							<label for="register-email">
								Địa chỉ Email
								<span class="required">*</span>
							</label>
							<input type="email" name="register_email" class="form-input form-wide" id="register-email">
						</div>

						<div class="mb-2">

							<label for="register-password">
								Mật khẩu
								<span class="required">*</span>
							</label>
							<input type="password" name="register_password" class="form-input form-wide"
								id="register-password">
						</div>

						<div class="mb-2">

							<label for="register-password">
								Nhập lại mật khẩu
								<span class="required">*</span>
							</label>
							<input type="password" name="re_password" class="form-input form-wide"
								id="register-password">
						</div>

						<div class="mb-2">

							<label for="register-password">
								Địa chỉ
								<span class="required">*</span>
							</label>
							<input type="text" name="diachi" class="form-input form-wide" id="">
						</div>

						<div class="form-footer mb-2">
							<input name="btn_register" value="Đăng ký" type="submit"
								class="btn btn-dark btn-md w-100 mr-0">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>