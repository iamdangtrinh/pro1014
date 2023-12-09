<?php
session_start();
ob_start();

include_once '../model/m_pdo.php';
include_once '../config.php';

// xử lí data 
switch ($_GET['act']) {
    case 'ajax_search':
        include_once '../model/m_product.php';
        //lay du lieu
        // if(isset($_POST['keyword'])) {
        $keyword = $_POST['keyword'];
        $show_search = search_live_product($keyword);
        // echo json_encode($show_search);
        if ($show_search) {
            foreach ($show_search as $value):
                extract($value);
                echo '<a href="'.$base_url.'product/detail/'.$MaSP.'" class="col-md-4 img-focus">
                    <img src="' . $base_url . 'upload/products/' . $AnhSP . '"
                        width="50" height="50" alt="' . $TenSP . '">
                </a>
                <div class="col-md-8 mt-2 content-focus">' . $TenSP . ' </div>';
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

        if ($SoLuongSP > $Quantity['SoLuong']) {
            // lưu session vào là disiable true
            echo '
            <div class="toast toast--error">
                <div class="toast__icon">
                    <i class="fa fa-check-circle"></i>
                </div>
                <div class="toast__body">
                    <h3 class="toast__title">Thất bại</h3>
                    <p class="toast__msg">Rất tiếc, bạn chỉ có thể mua tối đa ' . $Quantity['SoLuong'] . ' sản phẩm.</p>
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
        if (count_cart($_SESSION['user']['MaTK']) >= 1) {
            if (isset($_POST['btn_coupon']) && $_POST['btn_coupon']) {
                // lấy giá trị input của couponcode
                $couponcode = $_POST['couponcode'];
                // Nếu counponcode trống => Bắt người dùng nhập mã
                if (empty($couponcode)) {
                    echo "error_coupon_null";
                } else {
                    // Nếu có nhập mã code thì select xem mã đó có đúng không
                    $has_coupon = has_coupon_code($couponcode);
                    // Nếu mã đó có tồn tại thì
                    if ($has_coupon) {
                        // Kiểm tra mã đó còn hạn dùng hay không
                        $counpon_date = $has_coupon['NgayKetThuc'];
                        // biến ngày giờ thành số giây
                        $counpon_date_timestamp = strtotime($counpon_date);
                        if (time() > $counpon_date_timestamp) {
                            echo "Mã giảm giá không còn hạn sử dụng";
                        } else {
                            // Kiểm tra mã đó còn số lượng dùng hay không
                            if ($has_coupon['SoLuong'] > 0) {
                                $_SESSION['coupon']['has'] = $has_coupon;
                                echo '<input type="hidden" class="coupon_value" value="' . $has_coupon['GiaKM'] . '">';
                                echo "Đơn hàng của bạn được giảm " . number_format($has_coupon['GiaKM'], 0, ',', '.') . ' VNĐ';
                            } else {
                                echo "Mã giảm giá đã hết";
                            }
                        }
                    } else {
                        echo "error_coupon_false";
                    }
                }
            }
        } else {
            echo "Vui lòng mua hàng để dùng chức năng này";
        }
        break;

    case 'addwish':
        include_once '../model/m_wishlist.php';
        $MaTK = $_SESSION['user']['MaTK'];
        $MaSP = $_POST['MaSP'];
        add_to_wishlist($MaTK, $MaSP);
        break;

    case 'select_option':
        include_once '../model/m_product.php';
        $search_key = $_POST['search_key'];
        switch ($search_key) {
            case 'popularity':
                $product_shop = product_search_option_by_poplarity($page = 1);
                show_product($product_shop, $base_url);
                break;
            case 'rating':
                $product_shop = product_search_option_by_rating($page = 1);
                show_product($product_shop, $base_url);
                break;
            case 'date':
                $product_shop = product_search_option_by_new_date($page = 1);
                show_product($product_shop, $base_url);
                break;
            case 'price':
                $product_shop = product_search_option_by_price($page = 1);
                show_product($product_shop, $base_url);
                break;
            case 'price-desc':
                $product_shop = product_search_option_by_pricedesc($page = 1);
                show_product($product_shop, $base_url);
                break;
        }
    default:
        break;
}

?>