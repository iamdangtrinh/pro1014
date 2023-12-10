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
    function user_update_info($HoTen, $SoDienThoai, $DiaChi, $MaTK){
        return pdo_execute("UPDATE taikhoan SET HoTen=?, SoDienThoai =?, DiaChi=? WHERE MaTK=?", $HoTen,$SoDienThoai, $DiaChi, $MaTK);
    }
    function user_edit_info($MaTK,$SoDienThoai, $HoTen, $DiaChi){
        pdo_execute("UPDATE taikhoan SET SoDienThoai=?,HoTen=?,DiaChi=? WHERE MaTK=?",
        $SoDienThoai, $HoTen, $DiaChi, $MaTK);
    }
    function user_edit_avatar($MaTK,$HinhAnh){
        pdo_execute("UPDATE taikhoan SET HinhAnh = ? WHERE MaTK=?",
        $HinhAnh, $MaTK);
    }
    function user_update_pass($MaTK, $MatKhau){
        pdo_execute("UPDATE taikhoan SET MatKhau = ? WHERE MaTK = ?", $MatKhau, $MaTK);
    }
    //up anh
    function user_upanh(['']){
        $target_dir='upload/avatar/';
        $target_file=$target_dir . basename($_FILES['Hinh']['name']);
        if(!file_exists($target_file)){
            move_uploaded_file($_FILES['Hinh']['tmp_name'], $target_file);
        }
        $img=basename($_FILES['Hinh']['name']);
        return $img;
    }
    function user_timhinhxoaanh($MaTK){
        return pdo_query_one("SELECT * FROM taikhoan WHERE MaTK = ?",$MaTK);
    }
?>
