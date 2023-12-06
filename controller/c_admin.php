<?php
if(isset($_GET['act'])) {
    if($_SESSION['user']['VaiTro'] !== 0 && isset($_SESSION['user'])) {
        switch($_GET['act']) {
            case 'dashboard':
                //lay du lieu
                // hien thi du lieu
                include_once 'model/m_product.php';
                $tkProduct = count_product();
                include_once 'model/m_user.php';
                $tkUser = user_countAll();
                $hoaDonMoi = admin_getHoaDon();
                $tkSpTheoDanhMuc = danhmuc_TkSanPham();
                $allCate=category_getALLDM();
                include_once 'model/m_cart.php';
                $tkDoanhThu = history_stat();
                $tkTongDoanhThu = doanhthu_countAll();
                $tkHoaDon = hoadon_countAll();
                include_once 'model/m_pdo.php';
                include_once 'model/m_admin.php';
                $usermoi = admin_getUser();
                $view_name = 'admin_dashboard';
                $title = 'Trang quản trị';
                break;
            case 'category':
                //lay du lieu
                // hien thi du lieu
                include_once 'model/m_pdo.php';
                include_once 'model/m_admin.php';
                $dsADMIN_DM = admin_getALLDM();
                $view_name = 'admin_category';
                $title ="Trang quản lí danh mục";
                break;
                case 'category-them':
                    include_once 'model/m_pdo.php';
                    include_once 'model/m_admin.php';
                    if(isset($_POST['submit'])) {
                        $MaDM = $_POST['MaDM'];
                        $TenDM = $_POST['TenDM'];
                        $MaDMC = $_POST['MaDMC'];
                        $check_DM = admin_checkMaDM($MaDM);
                        if($check_DM){ //  bị trùng không thêm báo lỗi
                            $_SESSION['loi'] = 'Không thể thêm vì mã <strong>'.$MaDM.'</strong> đã tồn tại! ';
                        }else{// Sai , ko trùng , thêm tài khoản
                            danhmuc_add($MaDM, $TenDM, $MaDMC);
                            $_SESSION['thongbao'] = 'Đã thêm danh mục thành công!';
                        }
                    }
                    $view_name = 'admin_category_them';
                    $title ="Danh mục thêm";
                    break;
                
            case 'category-edit':
                include_once 'model/m_admin.php';
                $MaDM = $_GET['id'];
                if(isset($_POST['submit'])) {
                    $TenDM = $_POST['TenDM'];
                    $MaDMC = $_POST['MaDMC'];
                    admin_update_DM($MaDM, $TenDM, $MaDMC);
                }
                $itemDM = admin_getById($_GET['id']);
                $view_name = 'admin_category_edit';
                $title ="Danh mục sửa";
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
                $title ="Trang quản lí sản phẩm";
                break;
            case 'product-add':
                include_once 'model/m_pdo.php';
                include_once 'model/m_admin.php';
                if(isset($_POST['submit'])){
                    // Nhận dữ liệu từ form
                    $MaSP =''; 
                    $TenSP = $_POST['TenSP']; 
                    $SoLuong = $_POST['SoLuong'];
                    $Gia = $_POST['Gia'];
                    $GiaGiam = $_POST['GiaGiam'];
                    $MaDM = $_POST['MaDM'];
                    $MoTa = $_POST['MoTa'];
                    $target_dir="upload/products/";
                    $fileAnh = array("anh", "anh1", "anh2", "anh3", "anh4");
                    $upload = array();
                    foreach ($fileAnh as $fileName) {
                        $target_file = $target_dir . basename($_FILES[$fileName]["name"]);
                        move_uploaded_file($_FILES[$fileName]["tmp_name"],$target_file);
                        $upload[] = $_FILES[$fileName]["name"];
                    }
                    $check_MaSP = admin_checkMaSP($MaSP);
                    if($check_MaSP){ //  bị trùng không thêm báo lỗi
                        $_SESSION['loi'] = 'Không thể thêm vì mã <strong>'.$MaSP.'</strong> đã tồn tại! ';
                    }else{// Sai , ko trùng , thêm tài khoản
                        admin_AddProduct($TenSP,$_FILES["anh"]["name"], $_FILES["anh1"]["name"], $_FILES["anh2"]["name"], $_FILES["anh3"]["name"], $_FILES["anh4"]["name"], $SoLuong, $Gia, $GiaGiam, $MaDM, $MoTa);
                        $_SESSION['thongbao'] = 'Đã thêm sản phẩm thành công!';
                    }
                }
                $danhmuc = admin_getALLDM();
                $view_name='admin_product_add';
                $title ="Sản phẩm thêm";
                break;
            
            case 'product-edit':
                include_once 'model/m_pdo.php';
                include_once 'model/m_admin.php';
                    $MaSP = $_GET['id'];
                    if(isset($_POST['submit'])){
                        // Nhận dữ liệu từ form
                        $TenSP = $_POST['TenSP']; 
                        $_FILES['anh'];
                        $_FILES['anh1'];
                        $_FILES['anh2'];
                        $_FILES['anh3'];
                        $_FILES['anh4'];
                        $SoLuong = $_POST['SoLuong'];
                        $Gia = $_POST['Gia'];
                        $GiaGiam = $_POST['GiaGiam'];
                        $MoTa = $_POST['MoTa'];
                        $target_dir="upload/products/";
                        $fileAnh = array("anh", "anh1", "anh2", "anh3", "anh4");
                        $upload = array();
                        foreach ($fileAnh as $fileName) {
                            $target_file = $target_dir . basename($_FILES[$fileName]["name"]);
                            move_uploaded_file($_FILES[$fileName]["tmp_name"],$target_file);
                            $upload[] = $_FILES[$fileName]["name"];
                        }
                           
                            admin_UpdateProduct($MaSP, $TenSP, $_FILES["anh"]["name"], $_FILES["anh1"]["name"], $_FILES["anh2"]["name"], $_FILES["anh3"]["name"], $_FILES["anh4"]["name"], $SoLuong, $Gia, $GiaGiam, $MoTa);
                           
                    }
                    $show_AnhSP = admin_getPById_Product($MaSP);


                    $view_name='admin_product_edit';
                    $title ="Sản phẩm thêm";
                    break;
            case 'product-delete':
                include_once 'model/m_pdo.php';
                include_once 'model/m_admin.php';
                $MaSP=$_GET['id'];
                $anhsp = admin_Product_timxoaAnhSP($MaSP);
                admin_Product_Delete($MaSP);
                if(file_exists($anhsp)){
                   unlink($anhsp);
                }
                header('location: '.$base_url.'admin/product');
                break;
            case 'banner':
                include_once 'model/m_pdo.php';
                include_once 'model/m_admin.php';
                $showbanner = admin_ShowBanner();
                $view_name = 'admin_banner';
                $title ="Trang quản lí banner";
                break;
            
                case 'banner-add':
                    include_once 'model/m_pdo.php';
                    include_once 'model/m_admin.php';
                    if(isset($_POST['submit'])){
                        $MaBanner ="";
                        $_FILES['banner_anh'];
                        $target_dir="upload/banners/";
                        $target_file = $target_dir . basename($_FILES["banner_anh"]["name"]);
                        move_uploaded_file($_FILES['banner_anh']["tmp_name"],$target_file);
                     
                        $check_MaBanner =  admin_checkMaBanner($MaBanner);
                            if($check_MaBanner){ //  bị trùng không thêm báo lỗi
                                $_SESSION['loi'] = 'Không thể thêm vì mã <strong>'.$MaBanner.'</strong> đã tồn tại! ';
                            }else{// Sai , ko trùng , thêm tài khoản
                                admin_AddBanner($_FILES['banner_anh']['name']);
                                $_SESSION['thongbao'] = 'Đã thêm banner thành công!';
                            }
                    }
                    $view_name = 'admin_banner_add';
                    $title ="Thêm banner";
                    break;
                    case 'banner-edit':
                        include_once 'model/m_pdo.php';
                        include_once 'model/m_admin.php';
                        $MaBanner = $_GET['id'];
                        if(isset($_POST['submit'])){
                            $_FILES['banner_anh'];
                            $target_dir="upload/banners/";
                            $target_file = $target_dir . basename($_FILES["banner_anh"]["name"]);
                            move_uploaded_file($_FILES['banner_anh']["tmp_name"],$target_file);
                            $banner_anh=$target_file; 
                            $check_banner = admin_edit_banner($MaBanner,$_FILES["banner_anh"]["name"]);
                            if($check_banner != false){ //  bị trùng không thêm báo lỗi
                                $_SESSION['loi'] = 'Sửa không thành công! ';
                            }else{// Sai , ko trùng , thêm tài khoản
                                $_SESSION['thongbao'] = 'Đã sửa banner thành công!';
                            }
                        }
                        $showbanner = admin_getPById_Banner($MaBanner);
                        $view_name = 'admin_banner_edit';
                        $title ="Thêm banner";
                        break;
                    
            case 'user':
                //lay du lieu
                include_once 'model/m_user.php';
                $dsTK = user_getAll();
                // hien thi du lieu
                $view_name = 'admin_user';
                $title ="Trang quản lí tài khoản";
                break;
            case 'book':
                //lay du lieu
                include_once 'model/m_book.php';
                // hien thi du lieu
                $view_name = 'admin_book';
                break;
            case 'khuyenmai':
                include_once 'model/m_pdo.php';
                include_once 'model/m_admin.php';
                //lay du lieu
                if(isset($_POST['btn_km'])) {
                    $TenKM = $_POST['TenKM'];
                    $SoLuong = $_POST['SoLuong'];
                    $codeKhuyenMai = $_POST['khuyenMai'];
                    $soTienGiam = $_POST['soTienGiam'];
                    $ngayBatDau = $_POST['ngayBatDau'];
                    $ngayKetThuc = $_POST['ngayKetThuc'];

                    if(is_codeKM($codeKhuyenMai)) {
                        // Nếu tồn tại, báo lỗi và không thêm vào cơ sở dữ liệu
                        $loi = "Mã khuyến mãi '$codeKhuyenMai' đã tồn tại. Vui lòng chọn một mã khuyến mãi khác.";
                    } else {
                        // Nếu không trùng, thực hiện thêm vào cơ sở dữ liệu

                        $add_khuyenmai = admin_addkhuyenmai($TenKM, $codeKhuyenMai, $soTienGiam, $ngayBatDau, $ngayKetThuc, $SoLuong);

                        if ($add_khuyenmai !== false) {
                            echo "<div id='Thongbao' class='success'>Thêm mã khuyến mãi thành công</div>";
                            } else {
                                echo "<div id='Thongbao' class='error'>Thêm mã khuyến mãi không thành công.</div>";
                            }
                    }
                }
                // hien thi du lieu
                $show_KM = getallkm();
                $view_name = 'admin_khuyenmai';
                $title ="Trang quản lí khuyến mãi";
                break;
            case 'edit-khuyenmai':
                include_once 'model/m_pdo.php';
                include_once 'model/m_admin.php';
                $show_KM = admin_getKMById($_GET['id']);
                //lay du lieu
                if(isset($_POST['btn_sua'])) {
                    $maKhuyenMai = $_POST['MaKM'];
                    $tenKhuyenMai = $_POST['TenKM'];
                    $giaKhuyenMai = $_POST['GiaKM'];
                    $ngayBatDau = $_POST['NgayBatDau'];
                    $ngayKetThuc = $_POST['NgayKetThuc'];
                    $SoLuong = $_POST['SoLuong'];
                    if(is_codeKM($tenKhuyenMai)) {
                        // Nếu tồn tại, báo lỗi và không thêm vào cơ sở dữ liệu
                        $loi = "Mã khuyến mãi '$tenKhuyenMai' đã tồn tại. Vui lòng chọn một mã khuyến mãi khác.";
                    } else {
                        // Nếu không trùng, thực hiện thêm vào cơ sở dữ liệu
                        $updateQuery = updatekm($tenKhuyenMai, $giaKhuyenMai, $ngayBatDau, $ngayKetThuc, $SoLuong, $maKhuyenMai);
                        header('Location: '.$base_url.'admin/khuyenmai');
                        if ($updateQuery !== false) {
                            echo "<div id='Thongbao' class='success'>Cập nhật thành công</div>";
                            } else {
                                echo "<div id='Thongbao' class='error'>Cập nhật không thành công.</div>";
                            }
                    }
                }
                // hien thi du lieu
                $title = "Sửa khuyến mãi";
                $view_name = 'admin_sua_khuyenmai';
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
                $view_name = 'admin_history';
                break;
            case 'user-add':
                //lay du lieu
                include_once 'model/m_user.php';
                if(isset($_POST['submit'])) {
                    $SoDienThoai = $_POST['SoDienThoai'];
                    $Email = $_POST['Email'];
                    $HoTen = $_POST['HoTen'];
                    $MatKhau = $_POST['MatKhau'];
                    $DiaChi = $_POST['DiaChi'];
                    $VaiTro = $_POST['VaiTro'];
                    $kq = user_checkEmail($Email);
                    if($kq) {
                        // bi trung, khong them
                        $_SESSION['loi'] = 'Không thể tạo tài khoản với số điện thoại <strong>'.$Email.'</strong>';
                    } else {
                        //khong trung
                        $MatKhau = 12345;
                        $HinhAnh = 'defaut.png';
                        user_admin_add($SoDienThoai, $Email, $HoTen, $MatKhau, $DiaChi, $VaiTro);
                        $_SESSION['thongbao'] = '<h4>Đã tạo tài khoản với Email <strong>'.$Email.'</strong> thành công';
                    }
                }
                // hien thi du lieu
                $view_name = 'admin_user_add';
                break;
            case 'user-edit':
                //lay du lieu
                include_once 'model/m_user.php';
                $dsTK = user_getById($_GET['id']);
                if(isset($_POST['submit'])) {
                    $MaTK = $_GET['id'];
                    $HoTen = $_POST['HoTen'];
                    $Email = $_POST['Email'];
                    $SoDienThoai = $_POST['SoDienThoai'];
                    $MatKhau = $_POST['MatKhau'];
                    $DiaChi = $_POST['DiaChi'];
                    $VaiTro = $_POST['VaiTro'];
                    $kq = user_checkEmail($Email);
                    if($kq && $kq['MaTK'] != $MaTK) {
                        // bi trung, khong them
                        $_SESSION['loi'] = '<p>Không thể tạo tài khoản với Email <strong>'.$Email.'</strong> !</p>';
                    } else {
                        //khong trung
                        user_edit($MaTK, $SoDienThoai, $Email, $HoTen, $MatKhau, $DiaChi, $VaiTro);
                        $_SESSION['thongbao'] = '<p>Thông tin thay đổi đã được lưu lại !</p>';
                    }
                }
                // hien thi du lieu
                $view_name = 'admin_user_edit';
                break;
            case 'user-delete':
                    // Lấy dữ liệu
                    include_once 'model/m_user.php';
                    $vaiTroUser = user_getById($_GET['id']);
                    // Kiểm tra xem người dùng có tự xóa chính mình hay không => nếu đúng => báo lỗi
                    if ($_GET['id'] == $_SESSION['user']['MaTK']) {
                        $_SESSION['loi'] = '<p>Không thể tự xóa tài khoản của bạn!</p>';
                    }else if ($_SESSION['user']['VaiTro'] == $vaiTroUser['VaiTro']  )  {
                        user_delete($_GET['id']);
                    }else if ($_SESSION['user']['VaiTro'] < $vaiTroUser['VaiTro']  ){
                        // Kiểm tra xem người dùng có quyền cao hơn hay không => nếu đúng => báo lỗi
                        $_SESSION['loi'] = '<p>Bạn không thể xóa người có quyền cao hơn!</p>';
                        
                    }else{
                        user_delete($_GET['id']);
                        $_SESSION['thongbao'] = '<p>Xóa người dùng thành công! </p>';
                    }
                    // Hiển thị dữ liệu
            header('location: '.$base_url.'admin/user');
                    $view_name = 'admin_user_delete';
                    break;
            case 'binhluan':
                //lay du lieu
                include_once 'model/m_user.php';
                $show_bl = show_comment();
                $view_name = 'admin_binhluan';
                $title ="Trang quản lí bình luận";
                break;
            case 'chitiet-binhluan':
                //lay du lieu
                include_once 'model/m_user.php';
                $tenSP = get_tenSP($_GET['id']);
                $show_bl = chitiet_comment($_GET['id']);
                $view_name = 'admin_binhluan_chitiet';
                break;
            case 'delete-binhluan':
                //lay du lieu
                include_once 'model/m_user.php';
                delete_comment($_GET['id']);
                header('location: '.$base_url.'admin/chitiet/binhluan/'.$_GET['MaSP']);
                break;
            case 'donhang':
                //lay du lieu
                include_once 'model/m_user.php';
                $show_HD = admin_donhang();
                $view_name = 'admin_donhang';
                $title ="Trang quản lí đơn hàng";
                break;
            case 'sua-donhang':
                //lay du lieu
                include_once 'model/m_user.php';
                ///
                if (isset($_POST['btn-donhang'])) {
                    $MaHD = $_POST['MaHD'];
                    $TrangThai = $_POST['TrangThai'];
                    
                    // Check if MaHD exists before updating
                    $getHDbyid = get_MaHDbyid($MaHD);
                
                    if ($getHDbyid) {
                        $SuaHD = suaTT($TrangThai, $MaHD);
                
                        if ($SuaHD !== false) {
                           $_SESSION['Thongbao']['Thanhcong'] = "<div id='Thongbao' class='success'>Cập nhật trạng thái đơn hàng thành công</div>";
                            } else {
                                $_SESSION['Thongbao']['Thatbai'] ="<div id='Thongbao' class='error'>Cập nhật không thành công.</div>";
                            }
                    } else {
                        echo "Mã Hóa đơn bruh bruh.";
                    }
                }
                ///
                $show_HD = admin_donhang();
                $view_name = 'admin_donhang';
                break;
            default:
                $view_name = 'admin_dashboard';
                break;
        }
    } else {
        header('location: '.$base_url.'page/home');
    }
    include_once 'view/v_admin_layout.php';
} else {
    header('location: '.$base_url.'page/home');
}
?>