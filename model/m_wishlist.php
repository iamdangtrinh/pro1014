<?php 
    function check_wishByProductAndUser($MaTK,$MaSP){
        return pdo_query_value("SELECT 1 FROM yeuthich WHERE MaTK=? AND MaSP=?",$MaTK,$MaSP);
    }
?>