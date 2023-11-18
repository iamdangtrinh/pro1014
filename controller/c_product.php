<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'detail':
            //lay du lieu
            // hien thi du lieu
            $view_name = 'product_detail';
            break;
        case 'cart_order':
            //laydulieu
            include_once 'model/m_product.php';
            include_once 'model/m_cart.php';

            if (isset($_POST['addtocart']) && $_POST['addtocart']) {
                // xử lí sau 
            }
            $user = $_SESSION['user']['id'];
            $MaSP = $_POST[''];
            $SoLuongSP = $_POST[''];
            $TongTien = $_POST[''];

            // nếu sản phẩm có trong giỏ hàng

            // nếu sản phâm không có trong giỏ hàng 


            // Hiển thị dữ liệu
            $view_name = 'page_cart';
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