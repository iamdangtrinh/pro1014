<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'wishlish':
                include_once 'model/m_wishlist.php';
                include_once 'model/m_product.php';
                if(isset($_SESSION['user'])) {
                    if(isset($_POST['btn_addtowishlist']) && $_POST['btn_addtowishlist']) {
                        // xử lí sau 
                        $MaTK = $_SESSION['user']['MaTK'];
                        $MaSP = $_POST['MaSP'];
    
                        $has_cart = has_wishlist($MaTK);
                        if($has_cart) {
                            // nếu sản phẩm tồn tại mà người dùng mua nữa thì cập nhật lại giỏ hàng
                            add_to_wishlist($has_wishlist['MaHD'], $SoLuongSP, $MaSP);
                        } else {
                            his_wishlist($MaTK);
                            $has_cart = has_wishlist($MaTK);
                            add_to_wishlist($has_wishlist['MaHD'], $SoLuongSP, $MaSP);
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
            
        }



?>