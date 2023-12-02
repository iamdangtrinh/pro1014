<style>
:root{
    --box-shadow: 0 2rem 3rem var(--color-light);
}

.row{
    display: none;
}
.box{
    margin-top: 10px;
}
h1{
    margin-top: 10px;
}
table {
    width: 100%;
    border-collapse: collapse;
    box-shadow: var(--box-shadow);
    border-radius: 10px;
}
table:hover {
    box-shadow: 5px 5px 5px #ffd5dd;
    
}

thead {
    background-color: #ffc0cba8;
    color: white;
    font-size: 16px;
    
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
}
td{
    background-color: #ffc0cb33;
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
</style>
            <h1>Quản lí danh mục</h1>
            <br>
            <!-- Recent Orders Table -->
            <div class="box_button">
                <div><a href="<?=$base_url?>admin/category/them" class="them" style="font-weight: 600;">Thêm mới</a></div>
                <div><a href="<?=$base_url?>admin/" class="remove" style="font-weight: 600;">Xóa hết</a></div>
           </div>
           <br>
            <div class="box">
               
                <table>
                <thead  >
                        <tr>
                            <!-- <th class="chon">Chọn</th> -->
                            <th>Mã danh mục</th>
                            <th>Tên danh mục</th>
                            <th>Mã danh mục con</th>
                            <th style="text-align: center;">Lệnh</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($dsADMIN_DM as $itemDM) :?>
                        <tr>
                            <!-- <td style="text-align: center;">
                                <form>
                                    <input type="checkbox" name="" value="">
                                </form>
                            </td> -->
                            <td><?=$itemDM['MaDM']?></td>
                            <td ><?=$itemDM['TenDM']?></td>
                            <td ><?=$itemDM['MaDMC']?></td>
                            <td >
                                <div class="lenh">
                                    <div class="sua" ><a href="<?=$base_url?>admin/category/edit/<?=$itemDM['MaDM']?>" style="font-weight: 600; ">Sửa</a></div>
                                    <div class="xoa"><a href="<?=$base_url?>admin/category/delete/<?=$itemDM['MaDM']?>"  style="font-weight: 600; ">Xóa</a></div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ;?>
                    </tbody>
                    </tbody>
                </table>

            </div>
            <!-- End of Recent Orders -->
          