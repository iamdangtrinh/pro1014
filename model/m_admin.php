<?php 
   include_once 'm_pdo.php';
    function admin_getUser(){
        return pdo_query("SELECT * FROM taikhoan ORDER BY MaTK DESC LIMIT 4");
    }






?>