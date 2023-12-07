<?php 
   include_once 'm_pdo.php';
    function admin_ShowanhUser(){
    return pdo_query("SELECT * FROM taikhoan ");
    }
    function admin_getUser(){
        return pdo_query("SELECT * FROM taikhoan ORDER BY MaTK DESC LIMIT 4");
    }
    function admin_getHoaDon(){
        return pdo_query("SELECT * FROM hoadon WHERE TrangThai!='gio-hang' ORDER BY MaHD ASC LIMIT 4");
    }
    function admin_getById($MaDM){
        return pdo_query_one("SELECT * FROM  danhmuc WHERE MaDM=$MaDM");
    }
    function admin_getALLDM(){
        return pdo_query("SELECT *FROM danhmuc ");
    }     
    function admin_checkMaDM($MaDM) {
        return pdo_query_one("SELECT * FROM danhmuc WHERE MaDM=?", $MaDM);
    }
    function danhmuc_add($MaDM,$TenDM,$MaDMC){
      pdo_execute("INSERT INTO danhmuc(`MaDM`,`TenDM`,`MaDMC`) VALUES(?,?,?)", $MaDM,$TenDM,$MaDMC);
    }
    function admin_update_DM($MaDM,$TenDM,$MaDMC){
        return pdo_execute("UPDATE danhmuc SET TenDM=?, MaDMC=? WHERE MaDM=?",$TenDM,$MaDMC,$MaDM);
    }
    function admin_delete($MaDM){
        pdo_execute("DELETE FROM danhmuc WHERE MaDM=?", $MaDM);
    } 
  
    function admin_ShowProduct(){
        return pdo_query("SELECT sp.*, dm.TenDM, dm.MaDMC FROM sanpham sp INNER JOIN danhmuc dm ON sp.MaDM=dm.MaDM WHERE GiaGiam > 0 ORDER BY sp.MaSP ASC");
    }
    function admin_getPById_Product($MaSP){
        return pdo_query_one("SELECT * FROM sanpham WHERE MaSP=?",$MaSP);
    }
    function admin_checkMaSP($MaSP) {
        return pdo_query_one("SELECT * FROM sanpham WHERE MaSP=?",$MaSP);
    }
    function admin_AddProduct($TenSP, $anh, $anh1, $anh2, $anh3, $anh4, $SoLuong, $Gia, $GiaGiam, $MaDM, $MoTa){
    $conn = pdo_get_connection(); //gọi hàm kết nối database
    $sql = "INSERT INTO sanpham(TenSP, AnhSP, AnhSP1, AnhSP2, AnhSP3, AnhSP4, SoLuong, Gia, GiaGiam, MaDM, MoTa)
            VALUES ('$TenSP', '$anh', '$anh1', '$anh2', '$anh3', '$anh4',  '$SoLuong', '$Gia', '$GiaGiam', $MaDM, '$MoTa')";
    $conn->exec($sql); // exec the query
    $conn = null; // đóng kết nối database
    }
    function admin_UpdateProduct($MaSP, $TenSP, $anh, $anh1, $anh2, $anh3, $anh4, $SoLuong, $Gia, $GiaGiam, $MoTa){
        $conn = pdo_get_connection(); //gọi hàm kết nối database
        $sql = "UPDATE sanpham SET TenSP = ?, AnhSP = ?, AnhSP1 = ?, AnhSP2 = ?, AnhSP3 = ?, AnhSP4 = ?, SoLuong = ?, Gia = ?, GiaGiam = ?, MoTa = ? WHERE MaSP = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$TenSP, $anh, $anh1, $anh2, $anh3, $anh4, $SoLuong, $Gia, $GiaGiam, $MoTa, $MaSP]);
        $conn = null; // đóng kết nối database
    }

    function admin_Product_Delete($MaSP){
        pdo_execute("DELETE FROM sanpham WHERE MaSP=?", $MaSP);
       }
       function admin_Product_timxoaAnhSP($MaSP){
        $conn= pdo_get_connection(); 
        $stmt = $conn->prepare("SELECT * FROM sanpham WHERE MaSP=$MaSP");
        $stmt->execute();
        $mt = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $conn = null; 
        $Anh = array(
            $mt[0]['AnhSP'],
            $mt[0]['AnhSP1'],
            $mt[0]['AnhSP2'],
            $mt[0]['AnhSP3'],
            $mt[0]['AnhSP4']
        );
        return $Anh; 
    }
    



    // Xóa file ảnh 

    function admin_ShowBanner(){
        return pdo_query("SELECT * FROM banner");
    }
    function admin_chitietkBanner($MaBanner) {
        return pdo_query_one("SELECT * FROM banner WHERE MaBanner=?",$MaBanner);
    }
    
    function admin_AddBanner($banner_anh){
        $conn = pdo_get_connection(); //gọi hàm kết nối database
        $sql = "INSERT INTO banner (AnhBanner) VALUES (?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$banner_anh]);
        $conn = null; // đóng kết nối database
    }
    
      function admin_getPById_Banner($MaBanner){
        return pdo_query_one("SELECT * FROM banner WHERE MaBanner=?",$MaBanner);
    }
    
    function admin_edit_banner($MaBanner, $banner_anh){
        $conn = pdo_get_connection(); //gọi hàm kết nối database
        $sql = "UPDATE banner SET AnhBanner=? WHERE MaBanner=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$banner_anh,$MaBanner]);
        $conn = null; // đóng kết nối database
    }
    
    function admin_banner_Delete($MaBanner){
        $conn= pdo_get_connection(); //gọi hàm kết nối database
        $sql = "DELETE FROM banner WHERE MaBanner=$MaBanner ";
        $conn->exec($sql); // exec the query
        $conn = null; // đóng kết nối database
       }
       function admin_banner_timxoaAnhBanner($MaBanner){
        $conn= pdo_get_connection(); //gọi hàm kết nối database
        $stmt = $conn->prepare("SELECT * FROM banner WHERE MaBanner=$MaBanner");
        $stmt->execute();
        $mt = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $conn = null; // đóng kết nối database
        return $mt[0]['AnhBanner']; // biến này chứa mãng dòng dữ liệu trả về.
       }

    
    function admin_addkhuyenmai( $TenKM, $codeKhuyenMai, $soTienGiam, $ngayBatDau, $ngayKetThuc, $SoLuong) {
    return pdo_execute("INSERT INTO khuyenmai ( TenKM, CodeKM, GiaKM, NgayBatDau, NgayKetThuc, SoLuong) 
                        VALUES ( ?, ?, ?, ?, ?, ?)", 
                         $TenKM, $codeKhuyenMai, $soTienGiam, $ngayBatDau, $ngayKetThuc, $SoLuong);
    }
    
    function getallkm(){
        return pdo_query("SELECT * FROM khuyenmai");
    }
    function admin_getKMById($MaKM){
        return pdo_query_one("SELECT * FROM  khuyenmai WHERE MaKM=$MaKM");
    }
    function updatekm($tenKhuyenMai, $giaKhuyenMai, $ngayBatDau, $ngayKetThuc, $SoLuong, $maKhuyenMai){
         pdo_execute("UPDATE khuyenmai SET TenKM = '$tenKhuyenMai', GiaKM = '$giaKhuyenMai', NgayBatDau = '$ngayBatDau', NgayKetThuc = '$ngayKetThuc', SoLuong = '$SoLuong' WHERE MaKM = '$maKhuyenMai'");
    }
    function is_codeKM($codeKhuyenMai){
        return pdo_query_value("SELECT COUNT(*) FROM khuyenmai WHERE CodeKM = '$codeKhuyenMai'");
    }
    function xoakm($MaKM){
         pdo_execute("DELETE FROM khuyenmai WHERE MaKM = $MaKM");
    }
   
 
    function admin_donhang(){
        return pdo_query("SELECT
                            hd.`MaHD`,
                            hd.`TrangThai`,
                            tk.`SoDienThoai`,
                            tk.`HoTen`
                        FROM
                            `hoadon` hd
                        JOIN
                            `taikhoan` tk ON hd.`MaTK` = tk.`MaTK`
                        WHERE 
                            hd.TrangThai!='gio-hang'
                            ");
                        }
    function suaTT($TrangThai, $MaHD){
        return pdo_execute("UPDATE hoadon SET TrangThai = ? WHERE MaHD = ?", $TrangThai, $MaHD);
    }
    function get_MaHDbyid($MaHD){
        return pdo_query_one("SELECT MaHD FROM hoadon WHERE MaHD = ?", $MaHD);
    }
    function count_km(){
        return pdo_query_value("SELECT COUNT(MaKM) FROM khuyenmai");
    }




















?>