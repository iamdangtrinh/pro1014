<style>
    .recent-orders{
        border-radius: 10px;
      
    }
    table{
        font-size: 15px;
        text-align: center;
        border-collapse: collapse;
        
      
      
    }
    table thead{
        background: #ffc0cba8;
       
        
    }
    table thead tr .chon{
        border-radius: 20px 0 0 0 ;
        width: 100px;
        
    }
    table thead tr th, table tbody tr td{
        border-bottom: 3px solid pink;
        text-align: center;
    }

    .row {
        display: none;
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
    .sua a:hover{
        background: #f8d7da;
        color: #fff;
        border-radius: 5px;
    }
  
    .xoa a:hover{
        background: #f8d7da;
        border-radius: 5px;
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
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dsTK as $dsTK) : ?>
                            <tr>
                                <td><img src="<?= $base_url ?>upload/blog/<?=$dsTK['HinhAnh']?>" class="rounded-3" style="width: 32px; height: 32px; margin-left: 35%;" alt=""></td>
                                <td><?= $dsTK['HoTen'] ?></td>
                                <td><?= $dsTK['Email'] ?></td>
                                <td><?= $dsTK['SoDienThoai'] ?></td>
                                <td>
                                    <?php
                                    switch($dsTK['VaiTro']){
                                        case '0' : 
                                            echo 'Khách hàng';
                                            break;
                                        case '1' : 
                                            echo 'Quản trị';
                                                break;
                                        case '2' : 
                                            echo 'Quản trị cấp cao';
                                            break;
                                    }
                                    
                                    ?>
                                </td>
                                <td >
                                    <div class="lenh">
                                        <div class="sua" ><a href="" style="font-weight: 600; color: #6c9bcf;">Sửa</a></div>
                                        <div class="xoa"><a href=""  style="font-weight: 600; color: #ba5a87;">Xóa</a></div>
                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- End of Recent Orders -->



           