<?php 
    include_once 'm_pdo.php';
    // thao tac du lieu trong cs fql
    function comment_add($MaTK,$MaSach,$NoiDung){
        pdo_execute("INSERT INTO camnghi(`MaTK`,`MaSach`,`NoiDung`) VALUES(?,?,?)",$MaTK,$MaSach,$NoiDung);
    }
    function comment_getByBook($MaSach){
        return pdo_query("SELECT * FROM camnghi cn INNER JOIN taikhoan tk ON cn.MaTK=tk.MaTK WHERE cn.MaSach=?",$MaSach);
    }
?>