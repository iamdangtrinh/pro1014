
<style>
    .row{
        display: none;
    }
    .box{
    padding: 10px;
}
.box_content{
    margin-top: 105px;
    border: 2px solid pink;
    border-radius: 5px;
}
.box_content:hover {
    box-shadow: 5px 5px 5px #ffd5dd;
}
h1{
   color: black;
    padding-left: 8px;
    background-color: #fcd2db;
    padding: 10px;
}
.roww {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.col-md-8 {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    flex: 0 0 66.67%;
    max-width: 66.67%;
}

.col-md-4 {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    flex: 0 0 33.33%;
    max-width: 33.33%;
}
    body {
    font-family: Arial, sans-serif;
}

form {
    width: 100%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid pink;
    border-radius: 10px;
    background-color: #f8f8f8;
}

.form-label {
    font-size: 18px;
    color: #333;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid pink;
    border-radius: 5px;
    margin-top: 5px;

}

.btn {
    display: block;
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    color: #fff;
    background-color: pink;
    cursor: pointer;
    margin-top: 10px;
}

.btn:hover {
    background-color: #ffd5dd;
}
.mb-3{
    margin-bottom: 5px;
}
select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
}
/* css thông báo */
.success {
    border-radius: 4px;
    padding: 20px;
    color: white; 
    opacity: 1;
    transition: opacity 0.6s; 
    margin-bottom: 15px; 
    background-color: #4CAF50;
    font-size: 15px;
    font-weight: 600;
}
.danger {
    border-radius: 4px;
    padding: 20px;
    color: white; 
    opacity: 1;
    transition: opacity 0.6s; 
    margin-bottom: 15px; 
    background-color: #f44336;
    font-size: 15px;
    font-weight: 600;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
.boxtb{
    margin-top: 50px;
    margin-bottom: -40px;
}
</style>
            <div class="boxtb">
            <?php if(isset($_SESSION['thongbao'])): ?>
                <div class="success" >
                    <?=$_SESSION['thongbao']?>
                </div> 
            <?php endif; unset($_SESSION['thongbao']); ?>

            <?php if(isset($_SESSION['loi'])): ?>
                <div class="danger">
                    <?=$_SESSION['loi']?>
                </div> 
            <?php endif; unset($_SESSION['loi']); ?>
            </div>
            
        <div class="box_content">
            <h1>Thêm sản phẩm</h1>
            <div class="box">
                <form action="<?=$base_url?>admin/banner/edit" method="POST" enctype="multipart/form-data"> 
                            <div class="mb-3">
                                <label for="AnhBanner" class="form-label">Ảnh chính</label>
                                <input type="file"  name="banner_anh" class="form-control" id="AnhBanner" > 
                            </div>
                            <div class="mb-3">
                                <img width="350" height="350" src="<?=$base_url?>upload/banners/<?=$showbanner['AnhBanner']?>" alt="">
                            </div>
                    <button type="submit" name="submit" class="btn btn-primary" value="submit">Xác nhận</button>
                </form>
            
        </div>
        </div>