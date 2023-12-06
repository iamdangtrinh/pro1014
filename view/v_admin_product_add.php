
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
            <h1>Thêm sản phẩm</h1>
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
                <form action="<?=$base_url?>admin/product/add" id="form_addProduct" method="POST" enctype="multipart/form-data">
                    <div class="roww">
                    <div class="col-md-4">
                            <div class="mb-3">
                                <label for="AnhSP" class="form-label">Ảnh chính</label>
                                <input type="file"  name="anh" class="form-control" id="AnhSP" > 
                            </div>
                            <div class="mb-3">
                                <label for="AnhSP1" class="form-label">Ảnh Phụ 1</label>
                                <input type="file"  name="anh1" class="form-control" id="AnhSP" > 
                            </div>
                            <div class="mb-3">
                                <label for="AnhSP2" class="form-label">Ảnh phụ 2</label>
                                <input type="file"  name="anh2" class="form-control" id="AnhSP" > 
                            </div>
                            <div class="mb-3">
                                <label for="AnhSP3" class="form-label">Ảnh phụ 3</label>
                                <input type="file"  name="anh3" class="form-control" id="AnhSP" > 
                            </div>
                            <div class="mb-3">
                                <label for="AnhSP4" class="form-label">Ảnh phụ 4</label>
                                <input type="file"  name="anh4" class="form-control" id="AnhSP" > 
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
                    <div  class="col-md-8">
                                <div class="mb-3">
                                    <label for="TenSP" class="form-label">Tên sản phẩm</label>
                                    <input style="height:42.8px;" type="text" class="form-control" id="TenSP" name="TenSP" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="SoLuong" class="form-label">Số lượng</label>
                                    <input style="height:42.8px;" type="text" class="form-control" id="SoLuong" name="SoLuong" value="" >  
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
        $("#form_addProduct").validate({
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