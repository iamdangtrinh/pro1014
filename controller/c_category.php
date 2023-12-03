<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'detail':
                $limit = 12;
                $start = 0;
                // lay du liệu
                if (isset($_GET['id'])) {
                    $MaDM = $_GET['id'];
                    $AllDM=category_getALLDM();
                    $tenDM = get_tenDM($MaDM);
                    if(!$tenDM){
                        header('location: '.$base_url.'404.php');
                    }else{
                        if($tenDM['MaDMC']==0){
                            $spDM=get_dmAnddmc($MaDM);
                        }else{
                            $spDM=category_getbyDM($MaDM);
                        }
                        $soluongSP = count_productsbydm($MaDM);
                        //////////////////////////////////////////////////////
                        $sotrang = ceil($soluongSP / $limit);
                        if (isset($_GET['page'])) {
                            // Xác định trang hiện tại
                            $trang_hien_tai = isset($_GET['page']) ? intval($_GET['page']) : 1;
                            // Tính toán vị trí bắt đầu của sản phẩm trên trang hiện tại
                            $start = ($trang_hien_tai - 1) * $limit;
                            // Lấy dữ liệu sản phẩm từ cơ sở dữ liệu
                        }
                        $dsdm = get_id($_GET['id']);
                        //hien thi du lieu
                        $view_name='category_detail';
                        // Tiếp tục xử lý
                        // ...
                    }
                } else {
                    // Xử lý khi 'id' không tồn tại
                    header('location: '.$base_url.'404.php');
                }
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