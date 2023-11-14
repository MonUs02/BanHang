<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_SESSION["cart"])) {
        $bookId = $_POST["book_id"];
        if (!in_array($bookId, $_SESSION["cart"])) {
            $_SESSION["cart"][] = $bookId;
        }
    } else {
        $bookId = $_POST["book_id"];
        $_SESSION["cart"] = [$bookId];
    }

    // Hiển thị thông báo hoặc chuyển hướng người dùng đến giỏ hàng
    echo "<p>Sản phẩm đã được thêm vào giỏ hàng.</p>";
    echo '<a href="cart.php">Xem giỏ hàng</a>';
}
?>
<br>
<a href="index.php">Quay lại</a>