
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
/* Show ảnh */
.showanh{
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.showanh div img{
    padding: 10px;
}
.error{
        color: red;
        font-weight: bold;
        font-size: 14px;
    }
    .boxtb{
        padding: 10px;
    }
</style>
        <div class="box_content">
            <h1>Sửa sản phẩm</h1>
            <br>
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
            <div class="box">
                <form action="" id="form_editProduct" method="POST" enctype="multipart/form-data">
                    <div class="roww">
                    <div class="col-md-4">
                            <div class="mb-3">
                                <label for="AnhSP" class="form-label">Ảnh chính</label>
                               <div class="showanh">
                                    <div><input type="file"  name="anh" class="form-control" id="AnhSP" ></div>
                                    <div><img src="<?=$base_url?>upload/products/<?=$show_AnhSP['AnhSP']?>" width = "100" height = "100" alt=""></div>
                               </div>
                            </div>
                            <div class="mb-3">
                                <label for="AnhSP1" class="form-label">Ảnh Phụ 1</label>
                               <div class="showanh">
                               <div><input type="file"  name="anh1" class="form-control" id="AnhSP1" ></div>
                                    <div><img src="<?=$base_url?>upload/products/<?=$show_AnhSP['AnhSP1']?>" width = "100" height = "100" alt=""></div>
                               </div>
                            </div>
                            <div class="mb-3">
                                <label for="AnhSP2" class="form-label">Ảnh Phụ 2</label>
                               <div class="showanh">
                                    <div><input type="file"  name="anh2" class="form-control" id="AnhSP2" ></div>
                                    <div><img src="<?=$base_url?>upload/products/<?=$show_AnhSP['AnhSP2']?>" width = "100" height = "100" alt=""></div>
                               </div>
                            </div>
                            <div class="mb-3">
                                <label for="AnhSP3" class="form-label">Ảnh Phụ 3</label>
                               <div class="showanh">
                                    <div><input type="file"  name="anh3" class="form-control" id="AnhSP3" ></div>
                                    <div><img src="<?=$base_url?>upload/products/<?=$show_AnhSP['AnhSP3']?>" width = "100" height = "100" alt=""></div>
                               </div>
                            </div>
                            <div class="mb-3">
                                <label for="AnhSP4" class="form-label">Ảnh Phụ 4</label>
                               <div class="showanh">
                               <div><input type="file"  name="anh4" class="form-control" id="AnhSP4" ></div>
                                    <div><img src="<?=$base_url?>upload/products/<?=$show_AnhSP['AnhSP4']?>" width = "100" height = "100" alt=""></div>
                               </div>
                            </div>
                        </div>
                    <div  class="col-md-8">
                                <div class="mb-3" style="padding-bottom: 15px;">
                                    <label for="TenSP" class="form-label">Tên sản phẩm</label>
                                    <input style="height:42.8px;" type="text" class="form-control" id="TenSP" name="TenSP" value="<?=$show_AnhSP['TenSP']?>">
                                </div>
                                <div class="mb-3" style="padding-bottom: 15px;">
                                    <label for="SoLuong" class="form-label">Số lượng</label>
                                    <input style="height:42.8px;" type="text" class="form-control" id="SoLuong" name="SoLuong" value="<?=$show_AnhSP['SoLuong']?>">  
                                </div>
                                <div class="mb-3" style="padding-bottom: 15px;">
                                    <label for="Gia" class="form-label">Giá</label>
                                    <input style="height:42.8px;" type="text" class="form-control" id="Gia" name="Gia" value="<?=$show_AnhSP['Gia']?>">  
                                </div>
                                <div class="mb-3" style="padding-bottom: 15px;">
                                    <label for="GiaGiam" class="form-label">Giá giảm</label>
                                    <input style="height:42.8px;" type="text" class="form-control" id="GiaGiam" name="GiaGiam" value="<?=$show_AnhSP['GiaGiam']?>">  
                                </div>
                                <div class="mb-3">
                                    <label for="MoTa" class="form-label">Mô tả</label>
                                    <textarea cols="100" rows="15" name="MoTa" id="MoTa" style="border: 1px solid pink; border-radius :5px"><?=$show_AnhSP['MoTa']?></textarea>
                            </div>
                        </div>
                       
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary" value="submit">Xác nhận</button>
                </form>
            
        </div>
        </div>
        <script>
    function numericInputHandler(inputId) {
    $(inputId).on("keyup", function () {
        var value = $(this).val();
        value = value.replace(/[^0-9]/g, ""); // Loại bỏ các ký tự không phải số
        $(this).val(value);
    });
}

numericInputHandler("#SoLuong");
numericInputHandler("#Gia");
numericInputHandler("#GGiaGiam");

    $(document).ready(function(){
        $("#form_editProduct").validate({
            rules: {
                anh: {
                    required: true,
                },
                TenSP: {
                    required: true,
                    minlength: 8,
                },
                SoLuong: {
                    required: true,
                },
                Gia: {
                    required: true,

                },
                GiaGiam: {
                    required: true,
                },
                MoTa:{
                    required: true,
                    minlength: 50,
                }
            },
            messages:{
                anh: {
                    required :"*Vui lòng chọn ảnh chính của sản phẩm"
                },
                TenSP: {
                    required: "*Vui lòng nhập tên sản phẩm",
                    minlength: "*Tên sản phẩm ít nhất 6 kí tự",
                },
                SoLuong: {
                    required :"*Vui lòng nhập số lượng sản phẩm"
                },
                Gia: {
                    required :"*Vui nhập giá của sản phẩm"
                },
                GiaGiam: {
                    required :"*Vui lòng nhập giá giảm của sản phẩm(Số 0 nếu không có giá được giảm)"
                },
                MoTa:{
                    required: "Vui lòng nhập mô tả sản phẩm",
                    minlength: "Mô tả ít nhất 20 kí tự",
                }
            }
        }) 
    })
</script>