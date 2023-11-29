<?php
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'wishlist':
                include_once 'model/m_wishlist.php';
                $view_name = 'wishlist';
                break;
            
            default:
                
                break;
        }
    }



?>