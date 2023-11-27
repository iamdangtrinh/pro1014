
<style>
:root{
    --box-shadow: 0 2rem 3rem var(--color-light);
}

.row{
    display: none;
}
.box{
    margin-top: 10px;
}
h1{
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
    font-size: 14px;
    
}
tbody{
    border-radius: 20px;
}
th, td {
    padding: 15px;
    text-align: left;
    text-align: center;
    font-weight: 600;
    font-size: 13px;
}
td{
    background-color: #ffc0cb33;
}
th{
    color: #333;
}
.lenh{
        display: flex;
        text-align: center;
        justify-content: center;
    }
    .lenh div{
        margin: 2px;
    }
    .lenh div a{
        padding: 5px;
        font-size: 16px;
    }
    .sua a{
        border: 1px solid #ffff;
        background-color: #ffc0cba8;
        border-radius: 5px;
        transition: 0.5s;
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
        transition: 0.5s;
     }
    .xoa a:hover{
        background: #ba5a87;
        border-radius: 5px;
        border: 1px solid #ffff;
        color: #ffff;

    }
    .box_button{
        display: flex;
    }
    .them{

       margin-top: 20px;
       padding: 10px;
       font-size: 16px;
       margin: 5px;
       background: pink;
       border-radius: 5px;
       color: #ffff;
    }
    .them:hover{
        box-shadow: 5px 5px 5px #ffd5dd;
        color: #fff;
        background: pink;
        
    }
    .remove{

        padding: 10px;
        font-size: 16px;
        margin: 5px;
        background: pink;
        border-radius: 5px;
        color: #ffff;
        }
        .remove:hover{
        box-shadow: 5px 5px 5px #ffd5dd;
        color: #fff;
        background: pink;
        
        }
        .case-0{
            color: blue;
        }
        .case-1{
            color: red;
        }
</style>
            <h1>Tài khoản</h1>
            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <table>
                    <thead>
                        <tr>
                            <th class="chon">Ảnh</th>
                            <th>Họ Tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Quyền</th>
                            <th style="text-align: center;">Lệnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dsTK as $dsTK) : ?>
                            <tr>
                                <td><img src="<?= $base_url ?>upload/avatar/<?=$dsTK['HinhAnh']?>" class="rounded-3" style="width: 32px; height: 32px; margin-left: 35%;" alt=""></td>
                                <td><?= $dsTK['HoTen'] ?></td>
                                <td><?= $dsTK['Email'] ?></td>
                                <td><?= $dsTK['SoDienThoai'] ?></td>
                                <td>
                                    <?php
                                    switch($dsTK['VaiTro']){
                                        case '0' : 
                                            echo '<p class="case-0">Khách hàng<p>';
                                            break;
                                        case '1' : 
                                            echo '<p class="case-1">Quản trị<p>';
                                                break;
                                        case '2' : 
                                            echo '<p class="case-2">Quản trị cấp cao<p>';
                                            break;
                                    }
                                    
                                    ?>
                                </td>
                                <td >
                                <div class="lenh">
                                    <div class="sua" ><a href="<?=$base_url?>admin/user/edit/<?=$dsTK['MaTK']?>" style="font-weight: 600; ">Sửa</a></div>
                                    <div class="xoa"><a href="<?=$base_url?>admin/user/delete/<?=$dsTK['MaTK']?>"  style="font-weight: 600; ">Xóa</a></div>
                                </div>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="box_button">
                <div><a href="<?=$base_url?>admin/user/add" class="them" style="font-weight: 600;">Thêm mới</a></div>
           </div>
            </div>
            <!-- End of Recent Orders -->




           