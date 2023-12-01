<h1>Thống kê</h1>
<!-- Analyses -->
<div class="analyse">
    <div class="sales">
        <div class="status">
            <div class="info">
                <h3>Doanh thu</h3>
                <?php foreach($tkTongDoanhThu as $tdt):?>
                <h1><?= number_format($tdt['TongTatCaHoaDon'], 0, ",", ".") ?>đ</h1>
                <?php endforeach;?>
            </div>
            <div class="progresss">
                <svg>
                    <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="percentage">
                    <p>+81%</p>
                </div>
            </div>
        </div>
    </div>
    <div class="visits">
        <div class="status">
            <div class="info">
                <h3>Khách hàng</h3>
                <h1><?= $tkUser ?></h1>
            </div>
            <div class="progresss">
                <svg>
                    <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="percentage">
                    <p>-48%</p>
                </div>
            </div>
        </div>
    </div>
    <div class="product">
        <div class="status">
            <div class="info">
                <h3>Sản phẩm</h3>
                <h1><?= $tkProduct ?></h1>
            </div>
            <div class="progresss">
                <svg>
                    <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="percentage">
                    <p>+21%</p>
                </div>
            </div>
        </div>
    </div>
    <div class="searches">
        <div class="status">
            <div class="info">
                <h3>Đơn hàng</h3>
                <h1><?= $tkHoaDon ?></h1>
            </div>
            <div class="progresss">
                <svg>
                    <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="percentage">
                    <p>+21%</p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End of Analyses -->



<!-- New Users Section -->
<div class="row chart">
    <div class="col-md-6">
        <div class="cart-header">
            <strong>Thống kê sản phẩm theo danh mục</strong>
        </div>
        <div class="card chart-left">

            <div id="myChart" style="max-width:600px; height:300px"></div>
        </div>
        <div class="card-table">
            <table class="table">
                <thead>
                    <tr>
                        <th>Loại sản phẩm</th>
                        <th>Số lượng sản phẩm</th>
                        <th>Giá trung bình</th>
                        <th>Giá thấp nhất</th>
                        <th>Giá cao nhất</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tkSpTheoDanhMuc as $dm) : ?>
                        <tr>
                            <td><?= $dm['TenDM'] ?></td>
                            <td><?= $dm['SoLuong'] ?></td>
                            <td><?= number_format($dm['TrungBinh'], 0, ",", ".") ?>đ</td>
                            <td><?= number_format($dm['ThapNhat'], 0, ",", ".") ?>đ</td>
                            <td><?= number_format($dm['CaoNhat'], 0, ",", ".") ?>đ</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-6">
        <div class="cart-header">
            <strong>Thống kê doanh thu</strong>
        </div>
        <div class="card chart-right">

            <div id="myChart2" style="max-width:600px; height:300px"></div>
        </div>
        <div class="card-table">
            <table class="table">
                <thead>
                    <tr>
                        <th>Tháng/Năm</th>
                        <th>Số khách hàng</th>
                        <th>Số lượt mua</th>
                        <th>Số sản phẩm mua</th>
                        <th>Doanh thu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tkDoanhThu as $dt) : ?>
                        <tr>
                            <td><?= $dt['Thang'] ?>/<?= $dt['Nam'] ?></td>
                            <td><?= $dt['SoKhachHang'] ?></td>
                            <td><?= $dt['SoLuotMua']  ?></td>
                            <td><?= $dt['SoLuongSP'] ?></td>
                            <td><?= number_format($dt['DoanhThu'], 0, ",", ".") ?>đ</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>


    </div>
</div>
<div class="new-users">
    <h2>Tài khoản mới</h2>
    <div class="user-list">
        <?php foreach ($usermoi as $taikhoanmoi) : ?>
            <div class="user">
                <img src="<?= $base_url ?>upload/avatar/<?= $taikhoanmoi['HinhAnh'] ?>">
                <h3 style="font-weight: 600;"><?= $taikhoanmoi['HoTen'] ?></h3>
                <p>
                    <?php
                    if ($taikhoanmoi['VaiTro'] > 0) {
                        echo 'Quản lí';
                    } else {
                        echo 'Khách hàng';
                    }
                    ?>
                </p>
            </div>

        <?php endforeach; ?>
    </div>
</div>
<!-- End of New Users Section -->

<!-- Recent Orders Table -->
<div class="recent-orders">
    <h2>Những đơn hàng gần đây</h2>
    <table>
        <thead>
            <tr>
                
                <th>Mã hóa đơn</th>
                <th>Mã khách hàng</th>
                <th>Ngày lập hóa đơn</th>
                <th>Tổng hóa đơn</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($hoaDonMoi as $hdm):?>
            <tr>
                
                <td><?= $hdm['MaTK']?></td>
                <td><?= $hdm['MaHD']?></td>
                <td><?= $hdm['NgayLap']?></td>
                <td> <strong><?= number_format($hdm['TongTien'], 0, ",", ".")?>đ</strong></td>
                <td>
                <?php
                        switch ($hdm['TrangThai']) {
                            case 'gio-hang':
                                echo '<strong style=" color: var(--color-warning);">Giỏ hàng</strong>';
                                break;
                            case 'chuan-bi':
                                echo '<strong style="color: var(--color-pink);">Đang chuẩn bị</strong>';
                                break;
                            case 'cho-giao':
                                echo '<strong style=" color: var(--color-primary);">Chờ giao</strong>';
                                break;
                            case 'hoan-tat':
                                echo '<strong style="color: var(--color-success);">Hoàn tất</strong>';
                                break;
                            case 'khong-thanhcong':
                                echo '<strong style="color: var(--color-danger);">Không thành công</strong>';
                                break;
                        }

                        ?>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <a href="#">Show All</a>
</div>
<!-- End of Recent Orders -->
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    // Your Function
    function drawChart() {

        // Set Data
        const data = google.visualization.arrayToDataTable([
            ['Loại Sản phẩm', 'Số lượng'],
            <?php foreach ($tkSpTheoDanhMuc as $dm) {
                echo "['" . $dm['TenDM'] . "'," . $dm['SoLuong'] . "],";
            } ?>


        ]);

        // Set Options
        const options = {
            title: 'Biểu đồ số lượng sản phẩm theo loại',
            is3D: true
        };

        // Draw
        const chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);


        // Set Data
        const data2 = google.visualization.arrayToDataTable([
            ['Tháng/Năm', 'DoanhThu'],
            <?php foreach ($tkDoanhThu as $dt) {
                echo "['" . $dt['Thang'] ."/".$dt['Nam']. "'," . $dt['DoanhThu'] . "],";
            } ?>

        ]);

        // Set Options
        const options2 = {
            title: 'Biểu đồ số lượng theo Năm/Tháng'
        };

        // Draw
        const chart2 = new google.visualization.ColumnChart(document.getElementById('myChart2'));
        chart2.draw(data2, options2);
    }
</script>