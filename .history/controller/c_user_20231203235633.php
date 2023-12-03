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
                // Nếu không tồn tại người dùng thì chuyển về trang đăng ký
                $_SESSION['error']['register'] = 'Vui lòng đăng ký để truy cập vào trang dashboard';
                header('location: ' . $base_url . 'user/register');
            }
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
        case 'forgotPassword':
            include_once 'model/m_user.php';
            $password = $_POST['password'];
            $new_password = $_POSST['new_password'];
            $re_password = $_POST['re_password'];
            if($re_password =){

            }
            // if (isset($_SESSION['user'])) {
            //     if(isset($_POST['btn_change_pass']) && $_POST['btn_change_pass']){
            //     }
            //     header('location: ' . $base_url . 'page/home');
            // } else {
            //     $view_name = 'user_forgotPassword';
            // }
            $title = "Quên mật khẩu";
            break;
        case 'update_user':
            include_once 'model/m_user.php';
            
            break;
        case 'logout':
            unset($_SESSION['user']);
            header('location: ' . $base_url . 'page/home');
        default:
            $view_name = 'page_home';
            break;
    }
    include_once 'view/v_user_layout.php';
} else {
    header('location: ' . $base_url . 'page/home');
}
?>