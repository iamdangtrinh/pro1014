<?php
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'wishlist':
                include_once 'model/m_wishlist.php';
                if(isset($_SESSION['user'])){
                    $MaTK = $_SESSION['user']['MaTK'];
                    $wishlist = show_wishlist($MaTK);
                    $view_name = 'page_wishlist';

                }else{
                    $_SESSION['loi']['yeu'] = 'Vui lòng đăng nhập để thêm sản phẩm vào yêu thích';

                }
                $view_name = 'wishlist';
                break;
            
            default:
                
                break;
        }
    }



?>