<?php 
    include_once 'm_pdo.php';
    // thao tac du lieu trong cs fql
    function book_getNew($limit){
        return pdo_query("SELECT * FROM sach ORDER BY MaSach DESC LIMIT $limit");
    }
    function book_getPin($limit){
        return pdo_query("SELECT * FROM sach WHERE GhimTrangChu = 1 ORDER BY MaSach DESC LIMIT $limit");
    }
    function book_getMostViewed($limit){
        return pdo_query("SELECT * FROM sach ORDER BY LuotDoc DESC LIMIT $limit");
    }
    function book_getById($id){
        return pdo_query_one("SELECT * FROM sach s INNER JOIN chude cd on cd.MaCD=s.MaCD WHERE s.MaSach=$id");
    }
    function book_getRandomByCategory($id){
        return pdo_query("SELECT * FROM sach WHERE MaCD=$id ORDER BY rand() LIMIT 4");
    }
    function book_getByCategory($id){
        return pdo_query("SELECT * FROM sach WHERE MaCD=$id ");
    }
    function book_search($keyword, $page=1){
        $batdau= ($page-1)*8;
        // 1 trang lay 8
        // trang 1 bat dau tu 0 1 2 3 4 5 6 7 
        // trang 2 bat dau tu 8
        // trang 3 bat dau tu 16
        // trang n bat dau tu (n-1)*8
        return pdo_query("SELECT * FROM sach WHERE TuaSach LIKE '%$keyword%' LIMIT $batdau,8");
    }
    function book_searchTotal($keyword){
        return pdo_query_value("SELECT COUNT(*) FROM sach WHERE TuaSach LIKE '%$keyword%'");
    }
    function book_decreaseAmount($MaSach){
        pdo_execute("UPDATE sach SET SoLuong = SoLuong - 1 WHERE MaSach=?",$MaSach);
    }
    function book_increaseAmount($MaSach){
        pdo_execute("UPDATE sach SET SoLuong = SoLuong+1 WHERE MaSach=?",$MaSach);
    }
?>