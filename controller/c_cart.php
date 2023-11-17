<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'cart_order':
              
                $view_name = 'page_cart';
                $title = 'Giỏ hàng - Bé yêu';
                break;
            default:
                break;
        }
        include_once 'view/v_user_layout.php';
    }else{
        // header('location: '.$base_url.'page/home');
    }
?>