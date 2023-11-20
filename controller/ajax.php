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
        foreach ($show_search as $value) : extract($value);
        echo '<a href="login" class="col-md-4 img-focus">
                <img src="<?= $base_url ?>upload/demoes/demo23/uploads/products/'.$AnhSP.'"
                    width="50" height="50" alt="'.$TenSP.'">
            </a>
            <div class="col-md-8 mt-2 content-focus">'.$TenSP.' </div>';
        endforeach;
        // } else {
        //     echo json_encode(array('error' => 'Không tìm thấy sản phẩm'));
        // }

        // hien thi du lieu
        break;
    default:

        break;
}

?>