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
                            <h1><?=$tkUser?></h1>
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
         
            

            <!-- New Users Section -->
            <div class="row chart">
                <div class="col-md-6">
                    <div class="card chart-left">
                        <div class="cart-header">
                            <strong>Thống kê sản phẩm theo danh mục</strong>
                        </div>
                        <div id="myChart" style="max-width:600px; height:300px"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card chart-right">
                        <div class="cart-header">
                            <strong>Thống kê doanh thu</strong>
                        </div>
                        <div id="myChart2" style="max-width:600px; height:300px"></div>
                    </div>
                </div>
            </div>
            <div class="new-users">
                <h2>Tài khoản mới</h2>
                <div class="user-list">
                    <?php foreach ($usermoi as $taikhoanmoi):?>
                        <div class="user">
                            <img src="<?= $base_url ?>upload/avatar/<?=$taikhoanmoi['HinhAnh']?>">
                            <h3 style="font-weight: 600;"><?=$taikhoanmoi['HoTen']?></h3>
                            <p>
                                <?php 
                                if($taikhoanmoi['VaiTro']> 0){
                                    echo 'Quản lí';
                                }else{
                                    echo 'Khách hàng';
                                }
                                ?>
                            </p>
                        </div>
                       
                    <?php endforeach ;?>
                </div>
            </div>
            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <h2>Những đơn hàng gần đây</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Tên Sản phẩm</th>
                            <th>Loại sản phẩm</th>
                            <th>Trạng thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                <a href="#">Show All</a>
            </div>
            <!-- End of Recent Orders -->