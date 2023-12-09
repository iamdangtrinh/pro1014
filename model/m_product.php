<?php 
    function product_search($keyword, $page=1){
        $batdau= ($page-1)*12;
        // 1 trang lay 8

        // trang 1 bat dau tu 0 1 2 3 4 5 6 7 

        // trang 2 bat dau tu 8

        // trang 3 bat dau tu 16

        // trang n bat dau tu (n-1)*8
        
        return pdo_query("SELECT * FROM sanpham sp INNER JOIN danhmuc dm ON sp.MaDM = dm.MaDM WHERE TenSP LIKE '%$keyword%' LIMIT $batdau,12");
    }

    function product_search_option_by_poplarity($page=1){
        $batdau= ($page-1)*12;
        return pdo_query("SELECT sp.TenSP,sp.Gia,sp.GiaGiam,sp.AnhSP,sp.MaSP,sp.SoLuong ,dm.MaDM, dm.TenDM  FROM sanpham sp INNER JOIN danhmuc dm ON sp.MaDM = dm.MaDM WHERE sp.ghim = 1 LIMIT $batdau,12");
    }
    function product_search_option_by_new_date($page=1){
        $batdau= ($page-1)*12;
        return pdo_query("SELECT sp.TenSP,sp.Gia,sp.GiaGiam,sp.AnhSP,sp.MaSP,sp.SoLuong ,dm.MaDM, dm.TenDM  FROM sanpham sp INNER JOIN danhmuc dm ON sp.MaDM = dm.MaDM ORDER BY MaSP DESC LIMIT $batdau,12");
    }
    function product_search_option_by_price($page=1){
        $batdau= ($page-1)*12;
        return pdo_query("SELECT sp.TenSP,sp.Gia,sp.GiaGiam,sp.AnhSP,sp.MaSP,sp.SoLuong ,dm.MaDM, dm.TenDM  FROM sanpham sp INNER JOIN danhmuc dm ON sp.MaDM = dm.MaDM ORDER BY Gia ASC LIMIT $batdau,12");
    }
    function product_search_option_by_pricedesc($page=1){
        $batdau= ($page-1)*12;
        return pdo_query("SELECT sp.TenSP,sp.Gia,sp.GiaGiam,sp.AnhSP,sp.MaSP,sp.SoLuong ,dm.MaDM, dm.TenDM  FROM sanpham sp INNER JOIN danhmuc dm ON sp.MaDM = dm.MaDM ORDER BY Gia DESC LIMIT $batdau,12");
    }
    function product_search_option_by_rating($page=1){
        $batdau= ($page-1)*12;
        return pdo_query("SELECT sp.TenSP,sp.Gia,sp.GiaGiam,sp.AnhSP,sp.MaSP,sp.SoLuong ,dm.MaDM, dm.TenDM  
        FROM sanpham sp 
        INNER JOIN danhmuc dm ON sp.MaDM = dm.MaDM 
        INNER JOIN binhluan bl ON sp.MaSP = bl.MaSP
        ORDER BY bl.SoSao DESC LIMIT $batdau,12");
    }

    function product_searchTotal($keyword){
        return pdo_query_value("SELECT COUNT(*) FROM sanpham WHERE TenSP LIKE '%$keyword%'");
    }
    function product_shop($start, $limit) {
        return pdo_query("SELECT * FROM sanpham sp INNER JOIN danhmuc dm ON sp.MaDM = dm.MaDM ORDER BY sp.SoLuong DESC LIMIT $start, $limit");
    }
    function getproductByHD($MaTK,$MaHD) {
        return pdo_query("SELECT AnhSP,TenSP,cthd.MaSP as MaSP,Gia,GiaGiam,SoLuongSP,TrangThai,TongTien FROM taikhoan tk INNER JOIN hoadon hd ON tk.MaTK=hd.MaTK INNER JOIN chitiethoadon cthd ON hd.MaHD=cthd.MaHD INNER JOIN sanpham sp ON cthd.MaSP=sp.MaSP WHERE hd.MaTK=? AND hd.MaHD=?;",$MaTK,$MaHD);
    }
    function count_product(){
        return pdo_query_value("SELECT count(*) AS soluong FROM sanpham");
    }
    function product_getNew($limit){
        return pdo_query("SELECT * FROM sanpham sp INNER JOIN danhmuc dm ON sp.MaDM=dm.MaDM ORDER BY MaSP DESC LIMIT $limit");
    }
    function product_getPin($limit){
        return pdo_query("SELECT * FROM sanpham sp INNER JOIN danhmuc dm ON sp.MaDM=dm.MaDM WHERE ghim = 1 LIMIT $limit");
    }

    // tìm kiếm sản phẩm
    function search_live_product($keyword) {
        return pdo_query("SELECT * FROM sanpham WHERE TenSP like '%$keyword%' LIMIT 3");
    }

    function product_detail($id){
        return pdo_query_one("SELECT * FROM sanpham s INNER JOIN danhmuc dm ON s.MaDM = dm.MaDM WHERE s.MaSP = $id");
    }

    // Mô tả sản phẩm
    function addComment($MaTK,$MaSP,$NoiDung,$SoSao){
        pdo_execute("INSERT INTO binhluan(`MaTK`,`MaSP`,`NoiDung`,`SoSao`) VALUES (?,?,?,?)",$MaTK,$MaSP,$NoiDung,$SoSao);
    }
    function comment_getByProduct($MaSP){
        return pdo_query("SELECT HoTen, HinhAnh, NgayBL, SoSao, NoiDung FROM taikhoan tk INNER JOIN binhluan bl ON tk.MaTK=bl.MaTK INNER JOIN sanpham sp ON bl.MaSP=sp.MaSP WHERE bl.MaSP=?",$MaSP);
    }
    function count_comment($MaSP){
        return pdo_query_value("SELECT count(*) AS SLBinhLuan FROM sanpham sp INNER JOIN binhluan bl ON sp.MaSP=bl.MaSP WHERE bl.MaSP=?",$MaSP);
    }
    function check_comment($MaTK,$MaSP){
        return pdo_query_value("SELECT COUNT(SoLuongSP) FROM taikhoan tk INNER JOIN hoadon hd ON tk.MaTK=hd.MaTK INNER JOIN chitiethoadon cthd ON hd.MaHD=cthd.MaHD WHERE hd.TrangThai='hoan-tat' and tk.MaTK=? and cthd.MaSP=?",$MaTK,$MaSP);
    }
    function show_comment(){
        return pdo_query ("SELECT
                                sp.`MaSP` AS MaSP,
                                sp.`TenSP` AS TenSP,
                                sp.`AnhSP` AS AnhSP,
                                MAX(bl.`NgayBL`) AS BLMoi,
                                MIN(bl.`NgayBL`) AS BLCu,
                                COUNT(bl.`MaBL`) AS SoLuongBinhLuan
                            FROM
                                `sanpham` sp
                            LEFT JOIN
                                `binhluan` bl ON sp.`MaSP` = bl.`MaSP`
                            GROUP BY
                                sp.`MaSP`, sp.`TenSP`, sp.`AnhSP`
                            HAVING
                                SoLuongBinhLuan > 0
                            ORDER BY
                                SoLuongBinhLuan DESC;
                    ");
    }
    function get_tenSP($MaSP){
        return pdo_query_value("SELECT TenSP FROM sanpham WHERE MaSP = ?",$MaSP);
    }
    function chitiet_comment($MaSP){
        return pdo_query("SELECT
                            bl.`MaBL`,
                            bl.`NoiDung`,
                            bl.`NgayBL`,
                            sp.`TenSP`,
                            sp.`MaSP`,
                            tk.`HoTen`
                        FROM
                            `binhluan` bl
                        JOIN
                            `sanpham` sp ON bl.`MaSP` = sp.`MaSP`
                        JOIN
                            `taikhoan` tk ON bl.`MaTK` = tk.`MaTK`
                        WHERE
                            sp.`MaSP` = ?", $MaSP);
    }
    function delete_comment($MaBL){
        pdo_execute("DELETE FROM binhluan WHERE MaBL = $MaBL");
    }
    // Sản phẩm tương tự
    function product_same($MaSP,$id){
        return pdo_query("SELECT * FROM sanpham WHERE MaSP!=? AND MaDM =? ORDER BY rand() LIMIT 5",$MaSP,$id );
    }
    function ratings_trungbinh($MaSP){
        return pdo_query_one("SELECT SUM(SoSao) as SoSao, COUNT(bl.MaSP) as SoBinhLuan FROM sanpham sp INNER JOIN binhluan bl ON sp.MaSP=bl.MaSP WHERE bl.MaSP=?;",$MaSP);
    }
    function product_tangView($MaSP){
        pdo_execute("UPDATE sanpham SET LuotXem=LuotXem+1 WHERE MaSP=? ",$MaSP);
    }

    function show_product($product_shop,  $base_url) {
        foreach ($product_shop as $product): ?>
            <div class="col-6 col-sm-4 col-lg-3">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="<?=$base_url?>product/detail/<?=$product['MaSP']?>">
                            <img src="<?=$base_url?>upload/products/<?= $product['AnhSP'];?>"
                                alt="product" style="width: 207px; height: 220px;">
                        </a>
                        <?php if(!$product['GiaGiam']): ?>
                            <div class="label-group">
                            </div>
                        <?php else: ?>
                            <div class="label-group">
                                <div class="product-label label-sale">-<?=substr((($product['Gia'] - $product['GiaGiam']) / $product['Gia']) * 100, 0, 2)?>%</div>
                            </div>
                        <?php endif; ?>
                        <div class="btn-icon-group">
                            <a href="<?= $base_url ?>product/detail/<?= $product['MaSP'];?>"
                                class="btn-icon btn-add-cart fa-solid fa-cart-shopping"></a>
                        </div>
                        <?php if($product['SoLuong']==0):?>
                            <a href="<?= $base_url?>product/detail/<?= $product['MaSP'];?>" class="btn-quickview">Xem chi tiết</a>
                            <div class="product-countdown-container">
                                <span class="product-countdown-title">Đã bán hết</span>
                            </div>
                        <?php else:?>
                            <a href="<?= $base_url?>product/detail/<?= $product['MaSP'];?>" class="btn-quickview">Xem chi tiết</a>
                        <?php endif;?>
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
                                    echo 'title="Đến trang yêu thích" class="btn-icon-wish added-wishlist" ';
                                }else{
                                    echo 'onclick="ThemSPYT('.$product['MaSP'].')" title="Yêu thích sản phẩm" class="btn-icon-wish"';
                                }
                            } ?>><i class="fa-solid fa-heart"></i></a>
                        </div>
                        <h3 class="product-title">
                            <a href="<?=$base_url?>product/detail/<?=$product['MaSP']?>"><?= $product['TenSP'];?></a>
                        </h3>
                        <?php 
                            $product['rating']=ratings_trungbinh($product['MaSP']);
                            if($product['rating']['SoSao']!=""&&$product['rating']['SoBinhLuan']>0){
                                $product['trungbinh_rating']=ceil(($product['rating']['SoSao']*10)/($product['rating']['SoBinhLuan']/2));
                            }else{
                                $product['trungbinh_rating']=0;
                            }
                        ?>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:<?=$product['trungbinh_rating']?>%"></span>
                                
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                        </div>
                        <div class="price-box">
                            <?php if(!$product['GiaGiam']): ?>
                                <span class="product-price"><?=number_format($product['Gia'],0,",",".")?>đ</span>
                            <?php else: ?>
                                <span class="old-price"><?=number_format($product['Gia'],0,",",".")?>đ</span>
                                <span class="product-price"><?=number_format($product['GiaGiam'],0,",",".")?>đ</span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
    <?php endforeach;
    }


?>