<?php include_once '../config.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>VNPAY RESPONSE</title>
    <!-- Bootstrap core CSS -->
    <link href="<?= $base_url ?>vnpay_php/assets/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?= $base_url ?>vnpay_php/assets/jumbotron-narrow.css" rel="stylesheet">
    <script src="<?= $base_url ?>vnpay_php/assets/jquery-1.11.3.min.js"></script>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
        
    }
    .container {
        height: auto;
        width: 500px;
        padding: 15px;
        background-color: pink;
        border-radius: 1rem;
    }

    .header {
        font-size: 20px;
        text-align: center;
        color: white;

    }

    .header img {
        width: 250px;
    }

    .table-responsive {
        background-color: white;
        padding: 15px;
        text-transform: uppercase;
        border-radius: 2rem;
    }

    .table-responsive :nth-child(8) {
        border: none;
    }

    .form-group {
        border-bottom: 1px solid pink;
        padding: 10px;
    }

    .form-group :nth-child(2) {
        font-weight: bold;
    }

    .footer {
        text-align: end;
    }
    .page a{
        text-decoration: none;
        color: pink;
        transition: 0.5s ease;
    }
    .page a:hover{
        color: #e65770;
    }
</style>

<body>
    <?php
    require_once("./config.php");
    $vnp_SecureHash = $_GET['vnp_SecureHash'];
    $inputData = array();
    foreach ($_GET as $key => $value) {
        if (substr($key, 0, 4) == "vnp_") {
            $inputData[$key] = $value;
        }
    }

    unset($inputData['vnp_SecureHash']);
    ksort($inputData);
    $i = 0;
    $hashData = "";
    foreach ($inputData as $key => $value) {
        if ($i == 1) {
            $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
        } else {
            $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
            $i = 1;
        }
    }

    $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
    ?>
    <!--Begin display -->
    <div class="container">
        <div class="header clearfix">
            <img src="<?= $base_url ?>upload/payments/Logo-VNPAY-QR.jpg" alt="">
            <h3 class="text-muted">THANH TOÁN QUA VÍ ĐIỆN TỬ VPNAY</h3>
        </div>
        <div class="table-responsive">
            <div class="form-group">
                <label>Mã đơn hàng:</label>

                <label><?php echo $_GET['vnp_TxnRef'] ?></label>
            </div>
            <div class="form-group">

                <label>Số tiền:</label>
                <label><?php echo $_GET['vnp_Amount'] ?></label>
            </div>
            <div class="form-group">
                <label>Nội dung thanh toán:</label>
                <label><?php echo $_GET['vnp_OrderInfo'] ?></label>
            </div>
            <div class="form-group">
                <label>Mã phản hồi (vnp_ResponseCode):</label>
                <label><?php echo $_GET['vnp_ResponseCode'] ?></label>
            </div>
            <div class="form-group">
                <label>Mã GD Tại VNPAY:</label>
                <label><?php echo $_GET['vnp_TransactionNo'] ?></label>
            </div>
            <div class="form-group">
                <label>Mã Ngân hàng:</label>
                <label><?php echo $_GET['vnp_BankCode'] ?></label>
            </div>
            <div class="form-group">
                <label>Thời gian thanh toán:</label>
                <label><?php echo $_GET['vnp_PayDate'] ?></label>
            </div>
            <div class="form-group">
                <label>Kết quả:</label>
                <label>
                    <?php
                    if ($secureHash == $vnp_SecureHash) {
                        if ($_GET['vnp_ResponseCode'] == '00') {
                            echo "<span style='color:blue'>GIAO DỊCH THÀNH CÔNG</span>";
                        } else {
                            echo "<span style='color:red'>GIAO DỊCH KhÔNG THÀNH CÔNG</span>";
                        }
                    } else {
                        echo "<span style='color:red'>CHỮ KÍ HỢP LỆ</span>";
                    }
                    ?>

                </label>
            </div>
        </div>
        <!-- <p>
                &nbsp;
            </p> -->
        <footer class="footer">
            <p>&copy; VNPAY <?php echo date('Y') ?></p>
        </footer>
    </div>
    <div class="page">
        <h2><a href="<?=$base_url?>page/chi-tiet-don-hang/<?=$_GET['vnp_TxnRef']?>">Xem chi tiết đơn hàng</a></h2>
    </div>
</body>

</html>