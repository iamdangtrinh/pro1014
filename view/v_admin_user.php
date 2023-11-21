            <style>
                .row {
                    display: none;
                }
            </style>
            <h1>Tài khoản</h1>
            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <table>
                    <thead>
                        <tr>
                            <th>Ảnh</th>
                            <th>Họ Tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Quyền</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dsTK as $dsTK) : ?>
                            <tr>
                                <td><img src="<?= $base_url ?>upload/blog/<?=$dsTK['HinhAnh']?>" class="rounded-3" style="width: 32px; height: 32px;" alt=""></td>
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
                                <td>
                                    <a href="">Sửa</a>
                                    <a href="">Xóa</a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- End of Recent Orders -->