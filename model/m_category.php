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
    function count_productsbydmanddmc($MaDM){
        return pdo_query_value("SELECT COUNT(MaSP) FROM sanpham sp INNER JOIN danhmuc dm ON sp.MaDM = dm.MaDM WHERE dm.MaDM = ? || dm.MaDMC = ?", $MaDM,$MaDM);
    }
    function danhmuc_TkSanPham(){
        return pdo_query("SELECT dm.MaDM, dm.TenDM, COUNT(sp.MaSP) AS SoLuong, AVG(sp.Gia) AS TrungBinh, MIN(sp.Gia) AS ThapNhat, MAX(sp.Gia) as CaoNhat 
        FROM danhmuc dm 
        LEFT JOIN sanpham sp ON dm.MaDM = sp.MaDM 
        WHERE dm.MaDMC = 0
        GROUP BY dm.MaDM, dm.TenDM;");
    }
    function product_danhmucanddmc($MaDM, $page,$limit){
        $batdau= ($page-1)*$limit;
        // 1 trang lay 8

        // trang 1 bat dau tu 0 1 2 3 4 5 6 7 

        // trang 2 bat dau tu 8

        // trang 3 bat dau tu 16

        // trang n bat dau tu (n-1)*8
        
        return pdo_query("SELECT * FROM sanpham sp INNER JOIN danhmuc dm ON sp.MaDM = dm.MaDM WHERE dm.MaDM = ? || dm.MaDMC = ? LIMIT $batdau,$limit",$MaDM,$MaDM);
    }
    function product_danhmuc($MaDM, $page,$limit){
        $batdau= ($page-1)*$limit;
        // 1 trang lay 8

        // trang 1 bat dau tu 0 1 2 3 4 5 6 7 

        // trang 2 bat dau tu 8

        // trang 3 bat dau tu 16

        // trang n bat dau tu (n-1)*8
        
        return pdo_query("SELECT * FROM sanpham sp INNER JOIN danhmuc dm ON sp.MaDM = dm.MaDM WHERE dm.MaDM = ? LIMIT $batdau,$limit",$MaDM);
    }
?>
