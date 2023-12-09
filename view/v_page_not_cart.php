<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empty Shopping Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cart-container {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
            padding: 2rem;
            text-align: center;
        }

        .cart-container .img {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cart-title {
            color: #000;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .cart-text {
            margin-bottom: 1rem;
            font-size: 3.2rem;
            font-weight: 700;
        }

        .cart-suggestion {
            color: #4b5563;
        }
    </style>
</head>

<body>
    <div class="cart-container mt-4">
        <div class="img">
            <img class="" src="<?= $base_url ?>assets/images/cart.png" alt="">
        </div>
        <cart class="title">
            <h1 class="cart-text">Giỏ hàng trống</h1>
            <h3 class="cart-suggestion">Bạn tham khảo thêm các sản phẩm được <a href="<?=$base_url?>page/shop">cửa hàng Bé Yêu gợi ý nhé</a>!</h3>
        </cart>
    </div>
</body>

</html>