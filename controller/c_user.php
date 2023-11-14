<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'dashboard':
            //lay du lieu
            // hien thi du lieu
            $view_name = 'user_dashboard';
            break;
        // Đăng nhập tài khoản
        case 'login':
            //lay du lieu
            include_once 'model/m_user.php';
            // kiểm tra tài khoản có tồn tại hay không
            if (isset($_POST['btn_login']) && $_POST['btn_login']) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                if ($email == null && $email == " " || $password == null && $password == "") {
                    // Hiển thị lỗi
                    $_SESSION['error']['login'] = "Đăng nhập không thành công. Vui lòng thử lại";
                } else {
                    // check login 
                    $has_account = check_login($email, md5($password));
                    // cho phép đăng nhập
                    if ($has_account > 0) {
                        $_SESSION['user'] = $has_account;
                        // echo "Đăng nhập thành công";     
                        sleep(0.3);
                        if($_SESSION['user']['VaiTro'] == 1) {
                            header('location: ' . $base_url . 'admin/dashboard');
                        } else {
                            header('location: ' . $base_url . 'page/home');
                        }
                        // Chuyển về trang chủ
                    } else if ($has_account == 0) {
                        $_SESSION['error']['login'] = "Tài khoản hoặc mật khẩu sai. Vui lòng thử lại";
                        // echo "Tài khoản hoặc mật khẩu sai. Vui lòng thử lại";
                    }
                }
            }
            $view_name = 'user_login';
            $title = "Đăng nhập tài khoản";
        break;
        // Đăng ký tài khoản
        case 'register':
            //lay du lieu
            include_once 'model/m_user.php';
            // Kiểm tra tài khoản có tồn tại hay không
            if(isset($_POST['btn_register']) && $_POST['btn_register']) {
                $HoTen = $_POST['fullname'];
                $Email = $_POST['email'];
                $SoDienThoai = $_POST['number_phone'];
                $MatKhau = $_POST['password'];
                $DiaChi = $_POST['address'];
    
                if($Email == "" || empty($Email)) {
                    $_SESSION['error']['register'] = 'Đăng ký không thành công';
                } else if(!preg_match("/@/", $Email)) {
                    $_SESSION['error']['register'] = 'Đăng ký không thành công. Email không hợp lệ';
                } else {
                    // cho phép đăng ký tài khoản
                    if(has_email($Email) > 0) {
                        $_SESSION['error']['register'] = 'Đăng ký không thành công. Tài khoản này đã tồn tại';
                    } else {
                        $_SESSION['success']['register'] = 'Đăng ký tài khoản thành công.';
                        user_add($SoDienThoai,$Email,$HoTen,md5($MatKhau),$DiaChi);
                    }
                }
            }

            $view_name = 'user_register';
            $title = "Đăng ký tài khoản";
            break;
        case 'forgotPassword':
            //lay du lieu
            // hien thi du lieu
            $view_name = 'user_forgotPassword';
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