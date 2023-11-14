<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./fonts/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title>P&G Manga Shop</title>
</head>
<body>
 <div class="modal">
        <div class="modal__overlay">

        </div>
        <div class="modal__body"> 
            <!-- register form -->
            <div class="auth-form">
                <form method="POST" action="register_process.php">
                    <div class="auth-form__container">
                        <div class="auth-form__header">
                            <h3 class="auth-form__heading">Đăng ký</h3>
                            <a href="login.php" class="auth-form__switch-btn">Đăng nhập</a>
                        </div>

                        <div class="auth-form__form"> 
                            <div class="auth-form__group">
                                <input type="text" name="username" class="auth-from__input" placeholder="Nhập email của bạn" required>
                            </div>

                            <div class="auth-form__group">
                                <input type="password" name="password" class="auth-from__input" placeholder="Nhập mật khẩu" required>    
                            </div>

                            <div class="auth-form__group">
                                <input type="password" name="confirm_password" class="auth-from__input" placeholder="Nhập lại mật khẩu" required>
                            </div>
                        </div>
                        <div class="auth-form__aside">
                            <p class="auth-form__policy-text">
                                Bằng việc đăng kí bạn đã đồng ý với 
                                <a href="" class="auth-form__text-link">Điều khoảng dịch vụ</a>
                                <a href="" class="auth-form__text-link">và chính sách bảo mật</a>
                            </p>
                        </div>
                        <div class="auth-form__controls">
                            <a href="index.php"  class="btn btn--normal auth-form__controls-back">Trở lại</a>
                            <button type="submit" class="btn btn--primary">Đăng Ký</button>
                        </div>
                    </div>
                </form>

                    <div class="auth-form__socials">
                        <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                            <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                            <span class="auth-form__socials-title--facebook">
                                Kết nối với Facebook
                            </span>
                        </a>

                        <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                            <i class="auth-form__socials-icon fa-brands fa-google"></i>
                            <span class="auth-form__socials-title--google">
                                Kết nối với Google
                            </span>
                        </a>
                    </div>
            </div>
        </div>
    </div> 
</body>
</html>