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

  <!-- linh cdn fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Plugins CSS File -->
  <link rel="stylesheet" href="<?= $base_url ?>assets/css/bootstrap.min.css">

  <!-- Main CSS File -->
  <link rel="stylesheet" href="<?= $base_url ?>assets/css/style23.css">
  <link rel="stylesheet" href="<?= $base_url ?>assets/css/demo23.min.css">
  <!-- <link rel="stylesheet" href="<?= $base_url ?>assets/css/all.min.css"> -->

  <!-- Js -->
  <script src="<?= $base_url ?>assets/js/jquery.min.js"></script>
  <script src="<?= $base_url ?>assets/js/validate.js"></script>

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
    <div class="container">
      <div class="not-found">
        <div class="row-404">
          <h1>404</h1>
        </div>
        <!-- <div class="row">
          <img class="img" src="upload/dribbble_1.gif" alt="">
        </div> -->
        <div class="row">
          <h2>Trang không tìm thấy</h2>
          <h3><a href="<?= $base_url ?>page/home">Quay về trang chủ</a></h3>
        </div>
      </div>

    </div>
  </body>

</html>