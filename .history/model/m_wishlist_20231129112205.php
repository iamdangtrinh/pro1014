<?php

    include_once 'm_pdo.php';

    // Kiểm tra xem có danh sách yêu thích hay chưa
    function check_wishByProductAndUser($MaTK,$MaSP){
        return pdo_query_one("SELECT MaSP FROM yeuthich WHERE MaTK=? AND MaSP=?",$MaTK,$MaSP);
    }
    // Thêm người dùng vào danh sách yêu thích
    function his_wishlist($MaTK){
        pdo_execute("INSERT INTO yeuthich(`MaTK`), VALUES(?), $MaTK");
    }
    // Thêm sản phẩm vào danh sách yêu thích
    function addtowishlist(){
        pdo_execute("INSERT INTO ")
    }
?>