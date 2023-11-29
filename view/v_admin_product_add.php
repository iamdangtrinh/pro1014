<style>
    .row{
        display: none;
    }
    .box{
    padding: 10px;
}
.box_content{
    margin-top: 55px;
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
</style>
        <div class="box_content">
            <h1>Thêm sản phẩm</h1>
            <div class="box">
                <form action="<?=$base_url?>admin/product/add" method="POST" enctype="multipart/form-data_">
                    <div class="roww">
                    <div  class="col-md-8">
                                <div class="mb-3">
                                    <label for="MaSP" class="form-label">Mã sản phẩm</label>
                                    <input style="height:42.8px;" type="text" class="form-control" id="MaSP" name="MaSP" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="TenSP" class="form-label">Tên sản phẩm</label>
                                    <input style="height:42.8px;" type="text" class="form-control" id="TenSP" name="TenSP" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="SoLuong" class="form-label">Số lượng</label>
                                    <input style="height:42.8px;" type="text" class="form-control" id="SoLuong" name="SoLuong" value="">  
                                </div>
                                <div class="mb-3">
                                    <label for="Gia" class="form-label">Giá</label>
                                    <input style="height:42.8px;" type="text" class="form-control" id="Gia" name="Gia" value="">  
                                </div>
                                <div class="mb-3">
                                    <label for="GiaGiam" class="form-label">Giá giảm</label>
                                    <input style="height:42.8px;" type="text" class="form-control" id="GiaGiam" name="GiaGiam" value="">  
                                </div>
                                <div class="mb-3">
                                    <label for="MoTa" class="form-label">Mô tả</label>
                                    <textarea cols="100" rows="5" name="MoTa" id="MoTa"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="AnhSP" class="form-label">Ảnh chính</label>
                                <input  type="file" class="form-control" id="AnhSP" name="AnhSP">
                            </div>
                            <div class="mb-3">
                                <label for="MaDM" class="form-label">Danh mục: </label>
                                <select id="MaDM" name="MaDM">
                                    <?php foreach( $danhmuc as $getdanhmuc ) :?>
                                    <option value="<?=$getdanhmuc['MaDM']?>"><?=$getdanhmuc['TenDM']?></option>
                                    <?php endforeach ;?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary" value="submit">Xác nhận</button>
                </form>
                <?php 
                     if(isset($tb)&&($tb!="")){
                          echo $tb;
                     }
                ?>
        </div>
        </div>