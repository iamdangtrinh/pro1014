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
    function product_searchTotal($keyword){
        return pdo_query_value("SELECT COUNT(*) FROM sanpham WHERE TenSP LIKE '%$keyword%'");
    }
    function product_shop($start, $limit) {
        return pdo_query("SELECT * FROM sanpham sp INNER JOIN danhmuc dm ON sp.MaDM = dm.MaDM ORDER BY sp.MaSP DESC LIMIT $start, $limit");
    }
    function count_product(){
        return pdo_query_value("SELECT count(*) AS soluong FROM sanpham");
    }
    function product_getNew($limit){
        return pdo_query("SELECT * FROM sanpham ORDER BY MaSP DESC LIMIT $limit");
    }
    function product_getPin($limit){
        return pdo_query("SELECT * FROM sanpham WHERE ghim = 1 LIMIT $limit");
    }

    // tìm kiếm sản phẩm
    function search_live_product($keyword) {
        return pdo_query("SELECT * FROM sanpham WHERE TenSP like '%$keyword%' LIMIT 3");
    }

    function product_detail($id){
        return pdo
    }
   
?>