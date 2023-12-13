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
#TrangThai {
    padding: 8px; 
    font-size: 14px; 
    border: 1px solid #ccc; 
    border-radius: 5px; 
    width: 200px; 
    background-color: #fff;
    color: #333;
}

#TrangThai option.blue {
    font-weight: bold;
    color: blue;
}

#TrangThai option.xam {
    font-style: bold;
    color: gray;
}

#TrangThai option.xanh {
    font-weight: bold;
    color: green;
}

#TrangThai option.do {
    font-weight: bold;
    color: red;
}
#Thongbao {
    border-radius: 4px;
    padding: 20px;
    color: white; 
    opacity: 1;
    transition: opacity 0.6s; 
    margin-bottom: 15px; 
    background-color: #4CAF50;
    font-size: 15px;
    font-weight: 600;
}
</style>
<h1>Quản lí đơn hàng</h1>
<!-- Recent Orders Table -->
<div class="box">
    <?php if (isset($_SESSION['Thongbao']['Thanhcong'])) {
        echo $_SESSION['Thongbao']['Thanhcong'];
        unset($_SESSION['ThongBao']['Thanhcong']);
    }
    if (isset($_SESSION['Thongbao']['Thatbai'])) {
        echo $_SESSION['Thongbao']['Thatbai'];
        unset($_SESSION['ThongBao']['Thatbai']);
    }
    ?>
    <table>
        <thead>
            <tr>
                <!-- <th class="chon">Chọn</th> -->
                <th>Mã đơn hàng</th>
                <th>Khách hàng</th>
                <th>Số điện thoại</th>
                <th>Trạng thái</th>
                <th style="text-align: center;">Hành động</th>
            </tr>
        </thead>
        <?php foreach($show_HD as $show):?>
        <form action="<?=$base_url?>admin/sua/donhang/<?=$show['MaHD']?>" method="post">
            <input type="hidden" name="MaHD" value="<?= $show['MaHD'];?>">
            <tbody>
                <td><?=$show['MaHD']?></td>
                <td><?=$show['HoTen']?></td>
                <td><?=$show['SoDienThoai']?></td>
                <td>
                    <select id="TrangThai" name="TrangThai">
                        <option class="blue" value="chuan-bi" <?=($show['TrangThai']=='chuan-bi')?'selected':''?>>
                            Chuẩn bị đơn</option>
                        <option class="xam" value="cho-giao" <?=($show['TrangThai']=='cho-giao')?'selected':''?>>
                            Đang giao hàng</option>
                        <option class="xanh" value="hoan-tat" <?=($show['TrangThai']=='hoan-tat')?'selected':''?>>
                            Đã giao</option>
                        <option class="do" value="khong-thanh-cong"
                            <?=($show['TrangThai']=='khong-thanh-cong')?'selected':''?>>Hủy đơn</option>
                    </select>
                </td>
                <td>
                    <div>
                        <a href="<?=$base_url?>chi-tiet-don-hang/<?=$show['MaHD']?>" class="btn " >Xem chi tiết</a>
                        <button type="submit" name="btn-donhang" class="them" style="font-weight: 600;">Cập nhật</button>
                    </div>
                </td>
            </tbody>
        </form>
        <?php endforeach;?>
    </table>
</div>
<br>

<!-- <script>
    var Thongbao = document.getElementById('Thongbao');
    if (Thongbao) {
        setTimeout(function() {
            Thongbao.style.display = 'none'; 
        }, 3000); 
    }
</script> -->
<!-- End of Recent Orders -->