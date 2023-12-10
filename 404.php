<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    404
  </title>
  <meta name="description" content="Website bán hàng">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?= $base_url ?>upload/icons/favicon.png">

</head>
  <style>
    *{
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
      padding: 0;
    }
    h1 {
      text-align: center;
      font-size: 180px;
    }
    h3{
      text-align: center;
    }
    a{
      text-decoration: none;
      color: #c59b9c;
    }
    .row-404{
      width: 100%;
      height: 600px;
      background-image:url('upload/dribbble_1.gif');
      background-position: center;
      background-repeat: no-repeat;
    }
    
    .not-found{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

  </style>
  <body>
    <?php
    include_once 'config.php'
    ?>
    
    <div class="container">
      <div class="not-found">
        <div class="row-404">
          <h1>404</h1>
        </div>
        <!-- <div class="row">
          <img class="img" src="upload/dribbble_1.gif" alt="">
        </div> -->
        <div class="row">
          <h2>Trang không tồn tại</h2>
          <h3><a href="<?= $base_url ?>page/home">Quay về trang chủ</a></h3>
        </div>
      </div>

    </div>
  </body>

</html>