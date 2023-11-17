<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'detail':
                //lay du lieu
                // hien thi du lieu
                $view_name='product_detail';
                break;

            default:
                $view_name='product_detail';
                break;
        }
        include_once 'view/v_user_layout.php';
    }else{
        header('location: '.$base_url.'page/home');
    }
?>