<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case :
            case 'addtowishlish':
                include_once 'model/m_wishlist.php';
                include_once 'model/m_product.php';
                if(isset($_SESSION['user'])) {
                    if(isset($_POST['btn_addtowishlist']) && $_POST['btn_addtowishlist']) {
                        // xử lí sau 
                        $MaTK = $_SESSION['user']['MaTK'];
                        $MaSP = $_POST['MaSP'];
    
                        $has_wishlist = has_wishlist($MaTK);
                        if($has_wishlist) {
                            add_to_wishlist($has_wishlist['MaHD'], $MaSP);
                        } else {
                            his_wishlist($MaTK);
                            $has_wishlist = has_wishlist($MaTK);
                            add_to_wishlist($has_wishlist['MaHD'], $MaSP);
                        }
                    }
                }
                header("Location: '.$base_url.'addtowishlist");
                break;
            default:
                $view_name = 'wishlist';
                break;
            }
            include_once 'view/v_page_wishlist.php';
        }else{
            header("Location: '.$base_url.'page/home");
        }



?>