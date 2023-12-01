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
            case 'checkout':
                include_once 'model/m_cart.php';
                
                //laydulieu
                $title = "Kiểm tra thanh toán";
                $view_name='page_checkout';
                break;
            case 'wishlist':
                //laydulieu
                include_once 'model/m_wishlist.php';
                if(isset($_SESSION['user'])){
                    $MaTK = $_SESSION['user']['MaTK'];
                    $wishlist = show_wishlist($MaTK);
                    $view_name = 'page_wishlist';
                }else{
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
    
                        $has_wishlist = check_wishByProductAndUser($MaTK,$MaSP);
                        if($has_wishlist) {


                                add_to_wishlist($MaSP);
                            
                        } else {
                            his_cart($MaTK);
                            $has_wishlist = check_wishByProductAndUser($MaTK,$MaSP);
                            add_to_wishlist($MaSP);
                        }
                    }
                }
                header('location: '.$base_url.'');
                break;
            case '':
                include_once 'model/m_wishlist.php';
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
                if (isset($_POST['search_key'])) {
                    // doi tu post sang get
                    header("location: ".$base_url."page/search/".$_POST['search_key']."");
                }
                // lay du lieu
                include_once 'model/m_product.php';
                $name="Kết quả tìm kiếm";
                $page=1;
                if (isset($_GET['page'])){
                    $page=$_GET['page'];
                }
                $ketqua=product_search($_GET['search_key'],$page);
                $sotrang=ceil((product_searchTotal($_GET['search_key']))/12);
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