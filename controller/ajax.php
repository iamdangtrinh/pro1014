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

        if (isset($_POST['btn_coupon']) && $_POST['btn_coupon']) {
            $couponcode = $_POST['couponcode'];

            if (empty($couponcode)){
                $_SESSION['coupon']['error'] == "Vui lòng nhập mã giảm giá";
            } else {
                $has_coupon = has_coupon_code($couponcode);
                if ($has_coupon) {
                    // if($has_coupon['NgayBatDau'])
                    if (isset($has_coupon['GiaKM'])) {
                       echo $_SESSION['coupon']['susscess'] = $has_coupon['GiaKM'];
                    }
                } else {
                //    echo $_SESSION['coupon']['error'] = "Mã giảm giá không đúng";
                   echo die;
                }
            }
        }

        break;


    default:
        break;
}

?>