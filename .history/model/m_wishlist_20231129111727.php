<?php

    include_once 'm_pdo.php';

    // Kiểm tra 
    function check_wishByProductAndUser($MaTK,$MaSP){
        return pdo_query_one("SELECT MaSP FROM yeuthich WHERE MaTK=? AND MaSP=?",$MaTK,$MaSP);
    }
?>