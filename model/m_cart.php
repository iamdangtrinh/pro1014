<?php
include_once 'm_pdo.php';
// kiểm tra khách hàng có giỏ hàng chưa

function has_cart($MaTK)
{
    return pdo_query_one("SELECT * from hoadon where MaTK = ? AND TrangThai='gio-hang'", $MaTK);
}

function has_products_by_quantity($MaHD,$MaSP)
{
    return pdo_query_one("SELECT * from chitiethoadon where MaHD = ? AND MaSP = ?", $MaHD, $MaSP);
}

function upate_quantity_by_product($SoLuongSP, $MaHD) {
    return pdo_execute("UPDATE chitiethoadon SET SoLuongSP = SoLuongSP + ? WHERE MaHD = ?", $SoLuongSP, $MaHD);
}

// thêm người dùng vào giỏ hàng
function his_cart($MaTK)
{
    pdo_execute(
        'INSERT INTO hoadon(`NgayLap`,`TrangThai`, `MaTK`) VALUES(?,?,?)',
        date('Y-m-d H:i:s'),
        'gio-hang',
        $MaTK
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
 // Cập nhật số lượng sản phẩm trong giỏ hàng
 function update_quantity_by_cart($SoLuongSP, $MaSP) {
    return pdo_execute("UPDATE chitiethoadon SET SoLuongSP = ? WHERE MaSP=?", $SoLuongSP, $MaSP);
}
function show_cart_for_user($MaTK)
{
    return pdo_query("SELECT *, sp.Gia * ct.SoLuongSP as total
    FROM hoadon hd 
    INNER JOIN chitiethoadon ct ON 
    hd.MaHD = ct.MaHD
    INNER JOIN sanpham sp ON 
    sp.MaSP = ct.MaSP
    WHERE hd.MaTK =? AND hd.TrangThai = ?
    ", $MaTK, 'gio-hang');
}

// tìm mã giảm giá
function has_coupon_code($coupon_code) {
    return pdo_query_one("SELECT * FROM khuyenmai WHERE CodeKM = ?", $coupon_code);
}

// đếm số lượng sản phẩm
function count_cart($MaHD) {
    return pdo_query_value("SELECT COUNT(hd.MaHD) FROM chitiethoadon cthd LEFT JOIN hoadon hd ON hd.MaHD= cthd.MaHD WHERE MaTK = ? AND hd.TrangThai = 'gio-hang'", $MaHD);
}

// xóa sản phẩm 
function delete_cart_by_pro($MaSP) {
    return pdo_execute("DELETE FROM chitiethoadon WHERE MaSP = ?",$MaSP);
}

// Số lượng sản phẩm tối đa
function quantity_cart_max($MaSP) {
    return pdo_query_one("SELECT SoLuong,MaSP FROM sanpham WHERE MaSP = ?", $MaSP);
}

// cập nhật trạng thái giỏ hàng
function upate_status_cart($MaHD) {
    return pdo_execute("UPDATE hoadon SET TrangThai = 'chuan-bi' WHERE MaHD = ?", $MaHD);
}

// hiển thị lịch sử giỏ hàng
function history_cart($MaTK) {
    return pdo_query("SELECT * FROM `hoadon` WHERE TrangThai != 'gio-hang' AND MaTK = ? ORDER BY MaHD DESC", $MaTK);
}
function doanhthu_countAll(){
    return pdo_query("SELECT SUM(TongTien) AS TongTatCaHoaDon FROM hoadon");
}
function history_stat(){
    return pdo_query("SELECT YEAR(hd.NgayLap) AS Nam, MONTH(hd.NgayLap) AS Thang, COUNT(hd.MaTK) AS SoKhachHang, COUNT(hd.MaHD) AS SoLuotMua, SUM(hd.TongTien) AS DoanhThu, SUM(ct.SoLuongSP) AS SoLuongSP 
    FROM hoadon hd INNER JOIN chitiethoadon ct ON hd.MaHD = ct.MaHD GROUP BY YEAR(hd.NgayLap), MONTH(hd.NgayLap)");
}
function hoadon_countAll(){
    return pdo_query_value("SELECT COUNT(*) FROM hoadon");
}

// Cập nhật tổng tiền cho người dùng khi click vào tiến hành thanh toán
function update_total_cart($total, $MaHD) {
    return pdo_execute("UPDATE hoadon SET TongTien = ? WHERE MaHD = ?", $total, $MaHD);
}

?>