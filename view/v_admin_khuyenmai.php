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

.sua a {
    border: 1px solid #ffff;
    background-color: #ffc0cba8;
    border-radius: 5px;
}

.sua a:hover {
    background: #6c9bcf;
    color: #fff;
    border-radius: 5px;
    border: 1px solid #ffff;
    color: #ffff;

}

.xoa a {
    border: 1px solid #ffff;
    background-color: #ffc0cba8;
    border-radius: 5px;
}

.xoa a:hover {
    background: #ba5a87;
    border-radius: 5px;
    border: 1px solid #ffff;
    color: #ffff;

}

.box_button {
    display: flex;
    justify-content: flex-end;
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
.form-label {
    font-size: 18px;
    color: #333;
}
.form-control {
    width: 50%;
    padding: 10px;
    border: 1px solid pink;
    border-radius: 5px;
    margin-top: 5px;

}
</style>
<h1>Quản lí Khuyến mãi</h1><br>
<!-- Recent Orders Table -->
<h2>Thêm mã khuyến mãi</h2>
<form class="form" action="<?=$base_url?>admin/khuyenmai" method="post">
    <input type="text" class="form-control" name="TenKM" placeholder="Tên khuyến mãi">
    <input type="text" class="form-control" name="khuyenMai" placeholder="CodeKM">
    <input type="text" class="form-control" name="soTienGiam" placeholder="Số tiền giảm">
    <input type="text" class="form-control" name="SoLuong" placeholder="Số lượng">
    <input type="date" class="form-control" name="ngayBatDau" placeholder="Ngày bắt đầu">
    <input type="date" class="form-control" name="ngayKetThuc" placeholder="Ngày kết thúc">
    <button type="submit" name="btn_km" class="them">Thêm</button>
</form>
<div class="box">
    <table>
        <thead>
            <br>
            <h2>Các mã khuyến mãi</h2><br>
            <h2><?php if (isset($loi)) {
                echo $loi;
            }?></h2>
            <h2><?php if (isset($thongbao)) {
                echo $thongbao;
            }?></h2>
            <tr>
                <!-- <th class="chon">Chọn</th> -->
                <th>Tên khuyến mãi</th>
                <th>Số tiền giảm </th>
                <th>Ngày bắt đầu</th>
                <th>Ngày kết thúc</th>
                <th>Số Lượng</th>
                <th style="text-align: center;">Lệnh</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($show_KM as $show):?>
            <tr>
                <td><?= $show['TenKM'];?></td>
                <td><?= $show['GiaKM'];?></td>
                <td><?= $show['NgayBatDau'];?></td>
                <td><?= $show['NgayKetThuc'];?></td>
                <td><?= $show['SoLuong'];?></td>
                <td>
                    <div class="lenh">
                        <div class="sua"><a href="<?=$base_url?>admin/edit/khuyenmai/<?= $show['MaKM'];?>"
                                style="font-weight: 600; ">Sửa</a>
                        </div>
                        <div class="xoa"><a href="<?=$base_url?>admin/delete/khuyenmai/<?= $show['MaKM'];?>"
                                style="font-weight: 600; ">Xóa</a>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach;?>

        </tbody>
        </tbody>
    </table>

</div>
<br>
<!-- <div class="box_button">
    <div><a href="<?=$base_url?>admin/" class="remove" style="font-weight: 600;">Xóa hết</a></div>
</div> -->
<!-- End of Recent Orders -->