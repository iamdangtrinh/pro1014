<style>
    html {
    scroll-behavior: smooth;
  }
:root{
    --box-shadow: 0 2rem 3rem var(--color-light);
}

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
table {
    width: 100%;
    box-shadow: var(--box-shadow);
    border-radius: 5px;
    border: 1px solid pink;

}

thead {
    background-color: #ffff;
    color: black;
    font-size: 16px;
    border-radius: 10px;
  
}

tbody{
    border-radius: 20px;
}
th, td {
    padding: 15px;
    text-align: left;
    text-align: center;
    font-weight: 600;
    font-size: 14.5px;
    border-bottom: 1px solid pink;

}
td{
    background-color: #ffff;
}
.lenh{
        display: flex;
        text-align: center;
        justify-content: center;
    }
    .lenh div{
        margin: 2px;
    }
    .lenh div a{
        padding: 5px;
        font-size: 16px;
    }
    .sua a{
        border: 1px solid #ffff;
        background-color: #ffc0cba8;
        border-radius: 5px;
    }
    .sua a:hover{
        background: #6c9bcf;
        color: #fff;
        border-radius: 5px;
        border: 1px solid #ffff;
        color: #ffff;

    }
     .xoa a{
        border: 1px solid #ffff;
        background-color: #ffc0cba8;
        border-radius: 5px;
     }
    .xoa a:hover{
        background: #ba5a87;
        border-radius: 5px;
        border: 1px solid #ffff;
        color: #ffff;

    }
    .box_button{
        display: flex;
        margin-left: 5px;
    }
    .them{

       margin-top: 20px;
       padding: 10px;
       font-size: 16px;
       margin: 5px;
       background: pink;
       border-radius: 5px;
       color: #ffff;
    }
    .them:hover{
        box-shadow: 5px 5px 5px #ffd5dd;
        color: #fff;
        background: pink;
        
    }
    .remove{
        padding: 10px;
        font-size: 16px;
        margin: 5px;
        background: pink;
        border-radius: 5px;
        color: #ffff;
        }
    .remove:hover{
    box-shadow: 5px 5px 5px #ffd5dd;
    color: #fff;
    background: pink;
    
    }
    .button {
    position: fixed;
    bottom: 20px; 
    right: 20px; 
    background-color: #fcd2db; 
    color: white; 
    border: none; 
    padding: 10px 15px;
    text-align: center; 
    text-decoration: none; 
    display: inline-block;
    font-size: 16px; 
    cursor: pointer; 
    border-radius: 5px;
    }
    .button a{
        font-size: 16px;
        color: #ffff;
        font-weight: 600;

    }

    .button:hover {
    background-color: #ba5a87; /* Màu nền khi di chuột qua */
    }


</style>
            <!-- Recent Orders Table -->
            <div class="box_content" >
            <h1 id="bang_product">Quản lí sản phẩm</h1>
            <br>
            <div class="box_button" >
                <div><a href="<?=$base_url?>admin/product/add" class="them" style="font-weight: 600;">Thêm mới</a></div>
               
           </div>
           <br>
            <div class="box">
                <table>
                <thead  >
                        <tr>
                            <!-- <th class="chon">Chọn</th> -->
                            <th>Mã</th>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh</th>
                            <th>Số lượng</th>
                            <th>Danh mục</th>
                            <th>Giá</th>
                            <th>Giá giảm</th>
                            <th style="text-align: center;">Lệnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($show_product as $item_Product): ?>
                            <tr>
                            <td><?=$item_Product['MaSP']?></td>
                            <td><?=$item_Product['TenSP']?></td>
                            <td><img src="<?=$base_url?>upload/products/<?=$item_Product['AnhSP']?>" width="100" height="100" style="display: block; object-fit: contain;" alt=""></td>
                            <td style="width: 12%;"><?=$item_Product['SoLuong']?></td>
                            <td><?=$item_Product['TenDM']?></td>
                            <td><?=number_format($item_Product['Gia'],0,",",".")?>VND</td>
                            <td><?=number_format($item_Product['GiaGiam'],0,",",".")?>VND</td>
                            <td>
                                <div class="lenh">
                                    <div class="sua" ><a href="<?=$base_url?>admin/product/edit/<?=$item_Product['MaSP']?>" style="font-weight: 600; ">Sửa</a></div>
                                    <div class="xoa"><a href="<?=$base_url?>admin/product/delete/<?=$item_Product['MaSP']?> " onclick="return confirm('Bạn có chắc chắn xóa sản phẩm này?')"  style="font-weight: 600; ">Xóa</a></div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach ;?>
                  
                    </tbody>
                    </tbody>
                </table>

            </div>
            </div>
            <br>
            <button class="button"><a href="#bang_product"><i class="fa-solid fa-arrow-up"></i></a></button>
            <!-- End of Recent Orders -->
          