<div class="page-header">
	<div class="container d-flex flex-column align-items-center">
		<nav aria-label="breadcrumb" class="breadcrumb-nav">
			<div class="container">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="demo4.html">Trang chủ</a></li>
					<li class="breadcrumb-item"><a href="category.html">Tài khoản</a></li>
					<li class="breadcrumb-item active" aria-current="page">
						Đăng ký
					</li>
				</ol>
			</div>
		</nav>

		<h1 class="mt-2">Đăng ký tài khoản</h1>
	</div>
</div>

<div class="container  login-container">
	<div class=" mt-2 mx-auto">
		<form action="#" method="post" id="form_register">

			<div class="mb-2">
				<label for="fullname">
					Họ và tên
					<span class="required">*</span>
				</label>
				<input type="text" name="fullname" class="form-input form-wide" id="fullname">
			</div>

			<div class="mb-2">
				<label for="register-email">
					Địa chỉ Email
					<span class="required">*</span>
				</label>
				<input type="email" name="email" class="form-input form-wide" id="register-email">
			</div>

			<div class="mb-2">
				<label for="register-password">
					Mật khẩu
					<span class="required">*</span>
				</label>
				<input type="password" name="password" class="form-input form-wide" id="register-password">
			</div>

			<div class="mb-2">
				<label for="register-password">
					Nhập lại mật khẩu
					<span class="required">*</span>
				</label>
				<input type="password" name="re_password" class="form-input form-wide" id="register-password">
			</div>

			<div class="mb-2">
				<label for="register-password">
					Địa chỉ
					<span class="required">*</span>
				</label>
				<input type="text" name="address" class="form-input form-wide" id="">
			</div>


			<div class="form-footer">
				Bạn đã có tài khoản? <a href="<?= $base_url ?>user/login" class="forget-password text-danger"> Đăng
					nhập</a>
			</div>

			<div class="form-footer mb-2">
				<input name="btn_register" value="Đăng ký" type="submit" class="btn btn-dark btn-md w-100 mr-0">
			</div>
		</form>
	</div>
</div>


<!-- ajax register form -->
<script>
	$(document).ready(
		function () {
			$("#form_register").validate({
				rules: {
					fullname: {
						required: true,
					},
					email: {
						required: true,
						email: true,
					},
					password: {
						required: true,
						minlength: 5,
					},
					re_password: {
						required: true,
					}
				},

				messages: {
					fullname: {
						required: "Vui lòng nhập họ tên",
					},
					email: {
						required: "Vui lòng nhập địa chỉ email",
						email: "Địa chỉ không phải email",
					},

					password: {
						required: "Vui lòng nhập mật khẩu",
						minlength: "Mật khẩu tối thiểu 5",
					}
				},

				submitHandler: function (form) {
					$.ajax({
						type: "POST",
						url: "?mod=user&act=register",
						data: {
							fullname: fullname,
							email: email
						},
					})
				}
			})

		})

</script>