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
            case 'discount':
                //laydulieu
                $view_name='page_discount';
                break;
            case 'history': 
                //laydulieu
                $MaTK=$_SESSION['user']['MaTK'];
                $view_name='page_history';
                break;
            case 'search':
                if (isset($_POST['keyword'])) {
                    // doi tu post sang get
                    header("location: ".$base_url."page/search/".$_POST['keyword']."");
                }
                // lay du lieu
                include_once 'model/m_product.php';
                $name="Kết quả tìm kiếm";
                $page=1;
                if (isset($_GET['page'])){
                    $page=$_GET['page'];
                }
                $ketqua=product_search($_GET['keyword'],$page);
                $sotrang=ceil((product_searchTotal($_GET['keyword']))/8);
                // hien thi du lieu
                $view_name='page_search';
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
