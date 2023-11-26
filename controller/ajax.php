<?php
session_start();
ob_start();

include_once '../model/m_pdo.php';

// xử lí data 
switch ($_GET['act']) {
    case 'ajax_search':
        include_once '../model/m_product.php';
        //lay du lieu
        // if(isset($_POST['keyword'])) {
        $keyword = $_POST['keyword'];
        $show_search = search_live_product($keyword);
        // echo json_encode($show_search);
        foreach ($show_search as $value):
            extract($value);
            echo '<a href="login" class="col-md-4 img-focus">
                <img src="http://localhost/pro1041/upload/demoes/demo23/products/' . $AnhSP . '"
                    width="50" height="50" alt="' . $TenSP . '">
            </a>
            <div class="col-md-8 mt-2 content-focus">' . $TenSP . ' </div>';
        endforeach;
        break;
    case 'ajax_cart_quantity':
        include_once '../model/m_cart.php';
        $SoLuongSP = $_POST['quantity'];
        $MaSP = $_POST['MaSP'];
        update_quantity_by_cart($SoLuongSP, $MaSP);
        break;

    case 'ajax_cart_coupon':
        include_once '../model/m_cart.php';
        // Kiểm tra btn_coupon có tồn tại và có được click vào hay không
        if (isset($_POST['btn_coupon']) && $_POST['btn_coupon']) {
            // lấy giá trị input của couponcode
            $couponcode = $_POST['couponcode'];
            // Nếu counponcode trống => Bắt người dùng nhập mã
            if (empty($couponcode)){
                echo "error_coupon_null";
            } else {
                // Nếu có nhập mã code thì select xem mã đó có đúng không
                $has_coupon = has_coupon_code($couponcode);
                // Nếu mã đó có tồn tại thì
                if ($has_coupon) {
                    // Kiểm tra mã đó còn hạn dùng hay không
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $counpon_date = $has_coupon['NgayKetThuc'];
                    // biến ngày giờ thành số giây
                    $counpon_date_timestamp = strtotime($counpon_date);
                    if(time() > $counpon_date_timestamp) {
                        echo "Mã giảm giá không còn hạn sử dụng";
                    } else {
                        // Kiểm tra mã đó còn số lượng dùng hay không
                        if($has_coupon['SoLuong'] > 0) {
                            echo "Đơn hàng của bạn được giảm " .$has_coupon['GiaKM'] ;
                        } else {
                            echo "Mã giảm giá đã hết";
                        }
                    }

                    if (isset($has_coupon['GiaKM'])) {
                    //    echo  json_decode($_SESSION['coupon']['susscess'] = $has_coupon['GiaKM']);
                    }
                } else {
                   echo "error_coupon_false";
                }
            } 
        }
        break;

        // Đăng ký ajax
        case 'register':
            include_once 'model/m_user.php';
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

        // Đăng nhập ajax 
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
                        if ($_SESSION['user']['VaiTro'] == 1) {
                            header('location: ' . $base_url . 'admin/dashboard');
                        } else {
                            header('location: ' . $base_url . 'page/home');
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


    default:
        break;
}

?>