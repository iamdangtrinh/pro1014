
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
                                    <img src="<?= $base_url ?>upload/demoes/demo23/products/<?= $product['AnhSP'] ?>" alt="product">
                                </a>

                                <a href="#" class="btn-remove" title="Remove Product"><i class="fa-solid fa-xmark"></i></a>
                            </figure>
                        </td>
                        <td>
                            <h5 class="product-title">
                                <a href="<?= $base_url ?>product/detail/<?= $product['MaSP'] ?>"><?= $product['TenDM'] ?></a>
                            </h5>
                        </td>
                        <td class="price-box"><?= $product['Gia'] ?>đ</td>
                        <td>
                            <span class="stock-status">Trong kho</span>
                        </td>
                        <td class="action">
                            <a href="ajax/product-quick-view.html" class="btn btn-quickview mt-1 mt-md-0" title="Quick View">Xem lướt qua</a>
                        </td>
                </tr>
            <? endforeach; ?>
            </tbody>
        </table>
    </div><!-- End .cart-table-container -->
</div><!-- End .container -->