<?php 
    include_once 'm_pdo.php';
    function category_getALLDM(){
        return pdo_query("SELECT danhmuc.TenDM, danhmuccon.TenDMC FROM danhmuc INNER JOIN danhmuccon ON danhmuc.MaDM = danhmuccon.MaDM ORDER BY danhmuc.MaDM ASC;");
    }
?>
