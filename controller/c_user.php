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
                    $has_account = check_login($email, $password);
                    // cho phép đăng nhập
                    if ($has_account > 0) {
                        $_SESSION['user'] = $has_account;
                        header('location: ' . $base_url . 'page/home');
                    } else if ($has_account == 0) {
                        $_SESSION['error']['login'] = "Tài khoản hoặc mật khẩu sai. Vui lòng thử lại";
                    }
                }
            }
            // Chuyển về trang chủ
            $view_name = 'user_login';
            $title = "Đăng nhập";
            break;
        // Đăng ký tài khoản
        case 'register':
            //lay du lieu
            // hien thi du lieu
            $view_name = 'user_register';
            $title = "Đăng ký";
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