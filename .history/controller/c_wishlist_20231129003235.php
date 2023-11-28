<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'wishlish':
                include_once 'model/m_wishlist.php';
                include_once 'model/m_product.php';
                break;
            }
        }



?>