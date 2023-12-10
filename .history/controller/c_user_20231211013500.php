<?php
include_once 'model/m_user.php';
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'dashboard':
            // Nếu tồn tại người dùng thì cho vào dashboard
            if (isset($_SESSION['user']['VaiTro'])) {
                include_once 'model/m_cart.php';
                $history_cart =  history_cart($_SESSION['user']['MaTK']);
                $view_name = 'user_dashboard';
            } else {
                // Neus không tồn tại người dùng thì chuyển về trang đăng ký
                $_SESSION['error']['register'] = 'Vui lòng đăng ký để truy cập vào trang dashboard';
                header('location: ' . $base_url . 'user/register');
            }
            // $MaTK = $_SESSION['user']['MaTK'];
            $info_user = user_getById($_SESSION['user']['MaTK']);
            $title = 'Quản lí tài khoản';
            break;
        // Đăng nhập tài khoản
        case 'login': 
            include_once 'model/m_user.php';
            //lay du lieu
            if (isset($_POST['btn_login']) && $_POST['btn_login']) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                if (empty($email) || empty($password)) {
                    // Hiển thị lỗi
                    $_SESSION['error']['login'] = "Email hoặc mật khẩu không được để trống";
                } else {
                    // kiểm tra tài khoản có tồn tại hay không
                    $has_account = check_login($email, $password);
                    // cho phép đăng nhập
                    if ($has_account) {
                        $_SESSION['user'] = $has_account;
                        // echo "Đăng nhập thành công";     
                        if ($_SESSION['user']['VaiTro'] == 0) {
                            header('location: ' . $base_url . 'page/home');
                        } else {
                            header('location: ' . $base_url . 'admin/dashboard');
                        }
                        // Chuyển về trang chủ
                    } else if ($has_account == 0) {
                        $_SESSION['error']['login'] = "Tài khoản hoặc mật khẩu sai. Vui lòng thử lại";
                    }
                }
            }
            $view_name = 'user_login';
            $title = "Đăng nhập tài khoản";
            break;
        // Đăng ký tài khoản
        case 'register':
            if (isset($_POST['btn_register']) && $_POST['btn_register']) {
                $HoTen = $_POST['fullname'];
                $Email = $_POST['email'];
                $SoDienThoai = $_POST['number_phone'];
                $MatKhau = $_POST['password'];
                $DiaChi = $_POST['address'];

                if (empty($SoDienThoai) || empty($MatKhau) || empty($HoTen) || empty($DiaChi)) {
                    $_SESSION['error']['register'] = 'Đăng ký không thành công. Vui lòng thử lại';
                    // header('location: ' . $base_url . 'user/register');
                } else if (empty($Email)) {
                    $_SESSION['error']['register'] = 'Đăng ký không thành công. Vui lòng thử lại sau';
                // } else if (true) {
                //     $_SESSION['error']['register'] = 'Đăng ký không thành công. Email không hợp lệ';
            // Kiểm tra tài khoản có tồn tại hay không
                } else if (has_email($Email) > 0) {
                    $_SESSION['error']['register'] = 'Đăng ký không thành công. Tài khoản này đã tồn tại';
                } else {
                    // Allow registration
                    user_add($SoDienThoai, $Email, $HoTen, $MatKhau, $DiaChi);
                    $_SESSION['success']['register'] = 'Đăng ký tài khoản thành công.';
                }
            }
            $view_name = 'user_register';
            $title = "Đăng ký tài khoản";
            break;
        case 'update_info':
            if(isset($_POST['btn_update_info']) && $_POST['btn_update_info']){
                $info_user = user_getById($_SESSION['user']['MaTK']);
                $HoTen = $_POST['HoTen'];
                $SoDienThoai = $_POST['SoDienThoai'];
                $DiaChi = $_POST['DiaChi'];
                $MaTK=$_SESSION['user']['MaTK'];
                if(empty($HoTen) && empty($SoDienThoai) && empty($DiaChi)){
                    $_SESSION['loi'] = 'Vui lòng nhập <strong>các thông tin</strong> cho tài khoản!';
                }elseif(empty($HoTen)){
                    $_SESSION['loi'] = 'Vui lòng nhập <strong>họ tên</strong> cho tài khoản!';
                }elseif(empty($SoDienThoai)){
                    $_SESSION['loi'] = 'Vui lòng nhập <strong>số điện thoại</strong> cho tài khoản!';
                }elseif(empty($DiaChi)){
                    $_SESSION['loi'] = 'Vui lòng nhập <strong>địa chỉ</strong> cho tài khoản!';
                }elseif($HoTen == $info_user['HoTen'] && $SoDienThoai == $info_user['SoDienThoai'] && $DiaChi == $info_user['DiaChi']){
                    $_SESSION['loi'] = 'Vui lòng nhập <strong>các thông tin mới</strong> cho tài khoản!';
                }else{
                    if
                    user_edit_info($MaTK,$SoDienThoai, $HoTen, $DiaChi);
                    $_SESSION['thanhcong'] = 'Bạn đã cập nhật tài khoản thành công!';
                }
            }
            header('location: '.$base_url.'user/dashboard');
            break;
        case 'update_pass':
            if(isset($_POST['btn_update_pass']) && $_POST['btn_update_pass']){
                $info_user = user_getById($_SESSION['user']['MaTK']);
                $MatKhau = $_POST['password'];
                $MatKhauMoi = $_POST['new_password'];
                $MatKhauNhapLai = $_POST['re_password'];
                $MaTK = $_SESSION['user']['MaTK'];
                if(empty($MatKhau) && empty($MatKhauMoi) && empty($MatKhauNhapLai)){
                    $_SESSION['loi'] = 'Vui lòng nhập các thông tin cho tài khoản!';
                }elseif(md5($MatKhau) != $info_user['MatKhau']){
                    $_SESSION['loi'] = 'Vui lòng nhập đúng mật khẩu cũ của tài khoản!';
                }elseif($MatKhau == $MatKhauMoi){
                    $_SESSION['loi'] = 'Vui lòng nhập mật khẩu mới khác mật khẩu cũ cho tài khoản!';
                }elseif($MatKhauMoi != $MatKhauNhapLai){
                    $_SESSION['loi'] = 'Vui lòng nhập mật khẩu mới và mật khẩu nhập lại giống nhau!';
                }elseif(empty($MatKhauMoi)){
                    $_SESSION['loi'] = 'Vui lòng nhập mật khẩu mới cho tài khoản!';
                }elseif(empty($MatKhauNhapLai)){
                    $_SESSION['loi'] = 'Vui lòng nhập lại mật khẩu mới cho tài khoản!';
                }elseif(empty($MatKhau)){
                    $_SESSION['loi'] = 'Vui lòng nhập mật khẩu cũ cho tài khoản!';
                }
                else{
                    user_update_pass($MaTK, md5($MatKhauMoi));
                    $_SESSION['thanhcong'] = 'Bạn đã cập nhật mật khẩu thành công!';
                }
            }
            header('location: '.$base_url.'user/dashboard');
            break;
        case 'forgotPassword':
            if (isset($_SESSION['user'])) {
                header('location: ' . $base_url . 'page/home');
            } else {
                $view_name = 'user_forgotPassword';
            }
            $title = "Quên mật khẩu";
            break;
        case 'logout':
            unset($_SESSION['user']);
            header('location: ' . $base_url . 'page/home');
            break;
        case 'history':
            $MaTK=$_SESSION['user']['MaTK'];
            $MaHD=$_GET['MaHD'];
            $chitiethd=getproductByHD($MaTK,$MaHD);
            $view_name = 'user_history';
            $title = "Chi tiết đơn hàng";
            break;
        default:
            $view_name = 'page_home';
            break;
    }
    include_once 'view/v_user_layout.php';
} else {
    header('location: ' . $base_url . 'page/home');
}
?>