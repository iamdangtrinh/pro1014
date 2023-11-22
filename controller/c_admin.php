<?php 
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'dashboard':
                //lay du lieu
                // hien thi du lieu
                include_once 'model/m_pdo.php';
                include_once 'model/m_admin.php';
                $usermoi=admin_getUser();
                $view_name='admin_dashboard';
                break;
            case 'danhmuc':
                //lay du lieu
                // hien thi du lieu
                include_once 'model/m_pdo.php';
                include_once 'model/m_admin.php';
                $dsADMIN_DM = admin_getALLDM();
                $view_name='admin_danhmuc';
                break;
            case 'sua':
                    
                $view_name='admin_sua_danhmuc';
                break;
            case 'them':
                include_once 'model/m_pdo.php';
                include_once 'model/m_admin.php';
                if(isset($_POST['submit'])){
                    $MaDM=$_POST['MaDM'];
                    $TenDM=$_POST['TenDM'];
                    danhmuc_add( $MaDM,$TenDM);
                    }
                
                $view_name='admin_them_danhmuc';
                break;
            case 'user':
                //lay du lieu
                include_once 'model/m_user.php';
                $dsTK=user_getAll();
                // hien thi du lieu
                $view_name='admin_user';
                break;
            case 'category':
                //lay du lieu
                include_once 'model/m_category.php';
                // hien thi du lieu
                $view_name='admin_category';
                break;
            case 'book':
                //lay du lieu
                include_once 'model/m_book.php';
                // hien thi du lieu
                $view_name='admin_book';
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
                    $HoTen=$_POST['HoTen'];
                    $ViTien=$_POST['ViTien'];
                    $Quyen=$_POST['Quyen'];
                    $kq=user_checkPhone($SoDienThoai);
                    if($kq){
                        // bi trung, khong them
                        $_SESSION['loi']='Không thể tạo tài khoản với số điện thoại <strong>'.$SoDienThoai.'</strong>';
                    }else{
                        //khong trung
                        $MatKhau=12345;
                        $HinhAnh='defaut.png';
                        user_add($SoDienThoai,$HoTen,$MatKhau,$ViTien,$Quyen,$HinhAnh);
                        $_SESSION['thongbao']='Đã tạo tài khoản với số điện thoại <strong>'.$SoDienThoai.'</strong> thành công';
                    }
                }
                // hien thi du lieu
                $view_name='admin_user_add';
                break;
            case 'user-edit':
                //lay du lieu
                include_once 'model/m_user.php';
                $tk=user_getById($_GET['id']);
                if(isset($_POST['submit'])){
                    $SoDienThoai=$_POST['SoDienThoai'];
                    $HoTen=$_POST['HoTen'];
                    $ViTien=$_POST['ViTien'];
                    $Quyen=$_POST['Quyen'];
                    $kq=user_checkPhone($SoDienThoai);
                    $MaTK=$_GET['id'];
                    if($kq && $kq['MaTK']!=$MaTK){
                        // bi trung, khong them
                        $_SESSION['loi']='Không thể tạo tài khoản với số điện thoại <strong>'.$SoDienThoai.'</strong>';
                    }else{
                        //khong trung
                        user_edit($MaTK,$SoDienThoai,$HoTen,$ViTien,$Quyen);
                        $_SESSION['thongbao']='Thông tin thay đổi đã được lưu lại!';
                    }
                }
                // hien thi du lieu
                $view_name='admin_user_edit';
                break;
            case 'user-delete':
                //lay du lieu
                include_once 'model/m_user.php';
                user_delete($_GET['id']);
                header('location: '.$base_url.'admin/user');
                // hien thi du lieu
                $view_name='admin_user_delete';
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