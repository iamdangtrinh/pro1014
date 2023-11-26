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
</style>
<h1>Quản lí Khuyến mãi</h1><br>
<!-- Recent Orders Table -->
<h2>Sửa khuyến mãi</h2>
<form class="form" action="" method="POST">
    <input type="hidden" name="MaKM" value="<?= $show_KM['MaKM'];?>">
    <!-- Các trường chỉnh sửa, ví dụ: -->
    <label for="TenKM">Code khuyến mãi: </label><input type="text" name="TenKM" value="<?= $show_KM['TenKM'];?>"><br>
    <label for="TenKM">Giá được giảm:<input type="text" name="GiaKM" value="<?= $show_KM['GiaKM'];?>"><br>
    <label for="TenKM">Ngày bắt đầu:<input type="date" name="NgayBatDau" value="<?= $show_KM['NgayBatDau'];?>"><br>
    <label for="TenKM">Ngày kết thúc:<input type="date" name="NgayKetThuc" value="<?= $show_KM['NgayKetThuc'];?>"><br>
    <label for="TenKM">Số Lượng:<input type="text" name="SoLuong" value="<?= $show_KM['SoLuong'];?>"><br>
    <!-- Các trường khác -->
    <button type="submit" name="btn_sua" class="them">Lưu chỉnh sửa</button>
</form>
<h4><?php 
if (isset($loi)) {
    echo $loi;
}
?></h4>
<!-- End of Recent Orders -->