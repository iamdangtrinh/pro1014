<?php

    include_once 'm_pdo.php';

    // Kiểm tra xem có danh sách yêu thích hay chưa
    function check_wishByProductAndUser($MaTK,$MaSP){
        return pdo_query_one("SELECT MaSP FROM yeuthich WHERE MaTK=? AND MaSP=?",$MaTK,$MaSP);
    }
    // Thêm người dùng vào danh sách yêu thích
    function addtowishlist($MaTK){
        pdo_execute("INSERT INTO yeuthich("")");
    }
?>