<?php 
    include_once 'm_pdo.php';
    function category_getALLDM(){
        return pdo_query("SELECT danhmuc.TenDM, danhmuccon.TenDMC FROM danhmuc INNER JOIN danhmuccon ON danhmuc.MaDM = danhmuccon.MaDM ORDER BY danhmuc.MaDM ASC;");
    }
    function category_getbyDM($MaDM, $MaDMC=""){
        return pdo_query("SELECT * FROM sanpham sp INNER JOIN danhmuc dm ON sp.MaDM = dm.MaDM INNER JOIN danhmuccon dmc ON dm.MaDM = dmc.MaDM WHERE dm.MaDM = ? AND dmc.MaDMC = ?", $MaDM, $MaDMC);
    }
    
?>
