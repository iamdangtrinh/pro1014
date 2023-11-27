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

    .img-edit {
        border-radius: 50%;
        margin-top: 15px;
        width: 150px;
        height: auto;
    }
    p{
        font-size: 15px;
    }
    .alert-success {
        margin-bottom: 15px;
        background-color: #cfe2ff;
        border: 2px solid #b6d4fe;
        width: 100%;
        padding: 20px;
        border-radius: 5px;
        color: #084298;
    }

    .alert-danger {
        margin-bottom: 15px;
        background-color: #f8d7da;
        border: 2px solid #f5c2c7;
        width: 100%;
        padding: 20px;
        border-radius: 5px;
        color: #842029;
    }
</style>
<h2 class="mt-2">Sửa tài khoản</h2><br>
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
        <label for="HinhAnh" class="form-label">Hình Ảnh</label>
        <input type="file" class="form-control" id="HoTen" name="HoTen" value="">
        <img class="img-edit" src="<?= $base_url ?>upload/avatar/<?= $dsTK['HinhAnh'] ?>" alt="">
    </div>
    <div class="mb-3">
        <label for="HoTen" class="form-label">Họ và tên</label>
        <input type="text" class="form-control" id="HoTen" name="HoTen" value="<?= $dsTK['HoTen'] ?>">
    </div>
    <div class="mb-3 ">
        <label for="Email" class="form-label">Địa chỉ Email</label>
        <input type="text" class="form-control" id="Email" name="Email" value="<?= $dsTK['Email'] ?>">
    </div>
    <div class="mb-3">
        <label for="SoDienThoai" class="form-label">Số điện thoại</label>
        <input type="text" class="form-control" id="SoDienThoai" name="SoDienThoai" value="<?= $dsTK['SoDienThoai'] ?>">
    </div>
    <div class="mb-3">
        <label for="MatKhau" class="form-label">Mật khẩu</label>
        <input type="text" class="form-control" id="MatKhau" name="MatKhau" value="<?= $dsTK['MatKhau'] ?>">
    </div>
    <div class="mb-3">
        <label for="DiaChi" class="form-label">Địa chỉ</label>
        <input type="text" class="form-control" id="DiaChi" name="DiaChi" value="<?= $dsTK['DiaChi'] ?>">
    </div>

    <div class="mb-3">
        <label for="Quyen" class="form-label">Vai trò</label>
        <select class="form-control" id="VaiTro" name='VaiTro'>
            <option value="0" <?= ($dsTK['VaiTro'] == 0) ? 'selectd' : '' ?>>Khách hàng</option>
            <option value="1" <?= ($dsTK['VaiTro'] == 1) ? 'selectd' : '' ?>>Quản trị</option>
            <option value="2" <?= ($dsTK['VaiTro'] == 2) ? 'selectd' : '' ?>>Quản lí cấp cao</option>
        </select>
    </div>
    <button type="submit" name="submit" class="btn btn-primary" value="submit">Xác nhận</button>
</form>