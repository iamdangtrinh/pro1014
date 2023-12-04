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
    .error{
        color: red;
        font-weight: bold;
        font-size: 14px;
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

<form action="" method="POST" id="form_addUser">
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
    <script>
        $().ready(function(){
            $("#form_addUser").validate({
                
                rules:{
                    HoTen: {
                        required: true,
                    },
                    Email: {
                        required: true,
                        email: true,
                    },
                    SoDienThoai: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                    },
                    MatKhau: {
                        required: true,
                        minlength: 8
                    },
                    DiaChi: {
                        required: true,
                        minlength: 10,
                    }
                },
                messages: {
                    HoTen: {
                        required: "*Vui lòng nhập họ tên",
                    },
                    Email: {
                        required: "*Vui lòng nhập địa chỉ Email",
                        email: "*Email không đúng định dạng",
                    },
                    SoDienThoai: {
                        required: "*Vui lòng nhập số điện thoại",
                        minlength: "*Số điện thoại tối thiểu 10 số",
                        maxlength: "*Số điện thoại tối đa 10 số",
                    },
                    MatKhau: {
                        required: "*Vui lòng nhập mật khẩu",
                        minlength: "*Mật khẩu ít nhất 8 kí tự"
                    },
                    DiaChi: {
                        required: "*Vui lòng nhập địa chỉ",
                        minlength: "*Địa chỉ ít nhất 10 kí tự",
                    }
                }
            })

        })
            
        

    </script>