<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="stylee.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sometype+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./fonts/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title>P&G Manga Shop</title>
</head>
<body>
    <div class="home">
        <?php
            include("pages/banner.php");
            include("pages/header.php");
        ?>
        
        <section class="cart">
            <div class="container">
                <div class="cart-top-wrap">
                    <div class="cart-top">
                        <div class="cart-top-cart cart-top-item">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
    
                        <div class="cart-top-address cart-top-item">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
    
                        <div class="cart-top-payment cart-top-item">
                            <i class="fa-solid fa-money-bill"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="cart-content grid__row">
                    <div class="cart-content-left">
                        <table>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Màu</th>
                                <th>Size</th>
                                <th>SL</th>
                                <th>Thành tiền</th>
                                <th>Xoá</th>
                            </tr>

                            <tr>
                                <td>
                                    <img src="./assets/image/mizunofangpro.webp" alt="">
                                </td>
                                <td><p>Mizuno WAWE FANG PRO</p></td>
                                <td><p>Trắng vàng</p></td>
                                <td><p>42</p></td>
                                <td>
                                    <input type="number" value="1" min="1">
                                </td>
                                <td>
                                    <p>3.450.000<sup>đ</sup></p>
                                </td>
                                <td><span>X</span></td>
                            </tr>
                        </table>
                    </div>

                    <div class="cart-content-right">
                        <table>
                            <tr>
                                <th colspan="2">Tổng tiền giỏ hàng</th>  
                            </tr>
                            <tr>
                                <td>Tổng sản phẩm</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Tổng tiền hàng</td>
                                <td><p>3.450.000<sup>đ</sup></p></td>
                            </tr>
                            <tr>
                                <td>Tạm tính</td>
                                <td><p style="color: blue; font-weight: bold;">3.450.000<sup>đ</sup></p></td>
                            </tr>
                        </table>
                        <div class="cart-content-right-button">
                            <a href="index.php" class="cart-content-right-button-btn btn btn--primary">Tiếp tục mua sắm</a>
                            <a href="delivery.html"  class="cart-content-right-button-btn btn btn--primary">Thanh toán</a>
                        </div>
                        <div class="cart-content-right-login">
                            <p>Hãy<a href="">Đăng nhập</a>tài khoản để tích điểm thành viên</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>   
</body>
</html>
    