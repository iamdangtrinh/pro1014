
<style>
    .row{
        display: none;
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

</style>
<h2 class="mt-2">SỬA DANH MỤC</h2><br>
        
        <form action="" method="POST">
            <div class="mb-3">
                <label for="TenDM" class="form-label">Tên danh mục</label>
                <input  type="text" class="form-control" id="TenDM" name="TenDM" value="<?= $itemDM['TenDM']?>">  
            </div>
            <div class="mb-3">
                <label for="MaDMC" class="form-label">Mã danh mục con</label>
                <input  type="text" class="form-control" id="MaDMC" name="MaDMC" value="<?= $itemDM['MaDMC']?>">  
            </div>
            <!-- <div class="mb-3">
                <label for="Quyen" class="form-label">Quyền</label>
                <select class="form-control" id="Quyen" name='Quyen'>
                <option value="0" >Bạn đọc</option>
                <option value="1" >Quản lí</option>
                <option value="2" >Quản lí cấp cao</option>
                </select>
            </div> -->
            <!-- <div class="mb-3 form-check">
                <input  type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Bạn đọc</label>
            </div> -->
            <button type="submit" name="submit" class="btn btn-primary" value="submit">Xác nhận</button>
        </form>