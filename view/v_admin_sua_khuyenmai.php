<style>
:root {
    --box-shadow: 0 2rem 3rem var(--color-light);
}

.row {
    display: none;
}

.box {
    margin-top: 10px;
}

h1 {
    margin-top: 10px;
}

table {
    width: 100%;
    border-collapse: collapse;
    box-shadow: var(--box-shadow);
    border-radius: 10px;
}

table:hover {
    box-shadow: 5px 5px 5px #ffd5dd;

}

thead {
    background-color: #ffc0cba8;
    color: white;
    font-size: 16px;

}

tbody {
    border-radius: 20px;
}

th,
td {
    padding: 15px;
    text-align: left;
    text-align: center;
    font-weight: 600;
    font-size: 14.5px;
}

td {
    background-color: #ffc0cb33;
}

.lenh {
    display: flex;
    text-align: center;
    justify-content: center;
}

.lenh div {
    margin: 2px;
}

.lenh div a {
    padding: 5px;
    font-size: 16px;
}

.sua a{
        border: 1px solid #ffff;
        background-color: #ffc0cba8;
        border-radius: 5px;
    }
    .sua a:hover{
        background: #6c9bcf;
        color: #fff;
        border-radius: 5px;
        border: 1px solid #ffff;
        color: #ffff;

    }
     .xoa a{
        border: 1px solid #ffff;
        background-color: #ffc0cba8;
        border-radius: 5px;
     }
    .xoa a:hover{
        background: #ba5a87;
        border-radius: 5px;
        border: 1px solid #ffff;
        color: #ffff;

    }

.box_button {
    display: flex;
}

.them {

    margin-top: 20px;
    padding: 10px;
    font-size: 16px;
    margin: 5px;
    background: pink;
    border-radius: 5px;
    color: #ffff;
}

.them:hover {
    box-shadow: 5px 5px 5px #ffd5dd;
    color: #fff;
    background: pink;

}

.remove {

    padding: 10px;
    font-size: 16px;
    margin: 5px;
    background: pink;
    border-radius: 5px;
    color: #ffff;
}

.remove:hover {
    box-shadow: 5px 5px 5px #ffd5dd;
    color: #fff;
    background: pink;

}

.form input {
    padding: 10px;
    margin: 5px;
}
.row{
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

.form-label {
    font-size: 18px;
    color: #333;
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
.error{
        color: red;
        font-weight: bold;
        font-size: 14px;
    }
</style>
<h1>Quản lí Khuyến mãi</h1><br>
<!-- Recent Orders Table -->
<h2>Sửa khuyến mãi</h2>
<form action="" id="form_editCoupon" method="POST">
<input type="hidden" name="MaKM" value="<?= $show_KM['MaKM'];?>">
            <div class="mb-3">
            <label for="TenKM" lass="form-label">Code khuyến mãi: </label><input type="text" class="form-control" name="TenKM" value="<?= $show_KM['TenKM'];?>"><br>
            </div>
            <div class="mb-3">
            <label for="GiaKM" lass="form-label">Giá được giảm:<input type="text" class="form-control" name="GiaKM" value="<?= $show_KM['GiaKM'];?>"><br>
            </div>
            <div class="mb-3">
            <label for="NgayBatDau"lass="form-label">Ngày bắt đầu:<input type="date" class="form-control" name="NgayBatDau" value="<?= $show_KM['NgayBatDau'];?>"><br>
            </div>
            <div class="mb-3">
            <label for="NgayKetThuc" lass="form-label">Ngày kết thúc:<input type="date" class="form-control" name="NgayKetThuc" value="<?= $show_KM['NgayKetThuc'];?>"><br>
            </div>
            <div class="mb-3">
            <label for="SoLuong" lass="form-label">Số Lượng:<input type="text" class="form-control" name="SoLuong" value="<?= $show_KM['SoLuong'];?>"><br>
            </div>
            <button type="submit" name="btn_sua" class="them">Lưu chỉnh sửa</button>
        </form>
<h4><?php 
?></h4>
<!-- End of Recent Orders -->
<script>
       function numericInputHandler(inputId) {
    $(inputId).on("keyup", function () {
        var value = $(this).val();
        value = value.replace(/[^0-9]/g, ""); // Loại bỏ các ký tự không phải số
        $(this).val(value);
    });
}

numericInputHandler("#soTienGiam");
    $(document).ready(function() {
        $('#form_editCoupon').validate({
            rules: {
                TenKM: {
                    required: true,
                },
                khuyenMai: {
                    required: true
                },
                soTienGiam: {
                    required: true
                },
                SoLuong: {
                    required: true
                },
                ngayBatDau: {
                    required: true
                },
                ngayKetThuc: {
                    required: true
                },
            },
            messages: {
                TenKM: {
                    required: "Vui lòng nhập tên khuyễn mãi",

                },
                khuyenMai: {
                    required: "Vui lòng nhập mã khuyến mãi"
                },
                soTienGiam: {
                    required: "Vui lòng nhập số tiền giảm"
                },
                SoLuong: {
                    required: "Vui lòng nhập số lượng"
                },
                ngayBatDau: {
                    required: "Vui lòng chọn ngày bắt đầu"
                },
                ngayKetThuc: {
                    required: "Vui lòng chọn ngày kết thúc"
                },
            },
            
        })
    })
    
</script>