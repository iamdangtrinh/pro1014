<?php 
    include_once 'config.php';
    include_once 'model/m_pdo.php';
    pdo_get_connection();
    if(isset($_GET['mod'])){
        switch($_GET['mod']){
            case 'page':
                $ctrl_name='page';
                break;
            case 'user':
                $ctrl_name='user';
                break;
            case 'product':
                $ctrl_name='product';
                break;
            case 'category':
                $ctrl_name='category';
                break;
            case 'admin':
                $ctrl_name='admin';
                break;
            default:
            $ctrl_name='page';
                break;
        }
        include_once 'controller/c_'.$ctrl_name.'.php';
    }else{
        header('location: '.$base_url.'page/home');
    }
?>
