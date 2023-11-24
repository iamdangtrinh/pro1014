<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'detail':
            //lay du lieu
            include_once 'model/m_product.php';
            
            // hien thi du lieu
            $view_name = 'product_detail';
            break;
        case 'addtocart':
            //laydulieu
            include_once 'model/m_product.php';
            include_once 'model/m_cart.php';
            if (isset($_SESSION['user'])) {
                if (isset($_POST['addtocart']) && $_POST['addtocart']) {
                    // xử lí sau 
                    $MaTK = $_SESSION['user']['MaTK'];
                    // $MaSP = $_POST[''];
                    // $SoLuongSP = $_POST[''];
                    // $TongTien = $_POST[''];
                    // $MaKM = 1;

                    // $has_cart = has_cart($MaTK);
                    // if ($has_cart) {
                    //     // nếu sản phẩm tồn tại mà người dùng mua nữa thì cập nhật lại giỏ hàng
                    //     add_to_cart($has_cart['MaHD'], $SoLuongSP, $MaSP);
                    // } else {
                    //     his_cart($TongTien, $MaTK, $MaKM);
                    //     $has_cart = has_cart($MaTK);
                    //     add_to_cart($has_cart['MaHD'], $SoLuongSP, $MaSP);
                    // }

                    header('location: ' . $base_url . 'cart/cart_order ');
                }
            } else {
                header('location: ' . $base_url . 'page/home');
            }
            break;

        case 'cart':
            include_once 'model/m_cart.php';
            if (isset($_SESSION['user'])) {
                $MaTK = $_SESSION['user']['MaTK'];
                $cart = show_cart_for_user($MaTK);
                // Hiển thị dữ liệu
                $view_name = 'page_cart';
            } else {
                $_SESSION['error']['login'] = "Vui lòng đăng nhập để mua hàng";
                header('location: ' . $base_url . 'user/login');
            }
            $title = 'Giỏ hàng - Bé yêu';
            break;

        default:
            $view_name = 'product_detail';
            break;
    }
    include_once 'view/v_user_layout.php';
} else {
    header('location: ' . $base_url . 'page/home');
}
?>