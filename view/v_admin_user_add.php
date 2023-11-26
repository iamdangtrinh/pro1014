<style>
    .row {
        display: none;
    }

    body {
        font-family: Arial, sans-serif;
    }

    form {
        width: 100%;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid pink;
        border-radius: 10px;
        background-color: #f8f8f8;
    }

    div {
        margin-top: 10px;
    }

    .form-label {
        font-size: 15px;
        color: #333;
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid pink;
        border-radius: 5px;
        margin-top: 5px;

    }

    .btn {
        display: block;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        color: #fff;
        background-color: pink;
        cursor: pointer;
        margin-top: 10px;
    }

    .btn:hover {
        background-color: #ffd5dd;
    }
    
</style>
<h2 class="mt-2">THÊM TÀI KHOẢN</h2><br>
<?php if (isset($_SESSION['thongbao'])) : ?>
    <div class="alert alert-success" role="alert">
        <?= $_SESSION['thongbao'] ?>
    </div>
<?php endif;
unset($_SESSION['thongbao']); ?>
<?php if (isset($_SESSION['loi'])) : ?>
    <div class="alert alert-danger" role="alert">
        <?= $_SESSION['loi'] ?>
    </div>
<?php endif;
unset($_SESSION['loi']); ?>

<form action="" method="POST">
    <div class="mb-3">
        <label for="MaDM" class="form-label">Họ và tên</label>
        <input type="text" class="form-control" id="HoTen" name="HoTen" value="">
    </div>
    <div class="mb-3 ">
        <label for="TenDM" class="form-label">Địa chỉ Email</label>
        <input type="text" class="form-control" id="Email" name="Email" value="">
    </div>
    <div class="mb-3">
        <label for="TenDM" class="form-label">Số điện thoại</label>
        <input type="text" class="form-control" id="SoDienThoai" name="SoDienThoai" value="">
    </div>
    <div class="mb-3">
        <label for="TenDM" class="form-label">Mật khẩu</label>
        <input type="text" class="form-control" id="MatKhau" name="MatKhau" value="">
    </div>
    <div class="mb-3">
        <label for="TenDM" class="form-label">Địa chỉ</label>
        <input type="text" class="form-control" id="DiaChi" name="DiaChi" value="">
    </div>

    <div class="mb-3">
        <label for="Quyen" class="form-label">Vai trò</label>
        <select class="form-control" id="VaiTro" name='VaiTro'>
            <option value="0" selected>Khách hàng</option>
            <option value="1">Quản trị</option>
            <option value="2">Quản lí cấp cao</option>
        </select>
    </div>
    <button type="submit" name="submit" class="btn btn-primary" value="submit">Xác nhận</button>
</form>