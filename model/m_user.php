<?php 
    include_once 'm_pdo.php';
    // thao tac du lieu trong cs fql
    function user_login($phone,$pass){
        return pdo_query_one("SELECT * FROM taikhoan WHERE SoDienThoai=? AND MatKhau=?",$phone,$pass);
    }
    function user_getAll(){
        return pdo_query("SELECT * FROM taikhoan");
    }
    function user_checkPhone($SoDienThoai){
        return pdo_query_one("SELECT * FROM taikhoan WHERE SoDienThoai=?",$SoDienThoai);
    }
    function user_add($SoDienThoai,$HoTen,$MatKhau,$ViTien,$Quyen,$HinhAnh){
        pdo_execute("INSERT INTO taikhoan(`SoDienThoai`,`HoTen`,`MatKhau`,`ViTien`,`Quyen`,`HinhAnh`) VALUES(?,?,?,?,?,?)",$SoDienThoai,$HoTen,$MatKhau,$ViTien,$Quyen,$HinhAnh);
    }
    function user_getById($MaTK){
        return pdo_query_one("SELECT * FROM taikhoan WHERE MaTK=?",$MaTK);
    }
    function user_edit($MaTK,$SoDienThoai,$HoTen,$ViTien,$Quyen){
        pdo_execute("UPDATE taikhoan SET SoDienThoai=?,HoTen=?,ViTien=?,Quyen=? WHERE MaTK=?",$SoDienThoai,$HoTen,$ViTien,$Quyen,$MaTK);
    }
    function user_delete($MaTK){
        pdo_execute("DELETE FROM taikhoan WHERE MaTK=?",$MaTK);
    }
    function user_countAll(){
        return pdo_query_value("SELECT COUNT(*) FROM user");
    }
?>