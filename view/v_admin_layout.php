<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="<?=$base_url?>assets/style.css">
    <title>Admin</title>
    <style>
        .active {
            z-index: 2;
            color: var( --white-color);
            background-color: var(--text3-color);
            border-color: var(--bs-list-group-active-border-color);
        }
        aside .sidebar{
            margin-top: -30px;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="<?= $base_url ?>upload/logo.png">
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="<?=$base_url?>admin/dashboard" class="list_group-item <?=(strpos($view_name,'dashboard'))?'active':'' ?>">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Tổng quan</h3>
                </a>
                <a href="<?=$base_url?>admin/user" class="list_group-item <?=(strpos($view_name,'user'))?'active':'' ?>">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Tài khoản</h3>
                </a>
                <a href="<?=$base_url?>admin/category" class="list_group-item <?=(strpos($view_name,'category'))?'active':'' ?>">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Danh mục</h3>
                </a>
                <a href="<?=$base_url?>admin/product" class="list_group-item <?=(strpos($view_name,'product'))?'active':'' ?>">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Sản phẩm</h3>
                </a>
                <a href="<?=$base_url?>admin/binhluan" class="list_group-item <?=(strpos($view_name,'binhluan'))?'active':'' ?>">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Bình luận</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        receipt_long
                    </span>
                    <h3>Đơn hàng</h3>
                </a>
                <a href="<?=$base_url?>admin/khuyenmai" class="list_group-item <?=(strpos($view_name,'khuyenmai'))?'active':'' ?>">
                    <span class="material-icons-sharp">
                        mail_outline
                    </span>
                    <h3>Khuyến mãi</h3>
                    <span class="message-count">27</span>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <?php include_once 'view/v_'.$view_name.'.php'; ?>
        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <style>
                            .right-section .nav{
                            display: flex;
                            justify-content: end;
                            gap: 2rem;
                            align-items: center;
                        }
                        .tenuser{
                            padding-top: 10px;
                            font-size: 14px;
                            font-weight: 600;
                        }
                        </style>
                        <p class="tenuser"><?= $_SESSION['user']['HoTen'] ?></p>
                    </div>
                    <div class="profile-photo">
                    <a href="<?= $base_url ?>page/home"><img src="<?= $base_url ?>upload/avatar/<?= $_SESSION['user']['HinhAnh'] ?>" alt="anh admin"></a>
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="logo">
                   <a href="<?= $base_url ?>page/home"><img src="<?= $base_url ?>upload/avatar/<?= $_SESSION['user']['HinhAnh'] ?>" alt="anh admin"></a>
                    <h2><?= $_SESSION['user']['HoTen'] ?></h2>
                    <p>Quản trị</p>
                </div>
            </div>

            <div class="reminders">
                <!-- <div class="header">
                    <h2>Lời nhắc</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Thêm lời nhắc</h3>
                    </div>
                </div> -->
                <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="cart-header">
                            <strong>Thống kê sách theo chủ đề</strong>
                        </div>
                        <div id="myChart" style="max-width:400px; height:200px"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="cart-header">
                            <strong>Thống kê doanh thu</strong>
                        </div>
                        <div id="myChart2" style="max-width:400px; height:200px"></div>
                    </div>
                </div>
            </div>

            </div>

        </div>


    </div>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Your Function
    function drawChart() {
    
        // Set Data
        const data = google.visualization.arrayToDataTable([
            ['LoaiSP', 'SoLuong'],
            ['TenLoai',54.8],
            ['SoLuong',48.6],
           

        ]);

        // Set Options
        const options = {
        title:'Thống kê sản phẩm theo danh mục',
        is3D:true
        };

        // Draw
        const chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);


        // Set Data
        const data2 = google.visualization.arrayToDataTable([
            ['Ngay', 'DoanhThu'],
            ['9/9/23', 55],
            ['23/10/23', 55],
            ['5/11/232', 49],
            ['9/11/232', 49],

         
        ]);

        // Set Options
        const options2 = {
        title:'Thống kê theo doanh thu'
        };

        // Draw
        const chart2 = new google.visualization.ColumnChart(document.getElementById('myChart2'));
        chart2.draw(data2, options2);
    }
</script>
    <!-- <script>
        const Orders = [
            {
                productName: 'JavaScript Tutorial',
                productNumber: '85743',
                paymentStatus: 'Due',
                status: 'Pending'
            },
            {
                productName: 'CSS Full Course',
                productNumber: '97245',
                paymentStatus: 'Refunded',
                status: 'Declined'
            },
            {
                productName: 'Flex-Box Tutorial',
                productNumber: '36452',
                paymentStatus: 'Paid',
                status: 'Active'
            },
        ]
    </script> -->

    <script>
        const sideMenu = document.querySelector('aside');
        const menuBtn = document.getElementById('menu-btn');
        const closeBtn = document.getElementById('close-btn');

        const darkMode = document.querySelector('.dark-mode');

        menuBtn.addEventListener('click', () => {
            sideMenu.style.display = 'block';
        });

        closeBtn.addEventListener('click', () => {
            sideMenu.style.display = 'none';
        });

        darkMode.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode-variables');
            darkMode.querySelector('span:nth-child(1)').classList.toggle('active');
            darkMode.querySelector('span:nth-child(2)').classList.toggle('active');
        })


        Orders.forEach(order => {
            const tr = document.createElement('tr');
            const trContent = `
        <td>${order.productName}</td>
        <td>${order.productNumber}</td>
        <td>${order.paymentStatus}</td>
        <td class="${order.status === 'Declined' ? 'danger' : order.status === 'Pending' ? 'warning' : 'primary'}">${order.status}</td>
        <td class="primary">Details</td>
    `;
            tr.innerHTML = trContent;
            document.querySelector('table tbody').appendChild(tr);
        });
    </script>
</body>

</html>