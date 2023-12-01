<?php 
    include_once 'm_pdo.php';
    function category_getALLDM(){
        return pdo_query("SELECT * FROM danhmuc ");
    }
    function category_getALLDMMUC(){
        return pdo_query("SELECT * FROM danhmuc");
    }
    function category_getbyDM($MaDM) {
        return pdo_query("SELECT * FROM sanpham sp INNER JOIN danhmuc dm ON sp.MaDM = dm.MaDM WHERE dm.MaDM = ? ",$MaDM);
    }
    function get_id($id){
        return pdo_query_one("SELECT * FROM danhmuc WHERE MaDM = $id");
    }
    function get_categorybyid($id, $start, $limit) {
        return pdo_query("SELECT * FROM sanpham WHERE MaDM = ? ORDER BY sanpham.MaSP DESC LIMIT $start, $limit", $id);
    }
    function count_productsbydm($MaDM){
        return pdo_query_value("SELECT COUNT(MaSP) FROM sanpham sp INNER JOIN danhmuc dm ON sp.MaDM = dm.MaDM WHERE dm.MaDM = ?", $MaDM);
    }
    function get_tenDM($MaDM){
        return pdo_query_one("SELECT TenDM, MaDMC FROM danhmuc WHERE MaDM = ?", $MaDM);
    }
    function get_dmAnddmc($MaDM){
        return pdo_query("SELECT * FROM sanpham sp INNER JOIN danhmuc dm ON sp.MaDM = dm.MaDM WHERE dm.MaDM = ? || dm.MaDMC = ?",$MaDM,$MaDM);
    }
?>
