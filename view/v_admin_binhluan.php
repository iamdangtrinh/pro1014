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
<h1>Quản lí Bình Luận</h1><br>
<!-- Recent Orders Table -->
<div class="box">
    <table>
        <thead>
            <br>
            <tr>
                <!-- <th class="chon">Chọn</th> -->
                <th>Ảnh SP</th>
                <th>Sản phẩm</th>
                <th>Số bình luận</th>
                <th>Mới Nhất</th>
                <th>Cũ Nhất</th>
                <th style="text-align: center;">Lệnh</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($show_bl as $show):?>
            <tr>                
                <td><img style="width: 50px; height: 50px;" src="<?=$base_url?>upload/products/<?= $show['AnhSP'];?>" alt="Anh_sP"></td></td>
                <td><?= $show['TenSP'];?> 
                <td><?= $show['SoLuongBinhLuan'];?></td>
                <td><?= $show['BLMoi'];?></td>
                <td><?= $show['BLCu'];?></td>
                <td>
                    <div class="lenh">
                        <div class="xoa"><a href="<?=$base_url?>admin/chitiet/binhluan/<?= $show['MaSP'];?>"
                                style="font-weight: 600; ">Chi tiết</a>
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