<?php

if(isset($_GET['act'])) {
    switch($_GET['act']) {
        case 'home':
            // lay du lieu
            include_once 'model/m_product.php';
            include_once 'model/m_user.php';
            $dsMoi = product_getNew(4);
            $dsGhim = product_getPin(4);
            //hien thi du lieu
            $view_name = 'page_home';
            $info_user = user_getById();
            break;

        case 'shop':
            $dsGhim = product_getPin(3);
            $limit = 12;
            $start = 0;
            $soluongSP = count_product();
            $sotrang = ceil(intval($soluongSP) / $limit);
            if(isset($_GET["shop"])) {
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
            $view_name = 'page_contact';
            break;
        case 'aboutUs':
            //laydulieu
            $view_name = 'page_aboutUs';
            break;
        case 'checkout':
            include_once 'model/m_cart.php';
            if(isset($_POST['btn_cart']) && $_POST['btn_cart']) {
                $MaHD = $_POST['MaHD'];
                $total = $_POST['total_cart'];
                update_total_cart($total, $MaHD);
                $total_cart = get_total($MaHD);
            } else {
                header('location: '.$base_url.'gio-hang');
            }

            //laydulieu
            $title = "Kiểm tra thanh toán";
            $view_name='page_checkout';
            break;
        case 'wishlist':
            //laydulieu
            include_once 'model/m_wishlist.php';
            if(isset($_SESSION['user'])) {
                $MaTK = $_SESSION['user']['MaTK'];
                $wishlist = show_wishlist($MaTK);
                $view_name = 'page_wishlist';
            } else {
                $_SESSION['loi']['yeuthich'] = 'Vui lòng đăng nhập để thêm sản phẩm vào yêu thích';
                header('Location: '.$base_url.'user/login');
            }
            $title = "Danh sách yêu thích";
            break;
        case 'addtowishlist':

            include_once 'model/m_product.php';
            include_once 'model/m_wishlist.php';
            if(isset($_SESSION['user'])) {
                if(isset($_POST['btn_addtowishlist']) && $_POST['btn_addtowishlist']) {

                    $MaTK = $_SESSION['user']['MaTK'];
                    $MaSP = $_POST['MaSP'];
                    $has_wishlist = check_wishByProductAndUser($MaTK, $MaSP);
                    if(true) {
                        add_to_wishlist($MaTK, $MaSP);
                    } else {
                        his_wishlist($MaTK);
                        $has_wishlist = check_wishByProductAndUser($MaTK, $MaSP);
                        add_to_wishlist($MaTK, $MaSP);
                    }
                }
            }
            header('location: '.$base_url.'page/wishlist');
            break;
        case 'delete_wishlist':
            include_once 'model/m_wishlist.php';
            delete_wishlist_by_pro($_GET['id']);
            header('location: '.$base_url.'page/wishlist');

            break;
        case 'discount':
            //laydulieu
            $view_name = 'page_discount';
            break;
        case 'nhanhang':
            //laydulieu
            $MaTK=$_SESSION['user']['MaTK'];
            $MaHD=$_GET['MaHD'];
            $chitiethd=getproductByHD($MaTK,$MaHD);
            $title = "Chi tiết đơn hàng";
            $view_name = 'page_nhanhang';
            break;
        case 'history':
            //laydulieu
            $MaTK = $_SESSION['user']['MaTK'];
            $view_name = 'page_history';
            break;
        case 'search':
            if(isset($_POST['search_key'])) {
                // doi tu post sang get
                header("location: ".$base_url."page/search/".$_POST['search_key']."");
            }
            // lay du lieu
            include_once 'model/m_product.php';
            $name = "Kết quả tìm kiếm";
            $page = 1;
            if(isset($_GET['page'])) {
                $page = $_GET['page'];
            }
            $ketqua = product_search($_GET['search_key'], $page);
            $sotrang = ceil(intval((product_searchTotal($_GET['search_key']))) / 12);
            // hien thi du lieu
            $view_name = 'page_search';
            break;
        default:
            // lay du lieu
            include_once 'model/m_product.php';
            $dsMoi = product_getNew(4);
            $dsGhim = product_getPin(4);
            //hien thi du lieu
            $view_name = 'page_home';
            break;
    }
    include_once 'view/v_user_layout.php';
} else {
    header('location: '.$base_url.'page/home');
}
?>