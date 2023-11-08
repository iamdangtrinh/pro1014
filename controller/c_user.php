<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'dashboard':
                //lay du lieu
                // hien thi du lieu
                $view_name='user_dashboard';
                break;
                // Đăng nhập tài khoản
            case 'login':
                //lay du lieu

                // kiểm tra tài khoản có tồn tại hay không
                
                // Nếu tồn tại 

                // Nếu không tồn tại
                echo "thành công";

                // hien thi du lieu
                $view_name='user_login';
                $title ="Đăng nhập";
                break;
                // Đăng ký tài khoản
            case 'register':
                //lay du lieu
                // hien thi du lieu
                $view_name='user_register';
                $title = "Đăng ký";
                break;
            case 'forgotPassword':
                //lay du lieu
                // hien thi du lieu
                $view_name='user_forgotPassword';
                break;
            case 'logout':
                unset($_SESSION['user']);
                header('location: '.$base_url.'page/home');
            default:
                $view_name='page_home';
                break;
        }
        include_once 'view/v_user_layout.php';
    }else{
        header('location: '.$base_url.'page/home');
    }
?>