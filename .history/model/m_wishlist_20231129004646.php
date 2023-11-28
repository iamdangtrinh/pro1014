<?php 
    function check_wishByProductAndUser($MaTK,$MaSP){
        return pdo_query_one("SELECT MaSP FROM yeuthich WHERE MaTK=? AND MaSP=?",$MaTK,$MaSP);
    }
    function has_wishlist($MaTK){
        return pdo_query_one("SELECT * from yeuthich where MaTK = ? ", $MaTK);
    }
    function his_cart($MaTK){
    pdo_execute(
        'INSERT INTO yeuthich(`MaTK`) VALUES(?)',$MaTK);
    }
    function add_to_cart($MaHD, $SoLuongSP, $MaSP){
    pdo_execute(
        "INSERT INTO chitiethoadon(`MaHD`,`SoLuongSP`,`MaSP`) VALUES(?,?,?)",
        $MaHD,
        $SoLuongSP,
        $MaSP);
}
?>