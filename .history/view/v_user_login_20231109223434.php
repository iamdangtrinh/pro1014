<div class="page-header">
	<div class="container d-flex flex-column align-items-center">
		<nav aria-label="breadcrumb" class="breadcrumb-nav">
			<div class="container">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="demo4.html">Trang chủ</a></li>
					<li class="breadcrumb-item"><a href="category.html">Tài khoản</a></li>
					<li class="breadcrumb-item active" aria-current="page">
						Đăng nhập
					</li>
				</ol>
			</div>
		</nav>

		<h1 class="mt-2">Đăng nhập tài khoản</h1>
	</div>
</div>

<div class="container  login-container">
	<div class=" mt-2 mx-auto">

		<?php if (isset($_SESSION['error']['login'])): ?>
			<h5 class="text-danger"><?= $_SESSION['error']['login'] ?></h5>
		<?php endif;
		unset($_SESSION['error']['login']) ?>

		<form action="#" id="form_login" method="post">

			<div class="mb-2">
				<label for="login-email">Địa chỉ email<span class="required">*</span></label>
				<input type="email" name="email" class="form-input form-wide" id="login-email">
			</div>

			<div class="mb-2">
				<label for="login-password">Mật khẩu<span class="required">*</span></label>
				<input type="password" name="password" class="form-input form-wide" id="login-password">
			</div>

			<div class="form-footer">
				<a href="<?= $base_url ?>user/login" class="text-dark">Quên mật khẩu?</a>
				<a href="<?= $base_url ?>user/register" class="text-danger form-footer-right">Đăng ký
					tài khoản</a>
			</div>
			<input type="submit" name="btn_login" value="Đăng nhập" class="btn btn-dark btn-md w-100">
		</form>

	</div>
</div>

<script>
			$("#form_login").validate({
				// các nguyên tắt 
				rules: {
					email: {
						required: true,
						email: true
					},
					password: {
						required: true
					}
				},

				// hiển thị tin nhắn lỗi 
				messages: {
					email: {
						required: "Vui lòng nhập địa chỉ email",
						email: "Vui lòng nhập địa chỉ email",
					},

					password: {
						required: "Vui lòng nhập mật khẩu"
					}
				},

				submitHandler: function (form) {
					$.ajax({
						type: "POST",
						url: "?mod=user&act=login",
						data: {
                              email: email,
                              password: password
                          },
					});
				}
			});
		}
</script>