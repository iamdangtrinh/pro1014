            <h1>Thống kê</h1>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Doanh thu</h3>
                            <h1>57.000.000 VND</h1>
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
                            <h1>2,981</h1>
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
                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3>Đơn hàng</h3>
                            <h1>1,147</h1>
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
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="cart-header">
                            <strong>Thống kê sách theo chủ đề</strong>
                        </div>
                        <div id="myChart" style="max-width:700px; height:400px"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="cart-header">
                            <strong>Thống kê doanh thu</strong>
                        </div>
                        <div id="myChart2" style="max-width:700px; height:400px"></div>
                    </div>
                </div>
            </div>
            

            <!-- New Users Section -->
            <div class="new-users">
                <h2>New Users</h2>
                <div class="user-list">
                    <div class="user">
                        <img src="<?= $base_url ?>upload/blog/author.jpg">
                        <h2>Jack</h2>
                        <p>54 Min Ago</p>
                    </div>
                    <div class="user">
                        <img src="<?= $base_url ?>upload/blog/author.jpg">
                        <h2>Amir</h2>
                        <p>3 Hours Ago</p>
                    </div>
                    <div class="user">
                        <img src="<?= $base_url ?>upload/blog/author.jpg">
                        <h2>Ember</h2>
                        <p>6 Hours Ago</p>
                    </div>
                    <div class="user">
                        <img src="<?= $base_url ?>upload/blog/author.jpg">
                        <h2>More</h2>
                        <p>New User</p>
                    </div>
                </div>
            </div>
            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course Number</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                <a href="#">Show All</a>
            </div>
            <!-- End of Recent Orders -->
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Your Function
    function drawChart() {
    
        // Set Data
        const data = google.visualization.arrayToDataTable([
            ['Contry', 'Mhl'],
            ['Italy',54.8],
            ['France',48.6],
            ['Spain',44.4],
            ['USA',23.9],
            ['Argentina',14.5]

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
            ['Contry', 'Mhl'],
            ['Italy', 55],
            ['France', 49],
            ['Spain', 44],
            ['USA', 24],
            ['Argentina', 15]
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