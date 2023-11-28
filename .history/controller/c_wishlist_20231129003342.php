<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'wishlish':
                include_once 'model/m_wishlist.php';
                include_once 'model/m_product.php';
                if(isset($_SESSION['user'])) {
                    if(isset($_POST['btn_addtocart']) && $_POST['btn_addtocart']) {
                        // xử lí sau 
                        $MaTK = $_SESSION['user']['MaTK'];
                        $MaSP = $_POST['MaSP'];
                        $SoLuongSP = $_POST['SoLuongSP'];
    
                        $has_cart = has_cart($MaTK);
                        if($has_cart) {
                            // nếu sản phẩm tồn tại mà người dùng mua nữa thì cập nhật lại giỏ hàng
                            add_to_cart($has_cart['MaHD'], $SoLuongSP, $MaSP);
                        } else {
                            his_cart($MaTK);
                            $has_cart = has_cart($MaTK);
                            add_to_cart($has_cart['MaHD'], $SoLuongSP, $MaSP);
                        }
                    }
                }
                break;
            }
        }



?>