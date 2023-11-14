<div class="header">
            <div class="grid">
                <nav class="header__navbar">
                    <ul class = "header__navbar-list">
                        <li class="header__navbar-item">
                            <a href="add_book.php" class="header__navbar-item-link">Trang quản lý</a>
                        </li>
                    </ul>

                    <ul class = "header__navbar-list">
                        <li class="header__navbar-item">
                            <a href="" class="header__navbar-item-link">
                                Trang chủ
                            </a>
                        </li>

                        <li class="header__navbar-item">
                        <?php
                        // Kiểm tra đăng nhập
                        session_start();
                        if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
                            // Nếu đã đăng nhập, hiển thị thông tin người dùng và nút đăng xuất
                            echo "<p>Xin chào, " . $_SESSION["username"] . "!</p>";
                            echo '<a href="logout.php">Đăng xuất</a>';
                        } else {
                            // Nếu chưa đăng nhập, hiển thị nút đăng nhập và đăng ký
                            echo '<a href="login.php" class="header__navbar-item-link">Đăng nhập</a>';
                            echo '<a href="register.php" class="header__navbar-item-link">Đăng ký</a>';
                        }
                        ?>
                            <!-- <a href="login.php" class="header__navbar-item-link">
                                Đăng nhập
                            </a> -->
                        </li>

                        <!-- <li class="header__navbar-item">
                            <a href="register.php" class="header__navbar-item-link">
                                Đăng kí
                            </a>
                        </li> -->
                    </ul>
                </nav>

                <div class="header-with-search">
                    <a href="index.html" class="header__logo">
                        <img src="LOGO.png">
                    </a>

                    <div class="header__search">
                        <div class="header__search-input-wrap">
                            <input type="text" class="header__search-input" placeholder="Tìm kiếm sản phẩm">
                        </div>
    
                        <button class="header__search-btn">
                            <i class="header__search-btn-icon fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                    
                    <div class="header__cart">
                        <div class="header__cart-wrap">
                            <a href="cart.php" class="header__cart-icon fa-solid fa-cart-shopping"></a>
                            <span class="header__cart-notice">0</span>
                        </div>                            
                    </div>
                </div>
            </div>
        </div>