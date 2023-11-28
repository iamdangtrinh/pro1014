<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-4">
                <div class="section-title">
                    <h3>Kết quả tìm kiếm với từ khóa '<?=$_GET['search_key']?>'</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($ketqua as $product): ?>
                <?php if(!$product['GiaGiam']): ?>
                    <div class="col-6 col-sm-4 col-lg-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="<?=$base_url?>product/detail/<?=$product['MaSP']?>">
                                    <img src="<?=$base_url?>upload/demoes/demo23/products/<?= $product['AnhSP'];?>"
                                        alt="product" style="width: 207px; height: 220px;">
                                </a>
                                <div class="btn-icon-group">
                                    <a href="<?= $base_url ?>product/detail/<?= $product['MaSP'];?>"
                                        class="btn-icon btn-add-cart fa-solid fa-cart-shopping"></a>
                                </div>
                                <a href="<?= $base_url ?>product/detail/<?= $product['MaSP'];?>" class="btn-quickview"
                                    title="Quick View">Xem nhanh</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="<?=$base_url?>product/detail/<?=$product['MaSP']?>" class="product-category"><?= $product['TenDM'];?></a>
                                    </div>
                                    <a href="<?=$base_url?>page/wishlist" 
                                    <?php if(isset($_SESSION['user'])){
                                        $MaTK=$_SESSION['user']['MaTK'];
                                        $CheckWish=check_wishByProductAndUser($MaTK,$product['MaSP']);
                                        if($CheckWish!=""){
                                            echo 'title="Go to Wishlist" class="btn-icon-wish added-wishlist" ';
                                        }else{
                                            echo 'title="Wishlist" class="btn-icon-wish ed"';
                                        }
                                    } ?>><i class="fa-solid fa-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="<?=$base_url?>product/detail/<?=$product['MaSP']?>"><?= $product['TenSP'];?></a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price"><?=number_format($product['Gia'],0,",",".")?>đ</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                <?php else: ?>
                    <div class="col-6 col-sm-4 col-lg-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="<?=$base_url?>product/detail/<?=$product['MaSP']?>">
                                    <img src="<?=$base_url?>upload/demoes/demo23/products/<?= $product['AnhSP'];?>"
                                        alt="product" style="width: 207px; height: 220px;">
                                </a>
                                <div class="label-group">
                                    <div class="product-label label-sale">-<?=substr((($product['Gia'] - $product['GiaGiam']) / $product['Gia']) * 100, 0, 2)?>%</div>
                                </div>
                                <div class="btn-icon-group">
                                    <a href="<?= $base_url?>product/detail/<?= $product['MaSP'];?>"
                                        class="btn-icon btn-add-cart fa-solid fa-cart-shopping"></a>
                                </div>
                                <a href="<?= $base_url ?>product/detail/<?= $product['MaSP'];?>" class="btn-quickview"
                                    title="Quick View">Xem nhanh</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="<?=$base_url?>product/detail/<?=$product['MaSP']?>" class="product-category"><?= $product['TenDM'];?></a>
                                    </div>
                                    <a href="<?=$base_url?>page/wishlist" 
                                    <?php if(isset($_SESSION['user'])){
                                        $MaTK=$_SESSION['user']['MaTK'];
                                        $CheckWish=check_wishByProductAndUser($MaTK,$product['MaSP']);
                                        if($CheckWish!=""){
                                            echo 'title="Go to Wishlist" class="btn-icon-wish added-wishlist" ';
                                        }else{
                                            echo 'title="Wishlist" class="btn-icon-wish"';
                                        }
                                    } ?>><i class="fa-solid fa-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="<?=$base_url?>product/detail/<?=$product['MaSP']?>"><?= $product['TenSP'];?></a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price"><?=number_format($product['Gia'],0,",",".")?>đ</span>
                                    <span class="product-price"><?=number_format($product['GiaGiam'],0,",",".")?>đ</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Featured Section End -->
<nav aria-label="...">
    <ul class="pagination justify-content-center">
        <li class="page-item <?=($page<=1)?'disabled': '' ?>">
        <a class="page-link" href="<?=$base_url?>page/search/<?=$_GET['search_key']?>/page/<?=$page-1?>" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
        </a>
        </li>
        <?php for($i=1;$i<=$sotrang;$i++): ?>
        <li class="page-item <?=($page==$i)?'active': '' ?>" >
            <a class="page-link" href="<?=$base_url?>page/search/<?=$_GET['search_key']?>/page/<?=$i?>"><?=$i?></a>
        </li>
        <?php endfor ?>
        <li class="page-item <?=($page>=$sotrang)?'disabled': '' ?>">
        <a class="page-link" href="<?=$base_url?>page/search/<?=$_GET['search_key']?>/page/<?=$page+1?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
        </a>
        </li>
    </ul>
</nav>