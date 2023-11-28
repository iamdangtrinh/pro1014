<?php
session_start();
ob_start();
include_once 'config.php';
include_once 'model/m_pdo.php';
include_once 'model/m_product.php';
include_once 'model/m_category.php';
include_once 'model/m_wishlist.php';
$danhmuc = category_getALLDM();
$danhmucmuc = category_getALLDMMUC();
include_once 'model/m_admin.php';
$showanhuser = admin_ShowanhUser();
include_once 'model/m_cart.php';

if(isset($_SESSION['user'])) {
    $count_cart = count_cart($_SESSION['user']['MaTK']);
    $show_cart_for_user = show_cart_for_user($_SESSION['user']['MaTK']);
} else {
}

pdo_get_connection();
if (isset($_GET['mod'])) {
    switch ($_GET['mod']) {
        case 'page':
            $ctrl_name = 'page';
            break;
        case 'user':
            $ctrl_name = 'user';
            break;
        case 'product':
            $ctrl_name = 'product';
            break;
        case '':
            $ctrl_name = ''
            break;
        case 'category':
            $ctrl_name = 'category';
            break;
        case 'cart':
            $ctrl_name = 'cart';
            break;
        case 'admin':

            $ctrl_name = 'admin';
            break;
        default:
            $ctrl_name = 'page';
            break;
    }
    include_once 'controller/c_' . $ctrl_name . '.php';
} else {
    header('location: ' . $base_url . 'page/home');
}
?>