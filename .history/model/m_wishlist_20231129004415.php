<?php 
    function check_wishByProductAndUser($MaTK,$MaSP){
        return pdo_query_one("SELECT MaSP FROM yeuthich WHERE MaTK=? AND MaSP=?",$MaTK,$MaSP);
    }
    function has_wishlist($MaTK){
        return pdo_query_one("SELECT * from yeuthoch where MaTK = ? AND TrangThai='gio-hang'", $MaTK);
    }
?>