<?php 
    function category_getAll(){
        return pdo_query("SELECT * FROM chude");
    }
    function category_getById($id){
        return pdo_query_one("SELECT * FROM chude WHERE MaCD = ?",$id);
    }
    function category_statByBook(){
        return pdo_query("SELECT cd.MaCD,cd.TenChuDe,COUNT(s.MaSach) as SoLuong,AVG(s.GiaTri) as TrungBinh,MIN(s.GiaTri) as ThapNhat,MAX(s.GiaTri) as CaoNhat FROM chude cd LEFT JOIN sach s ON cd.MaCD=s.MaCD GROUP BY cd.MaCD,cd.TenChuDe");
    }
?>