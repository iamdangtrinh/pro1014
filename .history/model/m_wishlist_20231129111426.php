<?php 
    function check_wishByProductAndUser($MaTK,$MaSP){
        return pdo_query_one("SELECT MaSP FROM yeuthich WHERE MaTK=? AND MaSP=?",$MaTK,$MaSP);
    }
    function wishlist_detail($id){
        return pdo_query_one("SELECT * FROM sanpham s INNER JOIN danhmuc dm ON s.Ma")
    }
?>