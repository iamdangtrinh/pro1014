<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Kết quả tìm kiếm với từ khóa <?=$_GET['keyword']?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach($ketqua as $ghim): ?>
                <div class="col-6 col-sm-4 col-lg-3">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="demo23-product.html">
                                <img src="<?=$base_url?>upload/demoes/demo23/products/<?=$ghim['AnhSP']?>"
                                    width="217" height="217" alt="product">
                            </a>
                            <div class="label-group">
                                <div class="product-label label-sale">-89%</div>
                            </div>
                            <div class="btn-icon-group">
                                <a href="<?= $base_url ?>product/detail"
                                    class="btn-icon btn-add-cart fa-solid fa-cart-shopping"></a>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview"
                                title="Quick View">Xem lướt qua</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="demo23-shop.html" class="product-category">Loại</a>
                                </div>
                                <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                        class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="demo23-product.html"><?=$ghim['TenSP']?></a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="old-price"><?=$ghim['Gia']?></span>
                                <span class="product-price"><?=$ghim['GiaGiam']?></span>
                            </div><!-- End .price-box -->
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Featured Section End -->
<nav aria-label="...">
    <ul class="pagination justify-content-center">
        <li class="page-item <?=($page<=1)?'disabled': '' ?>">
        <a class="page-link" href="<?=$base_url?>page/search/<?=$_GET['keyword']?>/page/<?=$page-1?>" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
        </a>
        </li>
        <?php for($i=1;$i<=$sotrang;$i++): ?>
        <li class="page-item <?=($page==$i)?'active': '' ?>" >
            <a class="page-link" href="<?=$base_url?>page/search/<?=$_GET['keyword']?>/page/<?=$i?>"><?=$i?></a>
        </li>
        <?php endfor ?>
        <li class="page-item <?=($page>=$sotrang)?'disabled': '' ?>">
        <a class="page-link" href="<?=$base_url?>page/search/<?=$_GET['keyword']?>/page/<?=$page+1?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
        </a>
        </li>
    </ul>
</nav>