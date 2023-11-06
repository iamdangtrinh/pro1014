<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'home':
                // lay du lieu
                //hien thi du lieu
                $view_name='page_home';
                break;
            case 'cart':
                //laydulieu
                $view_name='page_cart';
                break;
            case 'shop':
                //laydulieu
                $view_name='page_shop';
                break;
            case 'contact':
                //laydulieu
                $view_name='page_contact';
                break;
            case 'aboutUs':
                //laydulieu
                $view_name='page_aboutUs';
                break;
            case 'wishlist':
                //laydulieu
                $view_name='page_wishlist';
                break;
            case 'history': 
                //laydulieu
                $MaTK=$_SESSION['user']['MaTK'];
                $view_name='page_history';
                break;
            default:
                $view_name='page_home';
                break;
        }
        include_once 'view/v_user_layout.php';
    }else{
        header('location: '.$base_url.'page/home');
    }
?>