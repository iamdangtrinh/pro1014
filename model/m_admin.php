<?php 
   include_once 'm_pdo.php';
    function admin_getUser(){
        return pdo_query("SELECT * FROM taikhoan ORDER BY MaTK DESC LIMIT 4");
    }
    function admin_getALLDM(){
        return pdo_query("SELECT *FROM danhmuc ");
    }     
    function danhmuc_add($MaDM,$TenDM){
      pdo_execute("INSERT INTO danhmuc(`MaDM`,`TenDM`) VALUES(?,?)", $MaDM,$TenDM);
  }
  function admin_addkhuyenmai($maKhuyenMai, $TenKM, $codeKhuyenMai, $soTienGiam, $ngayBatDau, $ngayKetThuc, $SoLuong) {
    return pdo_execute("INSERT INTO khuyenmai (MaKM, TenKM, CodeKM, GiaKM, NgayBatDau, NgayKetThuc, SoLuong) 
                        VALUES (?, ?, ?, ?, ?, ?, ?)", 
                        $maKhuyenMai, $TenKM, $codeKhuyenMai, $soTienGiam, $ngayBatDau, $ngayKetThuc, $SoLuong);
}
    function getallkm(){
        return pdo_query("SELECT * FROM khuyenmai");
    }
    function updatekm($tenKhuyenMai, $giaKhuyenMai, $maKhuyenMai){
        return pdo_execute("UPDATE khuyenmai SET TenKM = '$tenKhuyenMai', GiaKM = '$giaKhuyenMai' WHERE MaKM = '$maKhuyenMai'");
    }
   
    // function history_getDM($MaDM) {
    //   return pdo_query("SELECT * FROM danhmuc dm INNER JOIN danhmuccon dmc ON dm.MaDM = dmc.MaDM INNER JOIN da s ON ct.MaSach = s.MaSach WHERE ls.MaTK=? AND ls.TrangThai=?",$MaTK, 'gio-sach');
    // }



?>