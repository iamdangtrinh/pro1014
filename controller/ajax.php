<?php
session_start();
ob_start();

include_once '../model/m_pdo.php';

// xử lí data 
switch($_GET['act']) {
    case 'ajax_search':
        include_once '../model/m_product.php';
        //lay du lieu
        // if(isset($_POST['keyword'])) {
        $keyword = $_POST['keyword'];
        $show_search = search_live_product($keyword);
        // echo json_encode($show_search);
        if($show_search) {
            foreach($show_search as $value):
                extract($value);
                echo '<a href="login" class="col-md-4 img-focus">
                    <img src="http://localhost/pro1041/upload/products/'.$AnhSP.'"
                        width="50" height="50" alt="'.$TenSP.'">
                </a>
                <div class="col-md-8 mt-2 content-focus">'.$TenSP.' </div>';
            endforeach;
        } else {
            echo '<span class="not_product">Sản phẩm không tồn tại</span>';
        }
        break;
    case 'ajax_cart_quantity':
        include_once '../model/m_cart.php';
        $SoLuongSP = $_POST['quantity'];
        $MaSP = $_POST['MaSP'];
        $Quantity = quantity_cart_max($MaSP);

        if($SoLuongSP > $Quantity['SoLuong']) {
            // lưu session vào là disiable true
            echo '
            <div class="toast toast--error">
                <div class="toast__icon">
                    <i class="fa fa-check-circle"></i>
                </div>
                <div class="toast__body">
                    <h3 class="toast__title">Thất bại</h3>
                    <p class="toast__msg">Rất tiếc, bạn chỉ có thể mua tối đa '.$Quantity['SoLuong'].' sản phẩm.</p>
                </div>
    
                <div class="toast__close">
                    <i class="fa fa-times"></i>
                </div>
            </div>
            ';
        } else {
            // lưu session vào là disiable flase
            echo '
            <div class="toast toast--success">
                <div class="toast__icon">
                    <i class="fa fa-check-circle"></i>
                </div>
                <div class="toast__body">
                    <h3 class="toast__title">Thành công</h3>
                    <p class="toast__msg">Cập nhật số lượng thành công</p>
                </div>
    
                <div class="toast__close">
                    <i class="fa fa-times"></i>
                </div>
            </div>
            ';
            update_quantity_by_cart($SoLuongSP, $MaSP);
        }

        break;

    case 'ajax_cart_coupon':
        include_once '../model/m_cart.php';
        // Kiểm tra btn_coupon có tồn tại và có được click vào hay không
        if(isset($_POST['btn_coupon']) && $_POST['btn_coupon']) {
            // lấy giá trị input của couponcode
            $couponcode = $_POST['couponcode'];
            // Nếu counponcode trống => Bắt người dùng nhập mã
            if(empty($couponcode)) {
                echo "error_coupon_null";
            } else {
                // Nếu có nhập mã code thì select xem mã đó có đúng không
                $has_coupon = has_coupon_code($couponcode);
                // Nếu mã đó có tồn tại thì
                if($has_coupon) {
                    // Kiểm tra mã đó còn hạn dùng hay không
                    $counpon_date = $has_coupon['NgayKetThuc'];
                    // biến ngày giờ thành số giây
                    $counpon_date_timestamp = strtotime($counpon_date);
                    if(time() > $counpon_date_timestamp) {
                        echo "Mã giảm giá không còn hạn sử dụng";
                    } else {
                        // Kiểm tra mã đó còn số lượng dùng hay không
                        if($has_coupon['SoLuong'] > 0) {
                            echo '<input type="hidden" class="coupon_value" value="'.$has_coupon['GiaKM'].'">';
                            echo "Đơn hàng của bạn được giảm ".$has_coupon['GiaKM'];
            //                 echo '
            // <div class="toast toast--success">
            //     <div class="toast__icon">
            //         <i class="fa fa-check-circle"></i>
            //     </div>
            //     <div class="toast__body">
            //         <h3 class="toast__title">Thành công</h3>
            //         <p class="toast__msg">Cập nhật số lượng thành công</p>
            //     </div>
    
            //     <div class="toast__close">
            //         <i class="fa fa-times"></i>
            //     </div>
            // </div>
            //                 ';
                        } else {
                            echo "Mã giảm giá đã hết";
                        }
                    }

                    if(isset($has_coupon['GiaKM'])) {
                        //    echo  json_decode($_SESSION['coupon']['susscess'] = $has_coupon['GiaKM']);
                    }
                } else {
                    echo "error_coupon_false";
                }
            }
        }
        break;

    case 'addwish':
        include_once '../model/m_wishlist.php';
        $MaTK = $_SESSION['user']['MaTK'];
        $MaSP = $_POST['MaSP'];
        add_to_wishlist($MaTK, $MaSP);
        break;
    
        case 'admin_khuyenmai': 
            echo "đến admin khuyến mãi";
            // xử lí bằng các hàm function
            
        break;

    default:
        break;
}

?>