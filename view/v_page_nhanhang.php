<div class="page-header">
    <div class="container d-flex flex-column align-items-center">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=$base_url?>page/home">Trang Chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Đặt hàng thành công
                    </li>
                </ol>
            </div>
        </nav>
        <br>
        <h1>ĐẶT HÀNG THÀNH CÔNG</h1>
    </div>
</div>
<div class="m-auto p-3" style="width: 80%;">
    <div class="order-content">
        <div class="order-table-container text-center">
            <table class="table table-order text-left">
                <thead>
                    <tr>
                        <th class="order-id text-center">Ảnh sản phẩm</th>
                        <th class="order-date">Tên sản phẩm</th>
                        <th class="order-status text-center">Giá</th>
                        <th class="order-price text-center">Số lượng</th>
                        <th class="order-action text-center">Số tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($chitiethd as $product): ?>
                        <tr>
                            <td>
                                <figure class="product-image-container m-auto">
                                    <a href="<?= $base_url ?>product/detail/<?= $product['MaSP'] ?>" class="product-image">
                                        <img src="<?= $base_url ?>upload/products/<?= $product['AnhSP'] ?>"
                                            alt="product">
                                    </a>
                                </figure>
                            </td>
                            <td>
                                <h5 class="product-title">
                                    <a href="<?= $base_url ?>product/detail/<?= $product['MaSP'] ?>"><?= $product['TenSP'] ?></a>
                                </h5>
                            </td>
                            <?php if(!$product['GiaGiam']): ?>
                                <td class="price-box text-center"><?= number_format($product['Gia'], 0, ",", ".") ?> VND</td>
                                <td class="price-box text-center"><?=$product['SoLuongSP']?></td>
                                <td class="price-box text-center"><?= number_format(($product['Gia']*$product['SoLuongSP']), 0,',','.')?> VNĐ</td>
                            <?php else: ?>
                                <td class="price-box text-danger text-center">
                                    <del class="text-dark"><p><?= number_format($product['Gia'], 0, ",", ".") ?>VND</p></del>   
                                    <p><?= number_format($product['GiaGiam'], 0, ",", ".") ?> VND</p>
                                </td>
                                <td class="price-box text-center"><?=$product['SoLuongSP']?></td>
                                <td class="price-box text-center"><?= number_format(($product['GiaGiam']*$product['SoLuongSP']), 0,',','.')?> VNĐ</td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th class="text-center" colspan="3">
                            <h3>Trạng thái</h3>
                        </th>
                        <th class="text-center" colspan="2">
                            <?php
                                switch($chitiethd[0]['TrangThai']) {
                                    case 'chuan-bi':
                                        echo '<span class="text-white p-1 bg-warning rounded">Người bán đang chuẩn bị</span>';
                                        break;
                                    case 'cho-giao':
                                        echo '<span class="rounded text-white p-1" style="background: #007bff">Shipper đang đến</span>';
                                        break;
                                    case 'hoan-tat':
                                        echo '<span class="rounded text-white p-1 bg-success">Giao thành công</span>';
                                    break;
                                    case 'khong-thanh-cong':
                                        echo '<span class="rounded text-white p-1 bg-danger">Đơn hàng không thành công</span>';
                                        break;
                                }
                            ?>
                        </th>
                    </tr>
                </tfoot>
            </table>
            <h2>Tổng tiền <span class="text-danger"><?=number_format($chitiethd[0]['TongTien'], 0, ",", ".")?> VND</span></h2>

            <a href="<?=$base_url?>page/shop" class="btn btn-dark m-2">Tiếp tục mua hàng</a>
        </div>
    </div>
</div>
                