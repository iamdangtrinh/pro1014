<?php 
   include_once 'm_pdo.php';
    function admin_getUser(){
        return pdo_query("SELECT * FROM taikhoan ORDER BY MaTK DESC LIMIT 4");
    }
    function admin_getALLDM(){
        return pdo_query("SELECT danhmuc.MaDM, danhmuc.TenDM, danhmuccon.TenDMC FROM danhmuc INNER JOIN danhmuccon ON danhmuc.MaDM = danhmuccon.MaDM order by danhmuc.MaDM;");
    }     
    // function danhmuc_add($MaDM, $TenDM, $TenDMC){
    //     pdo_execute("INSERT INTO danhmuc(`MaDM`,'TenDM') VALUES(?,?) AND danhmuccon('TenDMC') VALUES(?)",$MaDM,$TenDM,$TenDMC);
    // }
    function admin_hasDM($MaDM) {
        return pdo_query_one("SELECT * FROM danhmuc WHERE MaDM = ?,$MaDM");
    }
    function admin_addDM($MaDM, $TenDM) {
      pdo_execute("INSERT INTO danhmuc(`MaDM`,`TenDM`) VALUES(?,?)", $MaDM,$TenDM);
    }
    function admin_addToDM($MaDM,$MaDMC){
      pdo_execute("INSERT INTO chitietlichsu(`MaDM`,`MaDMC`) VALUES(?,?)", $MaDM, $MaDMC);
    }
    // function history_get($MaDM) {
    //   return pdo_query("SELECT * FROM lichsu ls INNER JOIN chitietlichsu ct ON ls.MaLS = ct.MaLS INNER JOIN sach s ON ct.MaSach = s.MaSach WHERE ls.MaTK=? AND ls.TrangThai=?",$MaTK, 'gio-sach');
    // }



?>