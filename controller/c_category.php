<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'detail':
                // lay du liệu
                $MaDM=$_GET['id'];
                if(isset($_GET['MaDMC'])){
                    $MaDMC=$_GET['MaDMC'];
                    $spDM=category_getbyDMandDMC($MaDM, $MaDMC);
                    $soluongSP = count_productsbydm_anddmc($MaDM, $MaDMC);
                }else{
                    $spDM=category_getbyDM($MaDM);
                    $soluongSP = count_productsbydm($MaDM);
                }
                //////////////////////////////////////////////////////

                $limit = 12;
                $start = 0;
                $sotrang = ceil($soluongSP / $limit);
                if (isset($_GET["page"])) {
                    // Xác định trang hiện tại
                    $trang_hien_tai = isset($_GET['page']) ? intval($_GET['page']) : 1;
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