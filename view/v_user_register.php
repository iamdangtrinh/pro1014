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
				<input type="text" name="register_fullname" class="form-input form-wide" id="fullname">
			</div>

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
				<input type="password" name="register_password" class="form-input form-wide" id="register-password">
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
			Bạn đã có tài khoản? <a href="<?= $base_url ?>user/login" class="forget-password text-danger">  Đăng nhập</a>
			</div>

			<div class="form-footer mb-2">
				<input name="btn_register" value="Đăng ký" type="submit" class="btn btn-dark btn-md w-100 mr-0">
			</div>
		</form>
	</div>
</div>


<!-- ajax register form -->
<script>
	$(document).ready(function(){
		$("#form_register").valiadte({
			rules: {
				register_fullname: {
					required: true,
				},
				register_email: {
					required: true,
					email: true,
				}
			},

			messages: {
				register_fullname: {
					required: "Vui lòng nhập họ tên",
				},
				register_email: {
					required: "Vui lòng nhập địa chỉ email",
					email: "",
				}
			}
		})
	})
</script>