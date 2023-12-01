<div class="page-header">
    <div class="container d-flex flex-column align-items-center">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Trang Chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Danh sách yêu thích
                    </li>
                </ol>
            </div>
        </nav>

        <h1>Danh sách yêu thích</h1>
    </div>
</div>

<div class="container">
    <div class="wishlist-title">
        <h2 class="p-2">Danh sách yêu thích trên cửa hàng</h2>
    </div>
    <div class="wishlist-table-container">
        <table class="table table-wishlist mb-0">
            <thead>
                <tr>
                    <th class="thumbnail-col">Ảnh sản phẩm</th>
                    <th class="product-col">Sản Phẩm</th>
                    <th class="price-col">Giá</th>
                    <th class="status-col">Tồn kho</th>
                    <th class="action-col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <tr class="product-row">
                    <?php foreach ($wishlist as $product) : ?>
                    <td>
                        <figure class="product-image-container">
                            <a href="<?= $base_url ?>product/detail/<?= $product['MaSP'] ?>" class="product-image">
                                <img src="<?= $base_url ?>upload/demoes/demo23/products/<?= $product['AnhSP'] ?>"
                                    alt="product">
                            </a>

                            <a href="<?=$base_url?>delete_wishlist/<?= $product['MaSP']?>" class="btn-remove" title="Xóa sản phẩm"><i class="fa-solid fa-xmark"></i></a>
                        </figure>
                    </td>
                    <td>
                        <h5 class="product-title">
                            <a
                                href="<?= $base_url ?>product/detail/<?= $product['MaSP'] ?>"><?= $product['TenSP'] ?></a>
                        </h5>
                    </td>
                    <?php if(!$product['GiaGiam'])?>
                    <td class="price-box"></td>
                    <td>
                        <span class="stock-status">Trong kho</span>
                    </td>
                    <td class="action">
                        <a href="<?=$base_url?>product/detail/<?=$product['MaSP']?>" class="btn btn-quickview mt-1 mt-md-0"
                            title="Quick View">Xem chi tiết</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div><!-- End .cart-table-container -->
</div><!-- End .container -->