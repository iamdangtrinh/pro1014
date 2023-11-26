<?php 
   include_once 'm_pdo.php';
   function admin_ShowanhUser(){
    return pdo_query("SELECT * FROM taikhoan ");
}
    function admin_getUser(){
        return pdo_query("SELECT * FROM taikhoan ORDER BY MaTK DESC LIMIT 4");
    }
    function admin_getById($MaDM){
        return pdo_query_one("SELECT * FROM  danhmuc WHERE MaDM=$MaDM");
    }
    function admin_getALLDM(){
        return pdo_query("SELECT *FROM danhmuc ");
    }     
    function danhmuc_add($MaDM,$TenDM,$MaDMC){
      pdo_execute("INSERT INTO danhmuc(`MaDM`,`TenDM`,`MaDMC`) VALUES(?,?,?)", $MaDM,$TenDM,$MaDMC);
    }
    function admin_update_DM($MaDM,$TenDM,$MaDMC){
        return pdo_execute("UPDATE danhmuc SET TenDM=?, MaDMC=? WHERE MaDM=?",$TenDM,$MaDMC,$MaDM);
    }
    function admin_delete($MaDM){
        pdo_execute("DELETE FROM danhmuc WHERE MaDM=?", $MaDM);
    }
    function admin_addkhuyenmai($maKhuyenMai, $TenKM, $codeKhuyenMai, $soTienGiam, $ngayBatDau, $ngayKetThuc, $SoLuong) {
    return pdo_execute("INSERT INTO khuyenmai (MaKM, TenKM, CodeKM, GiaKM, NgayBatDau, NgayKetThuc, SoLuong) 
                        VALUES (?, ?, ?, ?, ?, ?, ?)", 
                        $maKhuyenMai, $TenKM, $codeKhuyenMai, $soTienGiam, $ngayBatDau, $ngayKetThuc, $SoLuong);
    }
    function getallkm(){
        return pdo_query("SELECT * FROM khuyenmai");
    }
    function admin_getKMById($MaKM){
        return pdo_query_one("SELECT * FROM  khuyenmai WHERE MaKM=$MaKM");
    }
    function updatekm($tenKhuyenMai, $giaKhuyenMai, $maKhuyenMai, $ngayBatDau, $ngayKetThuc, $SoLuong){
        return pdo_execute("UPDATE khuyenmai SET TenKM = '$tenKhuyenMai', GiaKM = '$giaKhuyenMai', NgayBatDau = '$ngayBatDau', NgayKetThuc = '$ngayKetThuc', SoLuong = '$SoLuong' WHERE MaKM = '$maKhuyenMai' ");
    }
    function is_codeKM($codeKhuyenMai){
        return pdo_query_value("SELECT COUNT(*) FROM khuyenmai WHERE CodeKM = '$codeKhuyenMai'");
    }
    function xoakm($MaKM){
         pdo_execute("DELETE FROM khuyenmai WHERE MaKM = $MaKM");
    }
   
    // function history_getDM($MaDM) {
    //   return pdo_query("SELECT * FROM danhmuc dm INNER JOIN danhmuccon dmc ON dm.MaDM = dmc.MaDM INNER JOIN da s ON ct.MaSach = s.MaSach WHERE ls.MaTK=? AND ls.TrangThai=?",$MaTK, 'gio-sach');
    // }



?>