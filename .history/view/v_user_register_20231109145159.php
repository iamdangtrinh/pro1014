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
		<form action="?mod=user&act=has_account" method="post" id="form_register">

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
				<label for="password">
					Mật khẩu
					<span class="required">*</span>
				</label>
				<input type="password" name="password" class="form-input form-wide" id="password">
			</div>

			<div class="mb-2">
				<label for="re_password">
					Nhập lại mật khẩu
					<span class="required">*</span>
				</label>
				<input type="password" name="re_password" class="form-input form-wide" id="re_password">
			</div>

			<div class="mb-2">
				<label for="address">
					Địa chỉ
				</label>
				<input type="text" name="address" class="form-input form-wide" id="address">
			</div>


			<div class="form-footer">
				Bạn đã có tài khoản? <a href="<?= $base_url ?>user/login" class="forget-password text-danger"> Đăng
					nhập</a>
			</div>

			<div class="form-footer mb-2">
				<input name="btn_register" value="Đăng ký" type="submit" class="btn btn-dark btn-md ">
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
						// minlength:  10,
					},
					email: {
						required: true,
						email: true,
						remote: '?mod=user&act=has_account',
					},
					password: {
						required: true,
						minlength: 8,
					},
					re_password: {
						equalTo: "#password",
					}
				},

				messages: {
					fullname: {
						required: "Vui lòng nhập họ tên",
						// minlength: "Nhập tối thiểu 10 kí tự",
					},
					email: {
						required: "Vui lòng nhập địa chỉ email",
						email: "Địa chỉ không phải email",
						remote: "Tài khoản này tồn tại"
					},
					password: {
						required: "Vui lòng nhập mật khẩu",
						minlength: "Mật khẩu tối thiểu 8",
					},
					re_password: {
						equalTo: "Mật khẩu không trùng khớp",
					}
				},



				submitHandler: function (form) {
					var fullname = $("#fullname").val();
					var email = $("#register-email").val();
					var password = $("#password").val();
					var re_password = $("#re_password").val();

					$.ajax({
						type: "POST",
						url: "?mod=user&act=register",
						data: {
							fullname: fullname,
							email: email,
							password: password,
							re_password: re_password,
						},
					})

				}
			})

		})

</script>