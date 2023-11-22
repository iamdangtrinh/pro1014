<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'detail':
                // lay du liệu
                $limit = 12;
                $start = 0;
                $soluongSP = count_product();
                $sotrang = ceil($soluongSP / $limit);
                if (isset($_GET["shop"])) {
                    // Xác định trang hiện tại
                    $trang_hien_tai = isset($_GET['shop']) ? intval($_GET['shop']) : 1;
                    // Tính toán vị trí bắt đầu của sản phẩm trên trang hiện tại
                    $start = ($trang_hien_tai - 1) * $limit;
                    // Lấy dữ liệu sản phẩm từ cơ sở dữ liệu
                    $product_shop = product_shop($start, $limit);
                }
                $product_shop = product_shop($start, $limit);
                //hien thi du lieu
                $view_name='category_detail';
                break;
                
            default:
                $view_name='page';
                break;
        }
        include_once 'view/v_user_layout.php';
    }else{
        header('location: '.$base_url.'page/home');
    }
?>