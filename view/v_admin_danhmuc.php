<style>
    .recent-orders{
        border-radius: 10px;
    }
    table{
        font-size: 16px;
        text-align: center;
        border-collapse: collapse;
      
      
    }
    table thead{
        background: #ffc0cba8;
       
        
    }
    table thead tr .chon{
        border-radius: 20px 0 0 0 ;
    }
    table thead tr th, table tbody tr td{
        border-bottom: 3px solid pink;
        text-align: center;
    }

    .row {
        display: none;
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
    .sua a:hover{
        background: #f8d7da;
        color: #fff;
        border-radius: 5px;
    }
  
    .xoa a:hover{
        background: #f8d7da;
        border-radius: 5px;
    }
</style>
            <h1>Danh mục</h1>
            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <table>
                    <thead  >
                        <tr>
                            <th class="chon">Chọn</th>
                            <th>Mã danh mục</th>
                            <th>Tên danh mục</th>
                            <th>Tên danh mục con</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center;">
                                <form>
                                    <input type="checkbox" name="" value="">
                                </form>
                            </td>
                            <td>1234</td>
                            <td >Bé trai</td>
                            <td>Áo</td>
                            <td >
                                <div class="lenh">
                                    <div class="sua" ><a href="" style="font-weight: 600; color: #6c9bcf;">Sửa</a></div>
                                    <div class="xoa"><a href=""  style="font-weight: 600; color: #ba5a87;">Xóa</a></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                           <td>
                                <form>
                                    <input type="checkbox" name="" value="">
                                </form>
                            </td>
                            <td>1234</td>
                            <td >Bé trai</td>
                            <td>Quần</td>
                            <td >
                                <div class="lenh">
                                    <div class="sua" ><a href="<?=$base_url?>admin/sua" style="font-weight: 600; color: #6c9bcf;">Sửa</a></div>
                                    <div class="xoa"><a href=""  style="font-weight: 600; color: #ba5a87;">Xóa</a></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- End of Recent Orders -->
          