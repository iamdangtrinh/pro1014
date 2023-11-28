<?php 
    function check_wishByProductAndUser($MaTK,$MaSP){
        return pdo_query_one("SELECT MaSP FROM yeuthich WHERE MaTK=? AND MaSP=?",$MaTK,$MaSP);
    }
    function has_wishlist($MaTK){
        return pdo_query_one("SELECT * from yeuthich where MaTK = ? ", $MaTK);
    }
    function his_cart($MaTK){
    pdo_execute(
        'INSERT INTO yeuthich(`MaTK`) VALUES(?)',
        date('Y-m-d H:i:s'),
        'gio-hang',
        $MaTK
    );
}
?>