<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'dashboard':
                //lay du lieu
                // hien thi du lieu
                include_once 'model/m_product.php';
                $tkProduct = count_product();
                include_once 'model/m_user.php';
                $tkUser = user_countAll();
                include_once 'model/m_pdo.php';
                include_once 'model/m_admin.php';
                $usermoi=admin_getUser();
                $view_name='admin_dashboard';
                break;
            case 'category':
                //lay du lieu
                // hien thi du lieu
                include_once 'model/m_pdo.php';
                include_once 'model/m_admin.php';
                $dsADMIN_DM = admin_getALLDM();
                $view_name='admin_category';
                break;
            case 'category-them':
                include_once 'model/m_pdo.php';
                include_once 'model/m_admin.php';
                if(isset($_POST['submit'])){
                    $MaDM=$_POST['MaDM'];
                    $TenDM=$_POST['TenDM'];
                    $MaDMC=$_POST['MaDMC'];
                    danhmuc_add( $MaDM,$TenDM,$MaDMC);
                    }
                $view_name='admin_category_them';
                break;
            case 'category-edit':
                include_once 'model/m_admin.php';
                $MaDM=$_GET['id'];
                if(isset($_POST['submit'])){
                    $TenDM=$_POST['TenDM'];
                    $MaDMC=$_POST['MaDMC'];
                    admin_update_DM($MaDM,$TenDM,$MaDMC);
                }
                $itemDM = admin_getById($_GET['id']);
                $view_name='admin_category_edit';
                break;
            case 'category-delete':
                //lay du lieu
                include_once 'model/m_admin.php';
                admin_delete($_GET['id']);
                $itemDM = admin_getById($_GET['id']);
                header('location: '.$base_url.'admin/category');
                break;
            case 'product':
                include_once 'model/m_pdo.php';
                include_once 'model/m_admin.php';
                $show_product = admin_ShowProduct();
                $view_name='admin_product';
                break;
            case 'product-add':
                
                $view_name='admin_product_add';
                break;
            case 'user': 
                //lay du lieu
                include_once 'model/m_user.php';
                $dsTK=user_getAll();
                // hien thi du lieu
                $view_name='admin_user';
                break;
            case 'book':
                //lay du lieu
                include_once 'model/m_book.php';
                // hien thi du lieu
                $view_name='admin_book';
                break;
            case 'khuyenmai':
                include_once 'model/m_pdo.php';
                include_once 'model/m_admin.php';
                //lay du lieu
                if (isset($_POST['btn_km'])) {
                    $TenKM = $_POST['TenKM'];
                    $SoLuong = $_POST['SoLuong'];
                    $codeKhuyenMai = $_POST['khuyenMai'];
                    $soTienGiam = $_POST['soTienGiam'];
                    $ngayBatDau = $_POST['ngayBatDau'];
                    $ngayKetThuc = $_POST['ngayKetThuc'];

                     if (is_codeKM($codeKhuyenMai)) {
                        // Nếu tồn tại, báo lỗi và không thêm vào cơ sở dữ liệu
                        $loi = "Mã khuyến mãi '$codeKhuyenMai' đã tồn tại. Vui lòng chọn một mã khuyến mãi khác.";
                    } else {
                    // Nếu không trùng, thực hiện thêm vào cơ sở dữ liệu
                        
                    $add_khuyenmai = admin_addkhuyenmai( $TenKM, $codeKhuyenMai, $soTienGiam, $ngayBatDau, $ngayKetThuc, $SoLuong);
                    
                        if ($add_khuyenmai == true) {
                                   
                    $thongbao = "Dữ liệu đã được thêm thành công!";
                        } 
                    else {
                            $thongbao = "Dữ liệu đã được thêm not thành công!";
                        }
                    }
                }                      
                // hien thi du lieu
                $show_KM = getallkm();
                $view_name='admin_khuyenmai';
                break;
                case 'edit-khuyenmai':
                    include_once 'model/m_pdo.php';
                    include_once 'model/m_admin.php';
                    $show_KM = admin_getKMById($_GET['id']);
                    //lay du lieu
                    if (isset($_POST['btn_sua'])) {
                        $maKhuyenMai = $_POST['MaKM'];
                        $tenKhuyenMai = $_POST['TenKM'];
                        $giaKhuyenMai = $_POST['GiaKM'];
                        $ngayBatDau = $_POST['NgayBatDau'];
                        $ngayKetThuc = $_POST['NgayKetThuc'];
                        $SoLuong = $_POST['SoLuong'];
                        if (is_codeKM($tenKhuyenMai)) {
                            // Nếu tồn tại, báo lỗi và không thêm vào cơ sở dữ liệu
                            $loi = "Mã khuyến mãi '$tenKhuyenMai' đã tồn tại. Vui lòng chọn một mã khuyến mãi khác.";
                        } else {
                        // Nếu không trùng, thực hiện thêm vào cơ sở dữ liệu
                        $updateQuery = updatekm($tenKhuyenMai, $giaKhuyenMai, $ngayBatDau, $ngayKetThuc, $SoLuong, $maKhuyenMai);
                        header('Location: '.$base_url.'admin/khuyenmai');
                        }
                    }                
                    // hien thi du lieu
                    $title = "Sửa khuyến mãi";
                    $view_name='admin_sua_khuyenmai';
                    break;
                case 'delete-khuyenmai':
                    include_once 'model/m_pdo.php';
                    include_once 'model/m_admin.php';
                    $show_KM = admin_getKMById($_GET['id']);
                     xoakm($_GET['id']);
                     header('Location: '.$base_url.'admin/khuyenmai');
                    break;
            case 'history':
                //lay du lieu
                include_once 'model/m_history.php';
                // hien thi du lieu
                $view_name='admin_history';
                break;
            case 'user-add':
                //lay du lieu
                include_once 'model/m_user.php';
                if(isset($_POST['submit'])){
                    $SoDienThoai=$_POST['SoDienThoai'];
                    $Email=$_POST['Email'];
                    $HoTen=$_POST['HoTen'];
                    $MatKhau=$_POST['MatKhau'];
                    $DiaChi=$_POST['DiaChi'];
                    $VaiTro=$_POST['VaiTro'];
                    $kq=user_checkEmail($Email);
                    if($kq){
                        // bi trung, khong them
                        $_SESSION['loi']='Không thể tạo tài khoản với số điện thoại <strong>'.$Email.'</strong>';
                    }else{
                        //khong trung
                        $MatKhau=12345;
                        $HinhAnh='defaut.png';
                        user_admin_add($SoDienThoai,$Email,$HoTen,$MatKhau,$DiaChi,$VaiTro);
                        $_SESSION['thongbao']='<h4>Đã tạo tài khoản với Email <strong>'.$Email.'</strong> thành công';
                    }
                }
                // hien thi du lieu
                $view_name='admin_user_add';
                break;
            case 'user-edit':
                //lay du lieu
                include_once 'model/m_user.php';
                $dsTK=user_getById($_GET['id']);
                if(isset($_POST['submit'])){
                    $MaTK=$_GET['id'];
                    $HoTen = $_POST['HoTen'];
                    $Email = $_POST['Email'];
                    $SoDienThoai = $_POST['SoDienThoai'];
                    $MatKhau = $_POST['MatKhau'];
                    $DiaChi = $_POST['DiaChi'];
                    $VaiTro = $_POST['VaiTro'];
                    $kq=user_checkEmail($Email);
                    if($kq && $kq['MaTK']!=$MaTK){
                        // bi trung, khong them
                        $_SESSION['loi']='<p>Không thể tạo tài khoản với Email <strong>'.$Email.'</strong> !</p>';
                    }else{
                        //khong trung
                        user_edit($MaTK,$SoDienThoai, $Email, $HoTen, $MatKhau, $DiaChi,$VaiTro);
                        $_SESSION['thongbao']='<p>Thông tin thay đổi đã được lưu lại !</p>';
                    }
                }
                // hien thi du lieu
                $view_name='admin_user_edit';
                break;
            case 'user-delete':
                //lay du lieu
                include_once 'model/m_user.php';
                // Kiểm tra xem người dùng có tự xóa chính mình hay không => nếu đúng => báo lỗi
                if ($_GET['id'] == $_SESSION['user']['MaTK']) {
                    $_SESSION['loi'] = '<p>Không thể tự xóa tài khoản của bạn!</p>';}
                else{
                    user_delete($_GET['id']);
                }
                
                header('location: '.$base_url.'admin/user');
                // hien thi du lieu
                $view_name='admin_user_delete';
                break;
            case 'binhluan':
                //lay du lieu
                include_once 'model/m_user.php';
                $show_bl = show_comment();
                $view_name='admin_binhluan';
                break;
            case 'delete-binhluan':
                //lay du lieu
                include_once 'model/m_user.php';
                delete_comment($_GET['id']);
                $show_comment = comment_getById($_GET['id']);
                header('location: '.$base_url.'admin/binhluan');
                break;
            default:
                $view_name='admin_dashboard';
                break;
        }

        include_once 'view/v_admin_layout.php';
    }else{
        header('location: '.$base_url.'page/home');
    }
?>