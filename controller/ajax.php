<?php
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
        print_r($_POST);
        include_once '../model/m_product.php';
        $SoLuongSP = $_POST['quantity'];
        $MaSP = $_POST['MaSP'];
        update_uantity_by_cart($SoLuongSP, $MaSP);
        break;
    default:
        break;
}

?>