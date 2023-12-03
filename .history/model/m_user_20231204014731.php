<?php 
    include_once 'm_pdo.php';
    // kiểm tra tài khoản trong sql có đúng không
    function check_login($email, $password){
        return pdo_query_one("SELECT * FROM taikhoan WHERE Email=? AND MatKhau=?",$email,md5($password));
    }
    // kiểm tra email có tồn tại hay không
    function has_email($email){
        return pdo_query_one("SELECT EMAIL FROM taikhoan WHERE Email=? ",$email);
    }
    // Tạo tài khoản người dùng 
    function user_add($SoDienThoai, $Email, $HoTen, $MatKhau, $DiaChi){
        pdo_execute("INSERT INTO taikhoan(`SoDienThoai`,`Email`,`HoTen`,`MatKhau`,`DiaChi`) VALUES(?,?,?,?,?)",$SoDienThoai,$Email,$HoTen,md5($MatKhau),$DiaChi);
    }
    // Thêm user từ Admin
    function user_admin_add($SoDienThoai, $Email, $HoTen, $MatKhau, $DiaChi,$VaiTro){
        pdo_execute("INSERT INTO taikhoan(`SoDienThoai`,`Email`,`HoTen`,`MatKhau`,`DiaChi`,`VaiTro`) VALUES(?,?,?,?,?,?)",$SoDienThoai,$Email,$HoTen,md5($MatKhau),$DiaChi,$VaiTro);
    }
    // Lấy thông tin user
    function user_getAll(){
        return pdo_query("SELECT * FROM taikhoan");
    }
    function user_checkEmail($Email){
        return pdo_query_one("SELECT * FROM taikhoan WHERE Email=?",$Email);
    }
    function user_getById($MaTK){
        return pdo_query_one("SELECT * FROM taikhoan WHERE MaTK=?",$MaTK);
    }
    function user_edit($MaTK,$SoDienThoai, $Email, $HoTen, $MatKhau, $DiaChi,$VaiTro){
        pdo_execute("UPDATE taikhoan SET SoDienThoai=?,Email=?,HoTen=?,MatKhau=?,DiaChi=?,VaiTro=? WHERE MaTK=?",
        $SoDienThoai, $Email, $HoTen, $MatKhau, $DiaChi,$VaiTro,$MaTK);
    }
    function user_delete($MaTK){
        pdo_execute("DELETE FROM taikhoan WHERE MaTK=?",$MaTK);
    }
    function user_countAll(){
        return pdo_query_value("SELECT COUNT(*) FROM taikhoan");
    }
    function user_update_info($MaTK, $SoDienThoai, $DiaChi){
        return pdo_execute("UPDATE taikhoan SET SoDienThoai =");
    }
?>
