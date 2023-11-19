<?php
include_once 'm_pdo.php';
// kiểm tra khách hàng có giỏ hàng chưa
if (!function_exists('has_cart')) {
    function has_cart($MaTK)
    {
        return pdo_query_one("SELECT * from hoadon where MaTK = ? AND TrangThai='gio-hang'", $MaTK);
    }
}

// thêm người dùng vào giỏ hàng
if (!function_exists('his_add_cart')) {
    function his_add_cart($TongTien, $MaTK, $MaKM)
    {
        pdo_execute(
            'INSERT INTO hoadon(`NgayLap`,`TongTien`,`TrangThai`, `MaTK`, `MaKM`) VALUES(?,?,?,?,?)',
            date('Y-m-d H:i:s'),
            $TongTien,
            'gio-hang',
            $MaTK,
            $MaKM,
        );
    }
}

if (!function_exists('add_to_cart')) {
    function add_to_cart($SoLuongSP, $MaSp)
    {
        pdo_execute(
            'INSERT INTO chitiethoadon(`SoLuongSP`,`MaSp`) VALUES(?,?)',
            $SoLuongSP,
            $MaSp
        );
    }
}


?>