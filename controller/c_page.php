<?php 

    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'home':
                // lay du lieu
                include_once 'model/m_product.php';
                $dsMoi = product_getNew(4);
                $dsGhim = product_getPin(4);
                //hien thi du lieu
                $view_name='page_home';
                break;
            case 'cart':
                //laydulieu
                $view_name='page_cart';
                break;
            case 'shop':
                $limit = 12;
                $start = 0;
                $soluongSP = count_product();
                $sotrang = ceil($soluongSP / $limit);
                if (isset($_GET["shop"])) {
                    // Xác định trang hiện tại
                    $trang_hien_tai = isset($_GET['shop']) ? intval($_GET['shop']) : 1;
                    // Tính toán vị trí bắt đầu của sản phẩm trên trang hiện tại
                    $start = ($trang_hien_tai - 1) * $limit;
                    // Lấy dữ liệu sản phẩm từ cơ sở dữ liệu
                    $product_shop = product_shop($start, $limit);
                }
                $product_shop = product_shop($start, $limit);
                $view_name = 'page_shop';
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