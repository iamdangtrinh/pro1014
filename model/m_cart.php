<?php
include_once 'm_pdo.php';
// kiểm tra khách hàng có giỏ hàng chưa

function has_cart($MaTK)
{
    return pdo_query_one("SELECT * from hoadon where MaTK = ? AND TrangThai='gio-hang'", $MaTK);
}

// thêm người dùng vào giỏ hàng

function his_cart($TongTien, $MaTK, $MaKM)
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
// thêm sản phẩm vào giỏ hàng

function add_to_cart($MaHD, $SoLuongSP, $MaSP)
{
    pdo_execute(
        "INSERT INTO chitiethoadon(`MaHD`,`SoLuongSP`,`MaSP`) VALUES(?,?,?)",
        $MaHD,
        $SoLuongSP,
        $MaSP
    );
}

// Cập nhật số lượng giỏ hàng
function update_quantity_cart($SoLuongSP, $MaSP)
{

}

function show_cart_for_user($MaTK)
{
    return pdo_query("SELECT *
    FROM hoadon hd 
    INNER JOIN chitiethoadon ct ON 
    hd.MaHD = ct.MaHD
    INNER JOIN taikhoan tk ON 
    tk.MaTK = hd.MaTK
    WHERE hd.MaTK =? AND hd.TrangThai = ? ORDER BY hd.MaHD desc
    ", $MaTK, 'gio-hang');
}

?>