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
        return pdo_query("SELECT * FROM yeuthich yt INNER JOIN sanpham s ON yt.MaSP = s.MaSP WHERE yt.MaTK = ?, $MaTK ");
    }
    // Xóa sản phẩm trang yêu thích
    function delete_wishlist_by_pro($MaSP) {
        return pdo_execute("DELETE FROM yeuthich WHERE MaSP = ?",$MaSP);
    }
?>