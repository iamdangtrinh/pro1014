<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'detail':
                // lay du liệu
                include_once 'model/m_category.php';
                include_once 'model/m_book.php';
                $dsSachCungChuDe=book_getByCategory($_GET['id']);
                //hien thi du lieu
                $view_name='category_detail';
                break;
            default:
                $view_name='page';
                break;
        }
        include_once 'view/v_user_layout.php';
    }else{
        header('location: '.$base_url.'page/home');
    }
?>