<?php 
    include_once 'm_pdo.php';
    // thao tac du lieu trong cs fql
    
    // kiểm tra tài khoản trong sql có đúng không
    
    // kiểm tra giỏ hàng có chưa
    if(!function_exists('has_cart')) {
        function has_cart($MaTK) {
            return pdo_query_one("SELECT * from hoadon where MaTK = ? AND TrangThai='gio-hang'", $MaTK);
        }
    }

    if(!function_exists('add_cart')) {
        function add_cart($MaTK) {
            pdo_execute('INSERT INTO hoadon(`NgayLap`,`MaTk`,`TongTien`,`TrangThai`, `MaTK`, `MaKM`) VALUES ')
        }
    }
?>
