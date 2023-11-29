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
    function addtowishlist($MaSP){
        pdo_execute("INSERT INTO yeuthich(`MaSP`), VALUES(?), $MaSP");
    }
    // Hiển thị sản phẩm ở trang yêu thích
    function show_wishlist($MaTK){
        return pdo_query("SELECT * FROM sanpham s INNER JOIN yeuthich yt ON s.MaSP = yt.MaSP WHERE s.MaSP = ?, $MaTK ");
    }
?>