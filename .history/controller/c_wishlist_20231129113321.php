<?php
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'wishlist':
                include_once 'model/m_wishlist.php';
                if(isset($_SESSION['user'])){
                    $MaTK = $_SESSION['user']['MaTK'];
                    $wishlist

                }
                $view_name = 'wishlist';
                break;
            
            default:
                
                break;
        }
    }



?>