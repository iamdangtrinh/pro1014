<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'detail':
                // lay du liệu
                if (isset($_GET['id'])) {
                    $MaDM = $_GET['id'];
                    $AllDM=category_getALLDM();
                    $tenDM = get_tenDM($MaDM);
                    if(!$tenDM){
                        header('location: '.$base_url.'404.php');
                    }else{
                        if($tenDM['MaDMC']==0){
                            $soluongSP =count_productsbydmanddmc($MaDM);
                            $page = 1;
                            if(isset($_GET['page'])) {
                                $page = $_GET['page'];
                            }
                            $spDM = product_danhmucanddmc($MaDM, $page,12);
                        }else{
                            $soluongSP = count_productsbydm($MaDM);
                            $page = 1;
                            if(isset($_GET['page'])) {
                                $page = $_GET['page'];
                            }
                            $spDM = product_danhmuc($MaDM, $page,12);
                        }
                        $dsdm = get_id($_GET['id']);
                        //hien thi du lieu
                        $sotrang = ceil($soluongSP / 12);
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